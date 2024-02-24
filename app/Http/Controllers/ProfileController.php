<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Session;

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
     
}
