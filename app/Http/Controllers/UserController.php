<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\PasswordReset;
use Mail;
use App\Mail\VerificationEmail;
use App\Mail\ResetCodeMail;
class UserController extends Controller
{
    public function RegisterUser(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'birthday' => 'required',
            'email' => 'required|email',
            'password' => 'min:6|required_with:passwordCon|same:passwordCon',
            'passwordCon' => 'min:6'
        ]);


    	// create new user
    	$CreateUser = new User();
    	$CreateUser->fname = $request['fname'];
    	$CreateUser->lname = $request['lname'];
    	$CreateUser->birthday = $request['birthday'];
    	$CreateUser->mobile = $request['mobile'];
    	$CreateUser->email = $request['email'];
    	$CreateUser->password = bcrypt($request['password']);
    	$CreateUser->email_verification_token = Str::random(40);
    	$CreateUser->save();

    	Mail::to($request['email'])->send(new VerificationEmail($CreateUser));
    	Auth::login($CreateUser);
    	return redirect('/');

    }

    public function LoginUser(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'min:6|required',
        ]);

    	if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'] ])) {
            return redirect()->back();
		}else{
			return "Credential error";
		}
    }

    public function SendEmailDone($email,$verificationToken)
    {

    	$user = User::where('email',$email)->where('email_verification_token',$verificationToken)->first();

    	if ($user != NULL){
    		User::where('id',$user->id)->update(['status' => 1,'email_verification_token' => 'NULL']);
    		return redirect('/');
    	}
    }

    public function sendLinkEmail(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if($user == null){
            return 'Unknown User';
        }
        $tokenReset = Str::random(40);
        User::where('id',$user->id)->update([
            'resetToken' => $tokenReset,
        ]);
        $userUpdated = User::whereEmail($request->email)->first();
        Mail::to($request['email'])->send(new ResetCodeMail($userUpdated));

        return 'Email Sent to account';
    }

    public function ResetPassword(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'min:6|required_with:passwordCon|same:passwordCon',
            'passwordCon' => 'min:6'
        ]);

        $user = User::where('email',$request['email'])->first();

        if($user != NULL){
            User::where('email',$request['email'])->update([ 'password' => bcrypt($request['password']) ]);
            $this->LoginUser($request);
            return redirect()->back();
        }

        return "Unknown User";
    }

    public function getResetForm($email,$reset_token)
    {
        $user = User::where('email',$email)->where('resetToken',$reset_token)->first();

        if($user != NULL){
            User::where('id',$user->id)->update(['resetToken' => 'NULL']);
            return redirect('/home')->with('resetPassword','1');
        }

        return "Make Another request";

    }
}
