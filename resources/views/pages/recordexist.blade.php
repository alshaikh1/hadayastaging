@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>نأسف!</h3>
		<p class="lead">
		البريد الالكتروني 
		{{ $emailaddress }} قد تم تسجيله مسبقاُ <br /><br />
		<a href="{{ secure_url('/') }}">العودة الى الصفحة الرئيسية</a>
		<br /><br />
		اذا كانت لديك اسئلة او استفسارات، لا تترد بالاتصال بنا عبر الهاتف او البريد الالكتروني
		<a href="mailto:support@ribbonate.com">support@ribbonate.com</a>		
		</p>
	</div>	
	<hr class="mb-4">
</div>
@endsection