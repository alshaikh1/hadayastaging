@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d698cea16b81b0012138a6e&product=inline-share-buttons" async="async"></script>

<div class="container">
		<div class="f1-steps">
			<div class="f1-progress">
				<div class="f1-progress-line" data-now-value="100" data-number-of-steps="4" style="width: 100%;"></div>
			</div>
			<div class="f1-step activated">
				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
				<p>تفاصيل المناسبة</p>
			</div>
			<div class="f1-step activated">
				<div class="f1-step-icon"><i class="fa fa-gift"></i></div>
				<p>اختيار الهدايا</p>
			</div>
			<div class="f1-step activated">
				<div class="f1-step-icon"><i class="fa fa-eye"></i></div>
				<p>معاينة</p>
			</div>
			<div class="f1-step active">
				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
				<p>تأكيد</p>
			</div>
		</div>
	</div>

<div class="section wb main">
	<div class="section-title text-center">
		<h3>شكرا لك لثقتك بنا</h3>
		<p class="lead">
		تم اضافة مناسبتك بنجاح <br /></p>
		<p>
		رابط تفاصيل مناسبتك هو:
		<b>
		<a href="https://www.ribbonate.com/eventdetails/{{ $thisoccasionid }}">		
		https://www.ribbonate.com/eventdetails/{{ $thisoccasionid }}</a></b>
		</p>
		<div class="padding15">
			<h4 class="subtitle">بامكانك مشاركة الرابط من خلال:</h4>
			<div class="sharethis-inline-share-buttons" data-url="https://www.ribbonate.com/eventdetails/{{ $thisoccasionid }}" data-title="نسعد بهداياكم ومشاركتكم فرحتنا"></div>
		</div>
		<p class="lead">
		اذا كانت لديك أسئلة أو استفسارات،
		لا تترد بالاتصال بنا عبر الهاتف او البريد الالكتروني
		<a href="mailto:support@ribbonate.com">support@ribbonate.com</a>		
		</p>
	</div>	
	<hr class="mb-4">
</div>
@endsection