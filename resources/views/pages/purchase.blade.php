@extends('layouts.app')

@section('content')

<div class="section wb main">
	<div class="section-title text-center">
		<h3>اهداء {{ $occasion->firstname }} {{ $occasion->lastname }}
		</h3>
		<p class="lead">
		
		فاجئ  {{ $occasion->firstname }} بالهدية التي يرغب بها، كل ما عليك هو اكمال النموذج التالي وسنقوم بتوصيل الهدية له</p>
	</div>

<div class="container">	
		<div class="row">
			<div class="col-md-12">				
				<div class="row text-center">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
					<div class="pricing-table pricing-table-highlighted">
						<h4>الرجاء اكمال النموذج التالي</h4>
						@foreach($OccasionProducts as $OccasionProduct)
						<form class="needs-validation form-horizontal" novalidate="" action="{{ secure_url('/thankyou/'.$occasion->id.'/'.$OccasionProduct->product_id) }}" method="POST" id="validform">
						{{ csrf_field() }}									
							<div class="form-group">
								<label for="firstname" class="col-sm-3 control-label">الاسم الاول</label>
								<div class="col-sm-9">
									<input type="text" name="firstname" id="firstname" class="form-control" placeholder="الاسم الاول">
								</div>
							</div>
							<div class="form-group">
								<label for="lastname" class="col-sm-3 control-label">الاسم العائلة</label>
								<div class="col-sm-9">
									<input type="text" name="lastname" id="lastname" class="form-control" placeholder="اسم العائلة">
								</div>
							</div>
							<div class="form-group">
								<label for="emailaddress" class="col-sm-3 control-label">البريد الالكتروني</label>
								<div class="col-sm-9">
									<input type="email" name="emailaddress" id="emailaddress" class="form-control" placeholder="البريد الالكتروني">
								</div>
							</div>
							<div class="form-group">
								<label for="mobilenumber" class="col-sm-3 control-label">رقم الهاتف</label>
								<div class="col-sm-9">
									<input type="number" name="mobilenumber" id="mobilenumber" class="form-control" placeholder="رقم الهاتف">
								</div>
							</div>
							<div class="form-group">
								<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
									<button class="btn btn-light btn-radius btn-brd grd1 effect-1" type="submit">حفظ</button>
								</div>
							</div>
						</form>
						@endforeach
						<p class="lead martop15">سيقوم مندوبنا بالتواصل معكم من خلال رقم الهاتف لاكمال عملية الدفع.</p>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">
						<div class="pricing-table pricing-table-highlighted">
							<div class="pricing-table-text">
								<h4>الهدية التي اخترتها</h4>
							</div>
							@foreach($OccasionProducts as $OccasionProduct)
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge">{{ $OccasionProduct->productprice }} دينار</span>
									<h4 class="list-group-item-heading">
									{{ $OccasionProduct->productname }}</h4>
									<p class="list-group-item-text">
										{{ str_limit($OccasionProduct->productdescription, $limit = 153, $end = '...') }}
									</p>
								</li>
								<li class="list-group-item">
									<span class="badge">5 دنانير</span>
									<h4 class="list-group-item-heading">الدفع والتوصيل</h4>
								</li>
								<li class="list-group-item">
									<span class="badge">{{ $OccasionProduct->productprice +5 }} دينار</span>
									<h4 class="list-group-item-heading">المجموع</h4>
								</li>										
							</ul>
							
							@endforeach
						</div>
					</div>
						</div><!-- end row -->	
			</div><!-- end col -->
		</div><!-- end row -->
		<script>
$(document).ready(function () {

$('#validform').validate({
    rules: {
		firstname: "required",
		lastname: "required",
		mobilenumber: {
			required: true,
			digits: true,
		},		
        emailaddress: {
            required: true,
            email: true
        },
	messages: {
		//name: "Please specify your name",
		email: {
			required: "الحقل مطلوب",
			email: "البريد الالكتروني يجب ان يكون بهيئة email@domain.com",			
		},
		mobilenumber: {
			digits: "الحقل يجب ان يحتوي على ارقام فقط"
		}
	}
    },
    highlight: function (element) {
        $(element).closest('.form-group').removeClass('success').addClass('error');
    },    
});
});
</script>
		<hr class="mb-4">
	</div><!-- end container -->
</div>
@endsection
