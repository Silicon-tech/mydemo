<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ItAppAsset;
use app\models\ContactForm;
use app\models\LoginForm;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


AppAsset::register($this);
ItAppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php $this->beginBody() ?>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +7-776-561-1780</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> +7-771-206-0958</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Futbolki.ice@mail.ru</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?=\yii\helpers\Url::home()?>"><?=Html::img('@web/images/home/logotip.png',['alt'=>'Futbolki.ice'])?></a>

                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <?php if(!Yii::$app->user->isGuest) :?>
                            <li><a href="<?php \yii\helpers\Url::to(['/site/logout']) ?>">
                                    <i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?>(Выход)</a></li>
                            <?php endif; ?>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Check out</a></li>
                            <li><a href="" onclick="return getCart()"><i class="fa fa-shopping-cart"></i>Корзина</a></li>

                            <li><a href="<?= \yii\helpers\Url::to(['/admin'])?>"><i class="fa fa-lock"></i> Логин</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                             <input type="text" placeholder="Search" name="q">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<?=$content; ?>

<!-- Footer -->

<!-- Footer -->
<footer class="pt-5 pb-4" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                <p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
                <ul class="f-address">
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Address:</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="far fa-envelope"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                                <p><a href="#">Support@userthemes.com</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                            <div class="col-10">
                                <h6 class="font-weight-bold mb-0">Address:</h6>
                                <p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
                <ul class="f-address">
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fab fa-twitter"></i></div>
                            <div class="col-10">
                                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                <label>10 Mins Ago</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fab fa-twitter"></i></div>
                            <div class="col-10">
                                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                <label>10 Mins Ago</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-1"><i class="fab fa-twitter"></i></div>
                            <div class="col-10">
                                <p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
                                <label>10 Mins Ago</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
                <ul class="recent-post">
                    <li>
                        <label class="mr-3">28 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                    <li>
                        <label class="mr-3">29 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                    <li>
                        <label class="mr-3">30 <br><span>APR</span></label>
                        <span>Rendomised words which dont look eveable.</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
                <div class="input-group">



                </div>
                <ul class="social-pet mt-4">
                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="https://www.instagram.com/futbolki.ice/" title="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright -->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="text-center text-white">
                    &copy; 2018 Your Company. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>


</section>

<?php
\yii\bootstrap\Modal::begin([
    'header'=>'<h2>Корзина</h2>',
    'id'=>'cart',
    'size'=>'modal-lg',
    'footer'=>'<button type="button" class="btn btn-default"
    data-dismiss="modal">Продолжить покупки</button>
    <a href="' .\yii\helpers\Url::to(['cart/view']). '" class="btn btn-success">Оформить заказ</a>
    <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'

]);
\yii\bootstrap\Modal::end();
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>