<?php
/**
 * Created by PhpStorm.
 * User: NSCCStudent
 * Date: 12/6/18
 * Time: 9:31 PM
 */

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;

class themeSelect
{
    public function index()
    {
        $themes = Theme::all();
        return view('manage.themeSelect',['themes' => $themes]);

    }
    public function update()
    {
        $currentTheme = User::find(Input::get('id'));

        $currentTheme->theme = Input::get('url');

        $currentTheme->save();

        return redirect('/home');

    }
}