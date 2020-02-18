<?php


namespace app\controllers;

use app\models\Category;
use app\models\Product22;
use Yii;


class Product22Controller extends AppController
{
    public function actionView($id)
    {
        //$id=Yii::$app->request->get('id');
        $product22 = Product22::findOne($id);
        if (empty($product22))
            throw new \yii\web\HttpException(404, 'упсс,такого товара нет');
        //$product=Product::find()->with('category')->where(['id'=>$id])->limit(1)->one();
        $hits1 = Product22::find()->where(['hit1' => '1'])->limit(1)->all();
        $this->setMeta('Futbolki-ice | ' . $product22->name, $product22->keywords, $product22->description);
        return $this->render('view', compact('product22', 'hits1'));
    }
}