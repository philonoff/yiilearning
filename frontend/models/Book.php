<?php


namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{

    public static function tableName()
    {
        return '{{book}}';
    }

    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['date_published'], 'date', 'format' => "php:Y-m-d"],
        ];
    }

    public function getPublisher()
    {
        return $this->hasOne(Publisher::class, ['id' => 'publisher_id']);
    }

    public function getPublisherName()
    {
        $publisher = $this->publisher;
        return $publisher ? $publisher->name : "publisher unknown";
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::class, ['id' => 'author_id'])
            ->viaTable('book_to_author', ['book_id' => 'id']);
    }

    public function getDatePublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "date unknown";
    }

}