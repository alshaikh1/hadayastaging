@extends('layouts.app')

@section('slider')
<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('uploads/parallax_12.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>شارك في سعادة من تحب<br> في الوقت المناسب</h2>
                        <p class="lead">اختر الهدية ونحن نقوم بتوصيلها في الوقت المناسب لك</p>
                        <a href="#support" class="btn btn-light btn-radius btn-brd ban-btn">ابحث عن مناسبات</a>
						<a href="#support" class="btn btn-light btn-radius btn-brd ban-btn">ادخل مناسبتك</a>
                    </div>
                </div>

                <div class="app_iphone_02 wow slideInUp hidden-xs hidden-sm" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="uploads/rocket.png" alt="" class="img-responsive">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


@endsection
