<?php


namespace app\models;
use yii\db\ActiveRecord;

class Product22 extends ActiveRecord
{
    public static function tableName()
    {
        return 'product22';
    }
    public function getCategory() {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }
}