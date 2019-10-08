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
								<a href="{{ secure_url('/search') }}" class="btn btn-light btn-radius btn-brd ban-btn mb-5 srchbtn">ابحث عن مناسبات</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<a href="{{ secure_url('/addstep1') }}" class="btn btn-light btn-radius btn-brd ban-btn addbtn">ادخل مناسبتك</a>
							</div>
						</div>
                    </div>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
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
        <a href="{{ secure_url('/addstep1') }}"><h3>
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
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                    <p class="stat_count">475</p>
                    <h3>عريس وعروس</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="fa fa-child" aria-hidden="true"></i>
					</span>
                    <p class="stat_count">382</p>
                    <h3>مولود</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</span>
                    <p class="stat_count">3781</p>
                    <h3>هدية تم استلامها</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
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
	
	<hr>
@endsection
