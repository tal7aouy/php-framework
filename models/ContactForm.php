<?php


namespace app\models;


use talhaouy\phpmvc\Model;

class ContactForm extends Model
{
    public  string $subject = '';
    public  string $email = '';
    public  string $body = '';

    public function rules(): array
    {
        return [
            'subject'=>[self::RULE_REQUIRED],
            'email'=>[self::RULE_REQUIRED],
            'body'=>[self::RULE_REQUIRED]
        ];
    }
    public function labels(): array
    {
        return [
            'subject'=> 'Enter Your subject',
            'email'=> 'Enter Your email',
            'body'=> 'body',
        ];
    }

    public function send()
    {
        return true;
    }
}