<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $userdatas = User::inRandomOrder()->get();

        return view("welcome", compact('userdatas'));
    }

    public function register()
    {
        return view("user.register");
    }


    public function registerPost(Request $request)
    {
        $request->validate([
            'prefixname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffixname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'photo' => 'required',
            'type' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 350)->save('storage/user/' . $name_gen);
        $save_url = 'storage/user/' . $name_gen;
        // dd($request->all());
        $user = new User();
        $user->prefixname = $request->prefixname;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->suffixname = $request->suffixname;
        $user->username = $request->username;
        $user->fullname = $request->fullname;

        $user->email = $request->email;
        $user->photo = $save_url;
        $user->type = $request->type;
        $user->avatar = $request->avatar;

        $user->password = Hash::make($request->password);
        $user->save();

        $notification = array(
            'message' => 'User Registered Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('user-login')->with($notification);

    }

    public function login()
    {
        return view("user.login");
    }

    public function loginPost(Request $request)
    {
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        $credentials['password'] = $request->password;
        // dd($credentials);
        if (Auth::guard('web')->attempt($credentials)) {
            // dd('hi');
            $notification1 = array(
                'message' => 'User Login Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('home')->with($notification1);
        } else {
            $notification2 = array(
                'message' => 'Invalid Credentials',
                'alert-type' => 'error'
            );
            return back()->with($notification2);
        }
    }

    public function profile()
    {
        $data1 = Auth::guard('web')->user();
        $id = Auth::guard('web')->user()->id;
        // dd($id);
        $data = User::find($id);
        return view("user.profile", compact('data', 'data1'));
    }

    public function userDetail($id)
    {
        $data1 = Auth::guard('web')->user();

        $data = User::find($id);
        return view("user.userdetail", compact('data', 'data1'));

    }

    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user-login')->with($notification);
    }

    public function editProfile()
    {
        $data1 = Auth::guard('web')->user();
        $id = Auth::guard('web')->user()->id;
        // dd($id);
        $data = User::find($id);

        return view("user.editprofile", compact('data', 'data1'));
    }

    public function userProfileUpdate(Request $request)
    {

        $id = Auth::guard('web')->user()->id;
        $data = User::find($id);
        $data->prefixname = $request->prefixname;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->lastname = $request->lastname;
        $data->suffixname = $request->suffixname;
        $data->username = $request->username;
        $data->fullname = $request->fullname;

        $data->email = $request->email;
        $data->type = $request->type;
        $data->avatar = $request->avatar;
        if ($request->file('photo')) {
            $image = $request->file('photo');
            @unlink(public_path('storage/user/' . $data->photo));
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // installing image intervention
            // composer require intervention/image

            // config/app.php
            // Intervention\Image\ImageServiceProvider::class,
            // 'Image' => Intervention\Image\Facades\Image::class,

            // php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"


            Image::make($image)->resize(300, 350)->save('storage/user/' . $filename);
            $filePath = 'storage/user/' . $filename;
            $data->photo = $filePath;
        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user-profile')->with($notification);


    }

    public function editUser($id)
    {
        $data1 = Auth::guard('web')->user();

        $data = User::find($id);
        return view("user.edituser", compact('data1', 'data'));
    }


    public function userUpdate(Request $request)
    {
        $id = $request->id;
        $data = User::find($id);
        $data->prefixname = $request->prefixname;
        $data->firstname = $request->firstname;
        $data->middlename = $request->middlename;
        $data->lastname = $request->lastname;
        $data->suffixname = $request->suffixname;
        $data->username = $request->username;
        $data->fullname = $request->fullname;

        $data->email = $request->email;
        $data->type = $request->type;
        $data->avatar = $request->avatar;
        if ($request->file('photo')) {
            $image = $request->file('photo');
            @unlink(public_path('storage/user/' . $data->photo));
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // installing image intervention
            // composer require intervention/image

            // config/app.php
            // Intervention\Image\ImageServiceProvider::class,
            // 'Image' => Intervention\Image\Facades\Image::class,

            // php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"


            Image::make($image)->resize(300, 350)->save('storage/user/' . $filename);
            $filePath = 'storage/user/' . $filename;
            $data->photo = $filePath;
        }

        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user-index')->with($notification);


    }




    public function addUser()
    {
        $data1 = Auth::guard('web')->user();

        return view('user.adduser', compact('data1'));
    }

    public function addUserPost(Request $request)
    {
        $request->validate([
            'prefixname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffixname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'photo' => 'required',
            'type' => 'required',
            'password' => 'required|min:6',
        ]);
        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 350)->save('storage/user/' . $name_gen);
        $save_url = 'storage/user/' . $name_gen;
        // dd($request->all());
        $user = new User();
        $user->prefixname = $request->prefixname;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->suffixname = $request->suffixname;
        $user->username = $request->username;
        $user->fullname = $request->fullname;

        $user->email = $request->email;
        $user->photo = $save_url;
        $user->type = $request->type;
        $user->avatar = $request->avatar;

        $user->password = Hash::make($request->password);
        $user->save();

        $notification = array(
            'message' => 'User Added Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('user-index')->with($notification);

    }

    public function allUser()
    {
        $data1 = Auth::guard('web')->user();


        $userdatas = User::get();
        return view('user.alluser', compact('data1', 'userdatas'));
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user-deleted-list')->with($notification);
    }




    public function deletedUser()
    {
        $data1 = Auth::guard('web')->user();
        $userdatas = User::onlyTrashed()->get();
        return view('user.deleteduser', compact('data1', 'userdatas'));
    }


    public function restoreUser($id)
    {
        User::onlyTrashed()->find($id)->restore();
        $notification = array(
            'message' => 'User Restore Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user-index')->with($notification);
    }

    public function forceDeleteUser($id)
    {
        User::onlyTrashed()->find($id)->forceDelete();
        $notification = array(
            'message' => 'User Permanently Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }




}
