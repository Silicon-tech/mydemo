<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

?>

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>



                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Futbolki</span>.ice</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl3.jpg" width="340" height="300" class="girl img-responsive" alt="" />

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Futbolki</span>.ice</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl2.jpg" width="300" height="260" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Futbolki</span>.ice</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                            </div>
                            <div class="col-sm-6">
                                <img src="/images/home/girl1.jpg" width="320" height="300" class="girl img-responsive" alt="" />

                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категория</h2>
                    <ul class="catalog category-products">
                        <?= \app\components\MenuWidget::widget(['tpl'=>'menu'])?>
                    </ul>







                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->
                </div>
            </div>




            <div class="col-sm-9 padding-right">
                <?php if( !empty($hits1) ): ?>
                <div class="features_items"><!--features_items-->
                    <?php foreach ($hits1 as $hit1):?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">


                                        <?= Html::img("@web/images/img1/{$hit1->img}",['alt'=>
                                            $hit1->name])?>
                                        <h2><?=$hit1->price?>₸</h2>
                                        <p><a href="<?=\yii\helpers\Url::to(['product22/view', 'id'=>$hit1->id]) ?>"><?=$hit1->name ?></a></p>

                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    <?php endif;?>


                    <?php if( !empty($hits) ): ?>
                    <?php
                    foreach ($hits as $hit):?>




                        <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">


                                    <?= Html::img("@web/images/pictures/{$hit->img}",['alt'=>
                                    $hit->name])?>
                                    <h2><?=$hit->price?>₸</h2>
                                    <p><a href="<?=\yii\helpers\Url::to(['product/view', 'id'=>$hit->id]) ?>"><?=$hit->name ?></a></p>
                                    <a href="<?= \yii\helpers\Url::to(['cart/add','id'=>$hit->id])?>"data-id="<?=$hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                                <?php if($hit->new): ?>
                                    <?= Html::img("@web/images/home/new.png",['alt'=>
                                        'Новинька','class'=>'new'])?>
                                <?php endif;?>

                                <?php if($hit->sale): ?>
                                    <?= Html::img("@web/images/home/sale.png",['alt'=>
                                        'Распродажа','class'=>'new'])?>
                                <?php endif;?>


                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php endforeach;?>

                </div><!--features_items-->
                <?php endif;?>



                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендация</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $count=count($hits); $i=0; foreach ($hits as $hit):  ?>
                                <?php if($i % 3==0): ?>
                                    <div class="item <?php if($i==0) echo 'active'?>">
                                <?php endif;?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?=Html::img("@web/images/pictures/{$hit->img}",['alt'=>$hit->name]) ?>
                                                <h2><?= $hit->price?></h2>
                                                <p><a href="<?= \yii\helpers\Url::to(['product/view','id'=>$hit->id])?>"><?= $hit->name?></a></p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; if($i % 3==0 || $i==$count): ?>
                                    </div>
                                <?php endif;?>
                            <?php endforeach;?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>