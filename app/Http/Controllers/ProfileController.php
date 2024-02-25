<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use File;

class ProfileController extends Controller
{
       
    public function admin(){
        return  view('Admin.admins.profile');
    }

    public function updateadmin(Request $request ,$id){


        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:admins,email,'.$id
        ]);


      $admin = Admin::findOrfail($id);         
        try{
        if (request()->hasFile('image')){
            $imagePath = public_path('imageAdmins/'.$admin->image_name);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $fileName = time().'.'.$request->file('image')->extension();  
            $request->file('image')->move(public_path('imageAdmins'), $fileName); 
            } else {
                $fileName = $admin->image_name ;
            }
          
       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->image_name =   $fileName;
       $admin->save();

       
       Session::flash('message', 'Udpate Success'); 
       
       return redirect()->back();

    }catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }



    // Edit On Pass 
    public function updatePassword(Request $request) 
    {
        if(auth('admin')->check()){
          $guard = 'admin';   
          $Model=  '\App\Models\Admin' ;   
        }elseif(auth('student')->check()){
            $guard = 'student';
            $Model = '\App\Models\Student';  
        }elseif(auth('doctor')->check()){
            $guard = 'doctor'; 
            $Model = '\App\Models\Doctor';  
        }else{
            $guard = 'accountant'; 
            $Model = '\App\Models\Accountant';
        }

                # Validation
                $request->validate([
                    'old_password' => 'required',
                    'new_password' => 'required|confirmed',
                ]);

                if(!Hash::check($request->old_password, Auth::guard($guard)->user()->password)){
                    return back()->with("message", "Old Password Doesn't match!");
                }
 
                
        #Update the new Password
        $Model::whereId(Auth::guard($guard)->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        // return   $Model::where('id' ,Auth::guard($guard)->user()->id)->get();

        return back()->with("message", "Password changed successfully!");


    }



     
}
