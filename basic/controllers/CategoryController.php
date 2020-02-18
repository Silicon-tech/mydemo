<?php


namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Product22;
use Yii;
use yii\data\Pagination;


class CategoryController extends AppController
{   public function actionIndex(){
    $hits=Product::find()->where(['hit'=>'1'])->limit(12)->all();
    $hits1=Product22::find()->where(['hit1'=>'1'])->limit(12)->all();
    $this->setMeta('Futbolki-ice');
    return $this->render('index',compact('hits','hits1'));
}
    public function actionView($id) {
    //$id=Yii::$app->request->get('id');
        $category=Category::findOne($id);
        if (empty($category))
        throw new \yii\web\HttpException(404,'упсс,такой категории нет');
    //$products = Product::find()->where(['category_id'=>$id])->all();
        $query = Product::find()->where(['category_id'=>$id]);
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>12
            ,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $products=$query->offset($pages->offset)->limit($pages->limit)->all();

    $this->setMeta('Futbolki-ice | ' . $category->name, $category->keywords,$category->description);
    return $this->render('view',compact('products','pages','category'));
    }
        public function actionSearch(){
    $q=trim(Yii::$app->request->get('q'));
            $this->setMeta('Futbolki-ice | Поиск: ' . $q);
    if (!$q)
        return $this->render('search');
            $query = Product::find()->where(['like','name',$q]);
            $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>12
                ,'forcePageParam'=>false,'pageSizeParam'=>false]);
            $products=$query->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('search',compact('products','pages','q'));
        }
}