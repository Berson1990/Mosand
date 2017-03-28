@extends('website.welcome')
@section('content')
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
                        <img src="{{asset('websiteassets/img/astore.png')}}" width="150">
                    </div>
                    <div class="col-md-6 c">
                        <img src="{{asset('websiteassets/img/gplay.png')}}" width="150">
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
                <img src="{{asset('websiteassets/img/ads.jpg')}}">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="col-md-12 s-item" dir="rtl">
                        <div class="img" style="
  background: url(websiteassets/img/hero.jpg) no-repeat center center;
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
  background: url(websiteassets/img/hero.jpg) no-repeat center center;
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
  background: url(websiteassets/img/hero.jpg) no-repeat center center;
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
  background: url(websiteassets/img/hero.jpg) no-repeat center center;
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
                            <img src="{{asset('websiteassets/img/idea3.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/idea2.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/idea1.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/logo-idea.png')}}">
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
                    <img src="{{asset('websiteassets/img/astore.png')}}" width="150">
                </div>
                <div class="col-md-6 c">
                    <img src="{{asset('websiteassets/img/gplay.png')}}" width="150">
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
                            <img src="{{asset('websiteassets/img/service4.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/service3.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/service2.png')}}">
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <img src="{{asset('websiteassets/img/service1.png')}}">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection