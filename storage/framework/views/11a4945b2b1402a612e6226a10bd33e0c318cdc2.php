<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <meta http-equiv="refresh" content="1"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mosaned</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('websiteassets/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('websiteassets/css/iconfont.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('websiteassets/css/scroll.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('websiteassets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('websiteassets/css/sidemenu.css')); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src ="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" ></script>
    <![endif]-->
</head>
<body>
<!--########-->
<!-- Header -->
<!-- ###### -->
<header>
    <nav>
        <ul class="logo-nav">
            <div class="drop-downs">
                <ul class="countries">
                    <li>
                        <i class="glyphicon glyphicon-chevron-down"></i> <img
                                src="<?php echo e(asset('websiteassets/img/flags/qatar.png')); ?>">
                        <ul>
                            <li>
                                <a><img src="<?php echo e(asset('websiteassets/img/flags/ksa.png')); ?>"></a>
                            </li>
                            <li>
                                <a><img src="<?php echo e(asset('websiteassets/img/flags/egypt.png')); ?>"></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="lang">
                    <li>
                        <a><i class="glyphicon glyphicon-chevron-down"></i> العربية</a>
                        <ul>
                            <li>
                                <a>English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="brand" onclick="window.open('index.html','_self')">
                <div class="vr">
                    <img src="<?php echo e(asset('websiteassets/img/logo-brand.png')); ?>">
                </div>
            </div>
        </ul>
        <ul class="main-nav">
            <li class="active">
                <a href="index.html">الرئيسية</a>
            </li>
            <li>
                <a href="index.html">البحث</a>
            </li>
            <li>
                <a href="index.html">عقارات للبيع</a>
            </li>
            <li>
                <a href="index.html">عقارات للإيجار</a>
            </li>
            <li>
                <a href="index.html">الفنادق</a>
            </li>
            <li>
                <a href="index.html">اخبار تهمك</a>
            </li>
        </ul>
        <ul class="add-ad">
            <li>
                <a href="index.html">
                    <span class="h800">أضف إعلان</span>
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </li>
        </ul>
        <ul class="user-action">
            <li>
                <img id="sm-toggle" src="<?php echo e(asset('websiteassets/img/default-user.png')); ?>">
            </li>
        </ul>
        <ul class="menu-toggle">
            <li id="menu-toggle">
                <i class="glyphicon glyphicon-menu-hamburger"></i>
            </li>
        </ul>
    </nav>
</header>
<!--######################-->
<!-- Section - Mini Menu  -->
<!-- #################### -->
<div class="mini-menu">
    <div class="mm-header">
        <i id="menu-toggle-off" class="glyphicon glyphicon-remove"></i>
        <h3>القائمة</h3>
    </div>
    <ul class="mini-main-nav">
        <li class="active">
            <a href="index.html">الرئيسية</a>
        </li>
        <li>
            <a href="index.html">البحث</a>
        </li>
        <li>
            <a href="index.html">عقارات للبيع</a>
        </li>
        <li>
            <a href="index.html">عقارات للإيجار</a>
        </li>
        <li>
            <a href="index.html">الفنادق</a>
        </li>
        <li>
            <a href="index.html">اخبار تهمك</a>
        </li>
    </ul>
</div>
<!--######################-->
<!-- Section - Side Menu  -->
<!-- #################### -->
<div class="side-menu">
    <div class="sm-header">
        <ul class="user-action-sm">
            <li>
                <img id="sm-toggle-off" src="<?php echo e(asset('websiteassets/img/default-user.png')); ?>">
            </li>
        </ul>
        <div class="myacc">
            <h3>حسابي</h3>
            <a>تعديل <i class="glyphicon glyphicon-cog"></i></a>
        </div>
        <div class="msgs">
            <i class="glyphicon glyphicon-envelope"></i>
        </div>
        <div class="noti">
            <i class="glyphicon glyphicon-bell"></i>
        </div>
    </div>
    <div class="sm-body">
        <div class="acc-toggle">
            <ul>
                <li class="active">
                    <img src="<?php echo e(asset('websiteassets/img/myads.png')); ?>" height="26"><br>
                    <label>اعلاناتي</label>
                </li>
                <li>
                    <img src="<?php echo e(asset('websiteassets/img/fav.png')); ?>" height="26"><br>
                    <label>المفضلة</label>
                </li>
            </ul>
        </div>
        <div class="acc-content mCustomScrollbar" data-mcs-theme="minimal-dark">
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(websiteassets/img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-item">
                <div class="add-img">
                    <div class="aimg" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

                    </div>
                    3,000,000 QAR
                </div>
                <div class="add-text">
                    <h4>عنوان الإعلان طويل جداً للغاية</h4>
                    <a class="btn btn-primary btn-sm">تعديل</a><br>
                    <span>فيلا <i class="glyphicon glyphicon-home"></i>4</span>
                    <span><i class="glyphicon glyphicon-home"></i>5</span>
                </div>
            </div>
            <div class="acc-more">
                مشاهدة المزيد
            </div>
        </div>
        <div class="new-account">
            <div class="new-normal">
                <div class="sig">
                    تسجيل دخول
                </div>
                <div class="reg">
                    تسجيل جديد
                </div>
            </div>
            <div class="sig-fb">
                تسجيل دخول بواسطة فيسبوك
                <i class="fa fa-facebook"></i>
            </div>
        </div>
    </div>
</div>
<!--#################-->
<!-- Section - Hero  -->
<!-- ############### -->
<section class="hero">
    <div class="flued-container">
        <div class="row">
            <div class="col-md-6 pull-right npl">
                <p class="h1">الأن و لأول مرة تستطيع مشاهدة عقارك من منزلك بإستخدام تقنية 360 و نظارات <span>VR</span>
                </p>
                <div class="col-md-12">
                    <div class="form-group">
                        <a class="btn btn-danger sn t-r">ابدأ الأن</a>
                    </div>
                </div>
                <div class="col-md-12 getapp">
                    <div class="col-md-6 c">
                        <img src="<?php echo e(asset('websiteassets/img/astore.png')); ?>" width="150">
                    </div>
                    <div class="col-md-6 c">
                        <img src="<?php echo e(asset('websiteassets/img/gplay.png')); ?>" width="150">
                    </div>
                </div>
            </div>
            <div class="col-md-4 pull-right npr">
                <p class="h1 c">ما اللذي تبحث عنه؟</p>
                <form role="form" class="form sgb">
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <a class="btn btn-block btn-default" data-toggle="button" aria-pressed="false"
                               autocomplete="off">عقارات للإيجار</a>
                        </div>
                    </div>
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <a class="btn btn-block btn-primary" data-toggle="button" aria-pressed="false"
                               autocomplete="off">عقارات للبيع</a>
                        </div>
                    </div>
                    <div class="col-md-12" dir="ltr">
                        <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-danger t-r" type="button">اضافة</button>
                  </span>
                            <input dir="rtl" type="search" class="form-control" placeholder="المدينة او المنطقة">
                            <span class="input-group-addon srch"><i class="glyphicon glyphicon-search"></i></span>
                        </div><!-- /input-group -->
                        <div class="selects" dir="rtl">
                            <a>الدوحة <i class="glyphicon glyphicon-remove"></i></a>
                            <a>الرياض <i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="form-control">
                                <option value="0">نوع العقار</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <input type="number" class="form-control" min="0" placeholder="أقل سعر">
                        </div>
                    </div>
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <input type="number" class="form-control" min="0" placeholder="أعلى سعر">
                        </div>
                    </div>
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <input type="number" class="form-control" min="0" placeholder="عدد الغرف">
                        </div>
                    </div>
                    <div class="col-md-6 sbg">
                        <div class="form-group">
                            <input type="number" class="form-control" min="0" placeholder="عدد الحمامات">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <a class="btn btn-danger btn-block t-r">
                                بحث
                                <i class="glyphicon glyphicon-search pull-right"></i>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--####################-->
<!-- Section - Special  -->
<!-- ################## -->
<section class="special">
    <div class="flued-container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="r-title">عقارات مميزة</h2>
            </div>
            <div class="col-md-4 ads">
                <img src="<?php echo e(asset('websiteassets/img/ads.jpg')); ?>">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="col-md-12 s-item" dir="rtl">
                        <div class="img" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
                            <i class="glyphicon glyphicon-heart"></i>
                            <label>عنوان الإعلان</label>
                        </div>
                        <div class="det">
                    <span class="type">
                      فيلا
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 4
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 5
                    </span>
                            <span class="price">
                      3,600,000 QAR
                    </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 s-item" dir="rtl">
                        <div class="img" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
                            <i class="glyphicon glyphicon-heart"></i>
                            <label>عنوان الإعلان</label>
                        </div>
                        <div class="det">
                    <span class="type">
                      فيلا
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 4
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 5
                    </span>
                            <span class="price">
                      3,600,000 QAR
                    </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 s-item" dir="rtl">
                        <div class="img" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
                            <i class="glyphicon glyphicon-heart"></i>
                            <label>عنوان الإعلان</label>
                        </div>
                        <div class="det">
                    <span class="type">
                      فيلا
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 4
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 5
                    </span>
                            <span class="price">
                      3,600,000 QAR
                    </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 s-item" dir="rtl">
                        <div class="img" style="
  background: url(img/hero.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
                            <i class="glyphicon glyphicon-heart"></i>
                            <label>عنوان الإعلان</label>
                        </div>
                        <div class="det">
                    <span class="type">
                      فيلا
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 4
                    </span>
                            <span class="prop">
                      <i class="glyphicon glyphicon-home"></i> 5
                    </span>
                            <span class="price">
                      3,600,000 QAR
                    </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <a class="btn btn-primary btn-block">مشاهدة المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--#################-->
<!-- Section - Idea  -->
<!-- ############### -->
<section class="idea">
    <div class="flued-container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 pad">
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/idea3.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/idea2.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/idea1.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/logo-idea.png')); ?>">
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-12 video">
                <div class="col-md-12 pad">
                    <iframe width="100%" class="ytv"
                            src="https://www.youtube.com/embed/gOR0puhJg3k?modestbranding=1&amp;autohide=1&amp;showinfo=0&amp;controls=0"
                            frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--####################-->
<!-- Section - Platforms  -->
<!-- ################## -->
<section class="platforms">
    <div class="flued-container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="w-title">احصل على تطبيق مساند الان</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <h1 class="h1">لأول مرة من منزلك تستطيع معاينة عدد لا محدود من العقارات بتقنية VR و نظارات الولاقع
                    الإفتراضي كأمك موجود داخل العقار</h1>
            </div>
            <div class="col-md-8 col-md-offset-2 getapp">
                <div class="col-md-6 c">
                    <img src="<?php echo e(asset('websiteassets/img/astore.png')); ?>" width="150">
                </div>
                <div class="col-md-6 c">
                    <img src="<?php echo e(asset('websiteassets/img/gplay.png')); ?>" width="150">
                </div>
            </div>
        </div>
    </div>
</section>
<!--####################-->
<!-- Section - Services  -->
<!-- ################## -->
<section class="services">
    <div class="flued-container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="g-title">خدماتنا</h2>
            </div>
        </div>
    </div>
    <div class="flued-container xg">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 pad">
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/service4.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/service3.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/service2.png')); ?>">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="<?php echo e(asset('websiteassets/img/service1.png')); ?>">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="flued-container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="vr"></div>
                    <div class="col-md-12">
                        <h1 class="h1c">تابعونا</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="social">
                            <ul class="fsocial">
                                <li>
                                    <img src="<?php echo e(asset('websiteassets/img/social/fb.png')); ?>" width="50">
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('websiteassets/img/social/tw.png')); ?>" width="50">
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('websiteassets/img/social/in.png')); ?>" width="50">
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('websiteassets/img/social/yt.png')); ?>" width="50">
                                </li>
                                <li>
                                    <img src="<?php echo e(asset('websiteassets/img/social/sn.png')); ?>" width="50">
                                </li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 hei">
                        <div class="wbhr"></div>
                    </div>
                    <div class="col-md-12">
                        <h1 class="h1c">أحصل على التطبيق</h1>
                    </div>
                    <div class="col-md-12 getapp">
                        <div class="col-md-6 c">
                            <img src="<?php echo e(asset('websiteassets/img/astore.png')); ?>" width="150">
                        </div>
                        <div class="col-md-6 c">
                            <img src="<?php echo e(asset('websiteassets/img/gplay.png')); ?>" width="150">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <h1 class="h1c">
                            <img onclick="window.open('index.html','_self')"
                                 src="<?php echo e(asset('websiteassets/img/logo-brand.png')); ?>" width="128"
                                 style="cursor: pointer;">
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="fnav">
                            <li>
                                <a>عن مساند</a>
                            </li>
                            <li>
                                <a>سياسة الخصوصية</a>
                            </li>
                            <li>
                                <a>للإعلان معنا</a>
                            </li>
                            <li>
                                <a>للإتصال بنا</a>
                            </li>
                            <li>
                                <a>تسجيل دخول</a>
                            </li>
                            <li>
                                <a>تسجيل جديد</a>
                            </li>
                            <li>
                                <a>اخبار تهمك</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
                <center class="lgray">
                    mosaned 2017 &copy;
                </center>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<script src="<?php echo e(asset('websiteassets/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('websiteassets/jqueryui/jquery-ui.min.js')); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(asset('websiteassets/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('websiteassets/js/scroll.js')); ?>"></script>
<script src="<?php echo e(asset('websiteassets/js/sidemenu.js')); ?>"></script>
<script src="<?php echo e(asset('websiteassets/js/main.js')); ?>"></script>
</body>
</html>