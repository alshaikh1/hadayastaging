@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>اضف مناسبة جديدة لتتلقى الهدايا</h3>
		<p class="lead">اختر الهدايا التي ترغب بها</p>
	</div>
	
	
	
	<div class="container">
		@include('inc.messages')

		<div class="row">
			
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a href="#" onclick="showdemo()">هدايا زواج</a></li>
					<li><a href="#" onclick="showdemo2()>هدايا مواليد</a></li>
				</ul>
			<!-- end sidebar -->
			</div>
			
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				hey
			<!-- end col-9 -->
			</div>
		<!-- end row-->	
		</div>
	<!-- end container -->
	</div>
		
	</div>
	<hr class="mb-4">
<!--
<script>
$(document).ready(function () {

$('#formvalid').validate({
	ignore: "",
    rules: {
		occdate: "required",
		firstname: "required",
		lastname: "required",
		mobilenumber: {
			required: true,
			digits: true,
		},
		address: "required",
		description: "required",		
		
        emailaddress: {
            required: true,
            email: true
        },
	},
	messages: {
		//name: "Please specify your name",
		emailaddress: {
			required: "الحقل مطلوب",
			email: "البريد الالكتروني يجب ان يكون بهيئة email@domain.com",			
		},
		firstname: {
			required: "الحقل مطلوب",
		},
		lastname: {
			required: "الحقل مطلوب",
		},
		description: {
			required: "الحقل مطلوب",
		},
		address: {
			required: "الحقل مطلوب",
		},
		occdate: {
			required: "الحقل مطلوب",
		},
		mobilenumber: {
			required: "الحقل يجب ان يحتوي على ارقام فقط"
		},
	},
	//errorElement : 'div',
	//errorLabelContainer: '.errorTxt',
    //highlight: function (element) {
      //  $(element).closest('.form-group').removeClass('success').addClass('error');
    //},
});
});
</script>
-->
<script>
    function showdemo() {
            $('#demo').css("display", "block");
            $('#demo2').css("display", "none");
        } 
	function showdemo2() {
            $('#demo2').css("display", "block");
            $('#demo').css("display", "none");
        }
    }
</script>

@endsection