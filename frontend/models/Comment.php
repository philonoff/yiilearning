<?php


namespace frontend\models;

use Yii;
use yii\base\Model;

class Comment extends Model
{
    public $name;
    public $email;
    public $text;

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['email'], 'safe'],
        ];
    }

    public function getCommentsList()
    {
        $sql = "SELECT * FROM comment";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function save()
    {
        return Yii::$app->db->createCommand()->insert('comment', [
            'name' => $this->name,
            'email' => $this->email,
            'text' => $this->text,
        ])->execute();
    }
}