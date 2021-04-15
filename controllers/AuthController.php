<?php


namespace app\controllers;


use talhaouy\phpmvc\Application;
use talhaouy\phpmvc\Controller;
use talhaouy\phpmvc\middlewares\AuthMiddleware;
use talhaouy\phpmvc\Request;
use talhaouy\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request,Response $response)
    {
        $loginForm = new LoginForm();
        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->view('login',['model'=>$loginForm]);
    }
    public function register(Request $request)
    {
        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()){
                Application::$app->session->setFlashMessage('success','Thank you for register');
                Application::$app->response->redirect('/');
            }

            return $this->view('register',[
                'model'=>$user
            ]);
        }

        $this->setLayout('auth');
        return $this->view('register',[
            'model'=>$user
        ]);
    }

    public function logout(Request $request,Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->view('profile');
    }
}