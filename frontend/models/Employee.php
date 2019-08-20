<?php


namespace frontend\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;

class Employee extends Model
{
    const SCENARIO_REGISTER = 'register';
    const SCENARIO_UPDATE = 'update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;

    //new
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {
        return [
            self::SCENARIO_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'birthDate', 'hiringDate', 'city', 'position', 'idCode'],
            self::SCENARIO_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'birthDate'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_UPDATE],

            //new
            [['birthDate', 'hiringDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length' => 10],
            [['hiringDate', 'position', 'idCode'], 'required', 'on' => self::SCENARIO_REGISTER],
        ];
    }

    public function getCitiesList()
    {
        $sql = "SELECT * FROM city";
        $result = \Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }
}