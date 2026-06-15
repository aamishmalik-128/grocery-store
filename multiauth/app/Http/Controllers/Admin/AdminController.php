<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        return view('admin.dashboard.index');
    }
    public function login()
    {
        return view('admin.auth.login');
    }

    public function login_submit(Request $request)
    {
        //validation first
        $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);
        //getting request
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password']
        ];
        //matching request using auth+guard and attempt function
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin_dashboard')->with('success','Logged in successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success', 'Logout Successfully');
    }


    public function forget_password()
    {
        return view('admin.auth.forget_password');
    }
    public function forget_password_submit(Request $request)
    {
        //validating email
        $request->validate([
            'email' => 'required | email',
        ]);
        //searching for email
        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) {
            return redirect()->back()->with('error', 'Email not found');
        }
        //generating and storing token
        $token = hash('sha256', time());
        $admin->token = $token;
        $admin->update(); 

        //sending link
        $link = route('admin_reset_password', [$token, $request->email]);
        $subject = 'RESET PASSWORD';
        $message = "
        <p>CLICK ON THE FOLLOWING LINK TO RESET PASSWORD</p>
        <p><a href='{$link}'>Reset Password</a></p>
        ";
        //sending link to mail via mail function
        //mail func, to (email) send (new webmail(passing subject and body))
        Mail::to($request->email)->send(new Websitemail($subject, $message));
        return redirect()->back()->with('success', 'Reset password link was sent to your email');
    }

//for reseting passwording we will use token and email in url
    public function reset_password($token, $email)
    {
        //search for email and token in db
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        if (!$admin) {
            return redirect()->route('admin_login')->with('error', 'Invalid token or email');
        }
        return view('admin.auth.reset_password', compact('token', 'email'));
    }

    public function reset_password_submit($token, $email, Request $request)
    {
        //validating password and confirm password
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        // searching based on email
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        //hasing the password and storing it
        $admin->password = Hash::make($request->password);
        $admin->token = '';
        $admin->update();

        return redirect()->route('admin_login')->with('success', 'Password reset successfully');
        // return view('admin.reset_password', compact('token', 'email'));
    }



    public function admin_profile()
    {
        return view('admin.profile.index');
    }




    public function admin_profile_submit(Request $request)
    {
        //validating the inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . Auth::guard('admin')->id(),
        ]);
        //finding based on id
        $admin = Admin::find(Auth::guard('admin')->id());
        if ($request->photo) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $final_name = 'admin_' . time() . '.' . $request->photo->extension();

            if ($admin->photo != '') {
                unlink(public_path('uploads/' . $admin->photo));
            }

            $request->photo->move(public_path('uploads/'), $final_name);
            $admin->photo = $final_name;
        }

        if ($request->password) {
            $request->validate([
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]);
            $admin->password = Hash::make($request->password);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;

        $admin->update();

        return redirect()->route('admin_dashboard')
            ->with('success', 'Profile updated successfully');
    }
}
 