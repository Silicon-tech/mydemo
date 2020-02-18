<?php


namespace app\models;


use yii\db\ActiveRecord;

class Design extends ActiveRecord
{
        public static function tableName()
        {
            return 'design';
        }
        public function getDesign(){
            return $this->hasMany(Design::className(),['category_id'=>'id']);
        }
}