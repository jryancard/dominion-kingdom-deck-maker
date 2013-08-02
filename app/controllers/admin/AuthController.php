<?php 
 
    class AuthController extends BaseController {
 
        public function getLogin()
        {
            return View::make('admin.login');
        }
 
        public function postLogin()
        {
            $credentials = array(
                'email'    => Input::get('email'),
                'password' => Input::get('password')
            );
 
            try
            {
                $user = Sentry::authenticate($credentials, false);
 
                if ($user)
                {
                    return Redirect::route('admin.pages.index');
                }
            }
            catch(Exception $e)
            {
                return Redirect::route('admin.login')->withErrors(array('login' => $e->getMessage()));
            }
        }
 
        public function getLogout()
        {
            Sentry::logout();
 
            return Redirect::route('admin.login');
        }
 
    }
    
 ?>