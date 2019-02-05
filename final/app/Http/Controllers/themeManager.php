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


class themeManager
{
    public function index()
    {

        $themes = Theme::all();
        return view('manage.themeList', ['themes' => $themes]);

    }

    public function create()
    {
        return view('manage.addTheme');

    }

    public function add()
    {
        $name = Input::get('themename');
        $url = Input::get('themeurl');
        $imgurl = Input::get('imgurl');
        $editTheme = new Theme;

        $editTheme->name = $name;

        $editTheme->url = $url;

        $editTheme->imgurl = $imgurl;


        $editTheme->save();

        return redirect('/home');
    }

    public function update()
    {
        $selectedtheme = DB::table('themes')->get()->where("id", Input::get('id'));

        return view('manage.themeEdit', ['selectedtheme' => $selectedtheme]);

    }

    public function delete()
    {
        $selectedtheme = Theme::find((Input::get('id')));
        $selectedtheme->delete();
        return redirect('/home');

//        return view('manage.themeEdit');
    }

    public function save()
    {
        $name = Input::get('themename');
        $url = Input::get('themeurl');
        $id = Input::get('id');

        $editTheme = Theme::find($id);

        $editTheme->name = $name;

        $editTheme->url = $url;

        $editTheme->save();

        return redirect('/home');
    }
}