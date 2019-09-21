@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>عن Ribbonate</h3>
		<p class="lead">لانك ترغب بالحصول على الخدمة المثالية</p>
	</div>
	<div id="about" class="section wb nopadtop">
        <div class="container">
            <div class="row">
				<div class="col-md-6 m40">
				@foreach ($cart as $onecartitem)
					$onecartitem->id
					<br />
				@endforeach
                </div><!-- end col -->
				
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ secure_asset('images/about.png') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	<hr class="mb-4">
</div>
@endsection