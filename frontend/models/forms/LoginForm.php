<?php


namespace frontend\models\forms;

use frontend\models\User;
use Yii;

class LoginForm extends \yii\base\Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        $user = User::findByUsername($this->username);

        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError($attribute, 'Пароль указан неверно');
        }
    }

    public function login()
    {
        if ($this->validate()) {
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }

        return false;
    }


}