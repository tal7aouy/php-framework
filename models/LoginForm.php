<?php


namespace app\models;


use talhaouy\phpmvc\Application;
use talhaouy\phpmvc\Model;

class LoginForm extends Model
{

    public string $email = '';
    public string $password = '';
    public function rules(): array
    {
        return [
            'email'=> [self::RULE_REQUIRED,self::RULE_EMAIL],
            'password'=> [self::RULE_REQUIRED]
        ];
    }
    public function labels(): array
    {
        return [
            'email'=> 'Email',
            'password'=> 'Password'
        ];
    }

    public function login()
    {
      $user =  User::findFirst(['email'=>$this->email]);
       if(!$user){
           $this->addError('email','User does not exist with this Email .');
           return false;
       }
       if(!password_verify($this->password,$user->password)){
           $this->addError('password','Password  is incorrect .');
           return false;
       }

       return Application::$app->login($user);
    }
}