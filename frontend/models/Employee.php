<?php


namespace frontend\models;

use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_REGISTER = 'register';
    const SCENARIO_UPDATE = 'update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;

    public function scenarios()
    {
        return [
            self::SCENARIO_REGISTER => ['firstName', 'lastName', 'middleName', 'email'],
            self::SCENARIO_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_UPDATE],
        ];
    }
}