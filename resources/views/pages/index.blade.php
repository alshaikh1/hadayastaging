@extends('layouts.app')

@section('content')

<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>
						اختيارك الاول لجميع المناسبات</h2>
                        <p class="lead">
						انشئ قائمة هدايا مجانية وشاركها مع أفراد العائلة و أصدقائك و زملاء العمل</p>
						<div class="row">
							<div class="col-lg-6 col-sm-6 col-xs-12 my-lg-10">
								<a href="/search" class="btn btn-light btn-radius btn-brd ban-btn mb-5">ابحث عن مناسبات</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<a href="/add" class="btn btn-light btn-radius btn-brd ban-btn">ادخل مناسبتك</a>
							</div>
						</div>
                    </div>
                </div>

                <div class="app_iphone_02 wow slideInUp hidden-xs hidden-sm" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="images/rocket.png" alt="" class="img-responsive">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
<div id="about" class="section wb nopadtop">
        <div class="container">
            
			
			<div class="section-title text-center">
                <small>نعمل من أجل حصولك على الهدايا التي ترغب بها</small>
                <h3>اقترب موعد الزفاف او بانتظار مولود؟</h3>
                <p class="lead">				
				جميع العلامات التجارية والهدايا المفضلة لديك في مكان واحد</p>
            </div><!-- end title -->
			
			<div class="seo-services row clearfix">
                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="who">
						<i class="fa fa-cutlery fa-5x fa-border greencolor" aria-hidden="true"></i>
						<h4>معدات المطبخ</h4>
						<p class="lead">اطقم الطهي، اواني، فضيات، اطقم الطعام والشراب</p>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="who">
						<i class="fa fa-home fa-5x fa-border greencolor" aria-hidden="true"></i>
						<h4>أجهزة منزلية</h4>
						<p class="lead">مايكرويف، ثلاجات، برادات مياه، مكواة، غسالات</p>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="who">
						<i class="fa fa-child fa-5x fa-border greencolor" aria-hidden="true"></i>
						<h4>مستلزمات المواليد</h4>
						<p class="lead">أسرة أطفال، بطانيات، ملابس مواليد، بياضات</p>
					</div>
                </div><!-- end col -->  

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="who">
						<i class="fa fa-credit-card fa-5x fa-border greencolor" aria-hidden="true"></i>
						<h4>كوبون شراء</h4>
						<p class="lead">كوبون شراء بالمبلغ الذي تريده من كارفور</p>
					</div>
                </div><!-- end col -->  
            </div><!-- end how-its-work -->
        </div><!-- end container -->
    </div><!-- end section -->	
	
	<section class="section nopad cac text-center">
        <a href="{{ secure_url('/add') }}"><h3>
		 لديك مناسبة قريبة وتبحث عن هدية مميزة؟ أنشئ قائمة هدايا مجانية اليوم وشاركها مع اصدقاؤك</h3></a>
    </section>
	
	
	<div id="case" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <small>هل ترغب ان تصبح مثلهم؟</small>
                <h3>ملتزمون بجعل عملاءنا سعداء </h3>
                <p class="lead">كن واحداً من عملائنا وشارك اصدقاؤك فرحتهم وسنكون سعيدين بخدمتك.</p>
            </div><!-- end title -->

            <div class="owl-screenshots owl-carousel owl-theme text-center">
                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">                            
                            <img src="images/wedding01.jpg" alt="" class="img-responsive img-rounded">
                        </div>

                        <h3>طارق وياسمين</h3>
                        <small>ايلول 2019</small>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">                            
                            <img src="images/baby01.jpg" alt="" class="img-responsive img-rounded">
                        </div>

                        <h3>فارس الخطيب</h3>
                        <small>ايلول 2019</small>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <img src="images/wedding02.jpg" alt="" class="img-responsive img-rounded">
                        </div>

                        <h3>خالد وسماح</h3>
                        <small>تموز 2019</small>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">                            
                            <img src="images/wedding03.jpg" alt="" class="img-responsive img-rounded">
                        </div>

                        <h3>فراس وعلا</h3>
                        <small>تموز 2019</small>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <img src="images/baby01.jpg" alt="" class="img-responsive img-rounded">
                        </div>

                        <h3>يزن خليل</h3>
                        <small>تموز 2019</small>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end owl -->
        </div><!-- end container -->
    </div><!-- end section -->
    
	<div class="parallax section lb">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="flaticon-briefcase"></i>
					</span>
                    <p class="stat_count">475</p>
                    <h3>عريس وعروس</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="flaticon-happy"></i>
					</span>
                    <p class="stat_count">382</p>
                    <h3>مولود</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="flaticon-idea"></i>
					</span>
                    <p class="stat_count">3781</p>
                    <h3>هدية تم استلامها</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="flaticon-customer-service"></i>
					</span>
                    <p class="stat_count">238</p>
                    <h3>مناسبة بانتظار مشاركتك</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	    <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>تعرف على آراء عملائنا بنا</h3>
                <p class="lead">نحن دائما سعداء بسماع آراء عملائنا وزوار الموقع</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>دقة في المواعيد</h3>
                                <p class="lead">بعدما طلبت هدية لزميلي تم ايصالها في الوقت المناسب بدقة عالية.</p>
                            </div>
                            <div class="testi-meta">
                                <h4><i class="fa fa-user fa-5 fa-border" aria-hidden="true"></i>
								أحمد خالد</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> خدمة رائعة</h3>
                                <p class="lead">بكل سهولة وراحة اخترت هدية مواليد لاختي وكانت مفاجأة رائعة </p>
                            </div>
                            <div class="testi-meta">
                                <h4><i class="fa fa-user fa-5 fa-border" aria-hidden="true"></i>
								ياسمين رائد</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> فريق عمل متميز</h3>
                                <p class="lead">الهدية التي اخترتها كانت بجودة عالية ومواصفات رائعة . شكرا لكم</p>
                            </div>
                            <div class="testi-meta">
                                <h4><i class="fa fa-user fa-5 fa-border" aria-hidden="true"></i>
								عبير يوسف</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> الدعم الفني ممتاز</h3>
                                <p class="lead">عندما تواصلت مع الدعم الفني للاستفسار عن بعض الامور وجدت الاجوبة وتعامل معي فريق الدعم الفني بكل شفافية ومصداقية</p>
                            </div>
                            <div class="testi-meta">
                                <h4><i class="fa fa-user fa-5 fa-border" aria-hidden="true"></i>
								سليم حداد</h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="support" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>من أين نحضر الهدايا</h3>
            </div><!-- end title -->

            <div class="row">
                <div id="logo-carousel" class="owl-carousel">
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
					<div> <img src="images/logo_03.png" alt=""> </div>
					<div> <img src="images/logo_04.png" alt=""> </div>
					<div> <img src="images/logo_05.png" alt=""> </div>
					<div> <img src="images/logo_06.png" alt=""> </div>
					<div> <img src="images/logo_01.png" alt=""> </div>
					<div> <img src="images/logo_02.png" alt=""> </div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
@endsection
