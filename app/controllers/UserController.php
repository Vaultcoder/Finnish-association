<?php

class UserController extends BaseController {

    public function get_login()
    {
        return View::make('login');
    }
 
    public function post_login()
    {
        $username = Input::get('username');
        $password = Input::get('password');
 
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::intended('admin_page');
        }
 
        return Redirect::back()
            ->withInput()
            ->withErrors('That username/password combo does not exist.');
    }
 
    public function getLogin()
    {
        return Redirect::to('/');
    }
 
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('login');
    }


}
