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
					<li><a href="#" onclick="showdemo2()">هدايا مواليد</a></li>
				</ul>
			<!-- end sidebar -->
			</div>
			
			<div class="col-sm-9 col-md-10 main">
				<div id="demo">
					@foreach ($Products as $Product)
						@if ($Product->cat === 'wedding')
						<div class="col-md-4 col-sm-4 col-xs-12 productslist">
							<div class="service-widget">
								<div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
									<a href="#" id="morebutton{{ $Product->id }}" data-toggle="modal" data-target="#modal{{ $Product->id }}">
										<img src="{{ secure_asset($Product->productimage) }}" alt="" class="img-responsive img-rounded">
									</a>
								</div>
								<h3>
									<a href="#" id="morebutton{{ $Product->id }}" data-toggle="modal" data-target="#modal{{ $Product->id }}">{{ $Product->productname }}</a>
								</h3>
								<h4>{{ $Product->productprice }}
										@if ($Product->productprice < 10)
										دنانير
										@else
										دينار
										@endif
								</h4>
								<h4>مقدم من {{ $Product->merchantname }}<h4>
								<p>{{ str_limit($Product->productdescription, $limit = 51, $end = '...') }}</p>					
								<a href="Javascript:Void(0);" id="morebutton{{ $Product->id }}" type="button" data-toggle="modal" data-target="#modal{{ $Product->id }}">المزيد</a>
								<div class="checkbox">
									<label class="btn">
										<input type="checkbox" id="addproduct{{ $Product->id }}" value="{{ $Product->id }}" name="addproductcheckbox[]"> اضافة
									</label>
								</div>
							<!-- end service -->
							</div>
							<div class="modal fade bs-example-modal-lg" id="modal{{ $Product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="exampleModalLabel">{{ $Product->productname }}</h4>
										</div>
										<div class="modal-body row">
											<div class="modalimg col-md-6 col-sm-12 col-xs-12">
												<img src="{{ secure_asset($Product->productimage) }}" alt="" class="img-responsive img-rounded">
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12 text-right">
												<h4>السعر: {{ $Product->productprice }} 
												@if ($Product->productprice < 10)
												دنانير
												@else
												دينار
												@endif </h4>
												<h4>المتجر: {{ $Product->merchantname }}</h4>
												<h4>التوصيل: مجاني</h4>
												<p>
												<b>المواصفات:</b> <br />{{ $Product->productdescription }}
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<!-- end col -->
						</div>
					@endif
					@endforeach
					</div>
					<div id="demo2" style="display:none">
						@foreach ($Products as $Product)
						@if ($Product->cat === 'baby')
						<div class="col-md-4 col-sm-4 col-xs-12 productslist">
							<div class="service-widget">
								<div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
									<a href="#" id="morebutton{{ $Product->id }}" data-toggle="modal" data-target="#modal{{ $Product->id }}">
										<img src="{{ secure_asset($Product->productimage) }}" alt="" class="img-responsive img-rounded">
									</a>
								</div>
								<h3>
									<a href="#" id="morebutton{{ $Product->id }}" data-toggle="modal" data-target="#modal{{ $Product->id }}">{{ $Product->productname }}</a>
								</h3>
								<h4>{{ $Product->productprice }} 
									@if ($Product->productprice < 10)
									دنانير
									@else
									دينار
									@endif
								</h4>
								<h4>مقدم من {{ $Product->merchantname }}<h4>
								<p>{{ str_limit($Product->productdescription, $limit = 51, $end = '...') }}</p>
								<a href="Javascript:Void(0);" id="morebutton{{ $Product->id }}" type="button" data-toggle="modal" data-target="#modal{{ $Product->id }}">المزيد</a>
								<div class="checkbox">
									<label class="btn">
										<input type="checkbox" id="addproduct{{ $Product->id }}" value="{{ $Product->id }}" name="addproductcheckbox[]"> اضافة
									</label>
								</div>
							<!-- end service -->
							</div>
							<div class="modal fade bs-example-modal-lg" id="modal{{ $Product->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="exampleModalLabel">{{ $Product->productname }}</h4>
										</div>
										<div class="modal-body row">
											<div class="modalimg col-md-6 col-sm-12 col-xs-12">
												<img src="{{ secure_asset($Product->productimage) }}" alt="" class="img-responsive img-rounded">
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12 text-right">
												<h4>السعر: {{ $Product->productprice }} 
													@if ($Product->productprice < 10)
													دنانير
													@else
													دينار
													@endif </h4>
												<h4>المتجر: {{ $Product->merchantname }}</h4>
												<h4>التوصيل: مجاني</h4>
												<p>
													<b>المواصفات:</b> <br />{{ $Product->productdescription }}
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<!-- end col -->
						</div>
					@endif
					@endforeach
					</div>
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