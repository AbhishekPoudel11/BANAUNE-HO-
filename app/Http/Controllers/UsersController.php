<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->route('admin.user')->withSuccess('User has been deleted successfully');
    }
    public function update(Request $request, $id){
        $user=User::find($id);
        $name=$user->name=$request->name;
        $email=$user->email=$request->email;
        $password=$user->password=$request->password;
        $address=$user->address=$request->address;
        $phone=$user->phone=$request->phone;
        $user->update(['name'=>$name,'email'=>$email,'password'=>$password,'address'=>$address,'phone'=>$phone]);
        return redirect()->route('user.profile.edit')->withSuccess('Profile updated successfully');
        
    }
    public function upload(Request $request, $id)
    {
        $user=User::find($id);
        if($request->hasFile('images')){
            $filename=$request->images->getClientOriginalName();
            $request->images->storeAs('images',$filename,'public');
            $user->update(['images'=>$filename]);
        }
        return redirect()->route('profile.index')->withSuccess('Image has been uploaded successfully');
    }
}
