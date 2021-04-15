<?php

namespace app\controllers;

use talhaouy\phpmvc\Application;
use talhaouy\phpmvc\Controller;
use talhaouy\phpmvc\Request;
use talhaouy\phpmvc\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'description'=> 'Welcome to our framework',
        ];
        return $this->view('home',$params);
    }
    public function contact(Request $request,Response $response)
    {
        $contact = new ContactForm();
       if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlashMessage('success','Thank you for contacting Us.');
                $response->redirect('/');
            }
       }
       return $this->view('contact',[
           'model'=>$contact
       ]);
    }

}