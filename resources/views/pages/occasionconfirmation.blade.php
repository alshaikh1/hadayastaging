@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d698cea16b81b0012138a6e&product=inline-share-buttons" async="async"></script>

<div class="section wb main">
	<div class="section-title text-center">
		<h3>شكرا لك لثقتك بنا</h3>
		<p class="lead">
		تم اضافة مناسبتك بنجاح <br /></p>
		<p>
		رابط تفاصيل مناسبتك هو:
		<b>
		<a href="https://hadaya.herokuapp.com/eventdetails/{{ $thisoccasionid }}">		
		https://hadaya.herokuapp.com/eventdetails/{{ $thisoccasionid }}</a></b>
		</p>
		<div class="padding15">
			<h4 class="subtitle">بامكانك مشاركة الرابط من خلال:</h4>
			<div class="sharethis-inline-share-buttons" data-url="https://hadaya.herokuapp.com/eventdetails/{{ $thisoccasionid }}" data-title="نسعد بهداياكم ومشاركتكم فرحتنا"></div>
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