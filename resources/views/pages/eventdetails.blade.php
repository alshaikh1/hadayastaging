@extends('layouts.app')

@section('content')

<div class="section wb main">
	<div class="section-title text-center">
		<h3> 		
		{{ $occasion->type }} {{ $occasion->firstname }} {{ $occasion->lastname }}
		
		</h3>
	</div>
	
	<div id="services" class="section-title wb nopadtop">
        <div class="container">
            <div class="row">
				<div class="col-md-8 m40">
                    <div class="message-box">
                        <h4>
						تاريخ المناسبة: 
						{{ $occasion->occdate }}</h4>
                        <h4>الوصف:</h4>
                        <p>{{ $occasion->description }}</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-md-4">
					<div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
						<img src="{{ secure_asset($occasion->occimage) }}" alt="" class="img-responsive img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
			</div><!-- end row -->
			
			<div class="row text-center" style="margin-top: 40px;">
			<div class="section-title text-center">
                <h3>هل ترغب بإهداء {{ $occasion->firstname }} في مناسبته؟</h3>
				<h4>بإمكانك اختيار احدى الهدايا التالية  التي يحبها</div>
			
			
			<h6> عرض {{ count($OccasionProducts)}} من {{ count($OccasionProducts) }}</h6>
			
			@foreach($OccasionProducts as $OccasionProduct)

				<div class="col-md-4 col-sm-4 col-xs-12 productslist">
					<div class="service-widget">
						<div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
							<img src="../{{ $OccasionProduct->productimage }}" alt="" class="img-responsive img-rounded">
						</div>
						<h3>{{ $OccasionProduct->productname }}</h3>
						<h4>{{ $OccasionProduct->productprice }} دينار </h4>
						<h4>مقدم من {{ $OccasionProduct->merchantname }}<h4>
						<p>{{ str_limit($OccasionProduct->productdescription, $limit = 65, $end = '...') }}</p>
						<div class="buybtn">
							<a href="{{ secure_url('/purchase/'.$occasion->id.'/'.$OccasionProduct->id) }}" class="btn btn-light btn-radius btn-brd grd1 effect-1">قدم كهدية لـ{{ $occasion->firstname }}</a>
						</div>
					</div><!-- end service -->
				</div><!-- end col -->
			@endforeach
            </div>
			
			
			
        </div><!-- end container -->
    </div>
		
		</div>
	<hr class="mb-4">
	</div>
	
</div>
@endsection
