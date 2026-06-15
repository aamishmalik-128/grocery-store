<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;

class AdminUserController extends Controller
{
    public function index(){
        $users=User::get();
        return view ('admin.user.index',compact('users'));
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
     
   

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
        ]);
        $user =new User();
        if($request->photo){
            $request->validate([
                'photo'=>'image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $final_name='user_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads/'),$final_name);
            $user->photo=$final_name;
        }
           //random password
      $randomPassword= bin2hex(random_bytes(4));
     


        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->country=$request->country;
        $user->state=$request->state;
        $user->city=$request->city;
        $user->zip=$request->zip;
        $user->status=$request->status;
        $user->password= bcrypt($randomPassword);
        $user->save();


        //sending mail to user with crediential

         // sending mail to user with credentials
    $subject = 'Your Account is created';
    $message = 'See your details below <br>';
    $message .= 'Email: ' . $request->email . '<br>';
    $message .= 'Password: ' . $randomPassword . '<br>';
    Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('admin_user_index')->with('success','User created successfully');
    }

    public function edit($id)
    {
        $user =User::where('id',$id)->first();
        return view('admin.user.edit',compact('user'));
    }


    public function update($id, Request $request){
         $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
        ]);

        $user = User::where('id',$id)->first();

         if($request->photo){
            $request->validate([
                'photo'=>'image|mimes:jpeg,jpg,gif,png,svg|max:2048',
            ]);
            $final_name='user_'.time().'.'.$request->photo->extension();
            if($user->photo != ''){
                unlink(public_path('uploads/'.$user->photo));
            }

            $request->photo->move(public_path('uploads/'),$final_name);
            $user->photo=$final_name;
        }
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->country=$request->country;
        $user->state=$request->state;
        $user->city=$request->city;
        $user->zip=$request->zip;
        $user->status=$request->status;
        $user->save();


        return redirect()->route('admin_user_index')->with('success','User updated successfully');

    }


    public function delete($id){
        $user =User::where('id',$id)->first();
        if($user){
            if($user->photo != ''){
                unlink(public_path('uploads/'.$user->photo));
            }
            $user->delete();
            return redirect()->route('admin_user_index')->with('success','User deleted successfully');
        }
        else{
            return redirect()->route('admin_user_index')->with('error','User not found');
        }
    }

}
