<?php
/**
 * Created by PhpStorm.
 * User: NSCCStudent
 * Date: 11/20/18
 * Time: 6:53 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class userManager
{
    public function index()
    {

            $users = User::all();

            return view('manage.userList', ['users' => $users]);

    }



    public function update()
    {
        $selecteduser = DB::table('users')->get()->where("id", Input::get('id'));

        return view('manage.userEdit', ['selecteduser' => $selecteduser]);

    }

    public function delete()
    {
        $selecteduser = User::find(Input::get('id'));
        $selecteduser->delete();
        return redirect('/home');

//        return view('manage.themeEdit');
    }
    public function save()
    {
        $name = Input::get('username');
        $email = Input::get('useremail');
        $role = Input::get('userrole');
        $password =  Hash::make(Input::get('userpassword'));
        $id = Input::get('id');

        $editUser = User::find($id);

        $editUser->name = $name;

        $editUser->email = $email;

        $editUser->role = $role;

        $editUser->password = $password;



        $editUser->save();

        return redirect('/home');
    }

}