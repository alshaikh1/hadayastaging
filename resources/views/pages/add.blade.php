@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>اضف مناسبة جديدة لتتلقى الهدايا</h3>
		<p class="lead">اختر الهدايا التي ترغب بها</p>
	</div>
	
	<div class="container">
		
		<form class="needs-validation form-horizontal" novalidate="" action="{{ secure_url('/add') }}" method="POST" id="formvalid">
		{{ csrf_field() }}
		
		
		
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">تفاصيل المناسبة</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">اختيار الهدايا</a></li>
			</ul>

		<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
						<div class="form-group">
							<label for="occdate" class="col-sm-3 control-label">يوم الفرح الكبير</label>
							<div class="col-sm-9">
								<input type="date" class="form-control" id="occdate" name="occdate">
							</div>
						</div>
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
							<label for="selectoccasion" class="col-sm-3 control-label">نوع المناسبة</label>
							<div class="col-sm-9">
								<select name="selectoccasion" id="selectoccasion" class="form-control" data-style="btn-white">
									<option value="زواج">زواج</option>
									<option value="مولود">مولود جديد</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-sm-3 control-label">تفاصيل المناسبة</label>
							<div class="col-sm-9">
								<textarea type="text" rows="3" name="description" id="description" class="form-control" placeholder="تفاصيل المناسبة"></textarea>				
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-sm-3 control-label">عنوان التوصيل</label>
							<div class="col-sm-9">
								<input type="text" name="address" id="address" class="form-control" placeholder="عنوان التوصيل">
							</div>
						</div>
					<!-- end col -->
					</div>
				<!-- end tab -->
				</div>
				<div role="tabpanel" class="tab-pane text-center" id="profile">
					<div class="row">
						<div class="col-md-3 col-sm-8 col-xs-12 text-center padd15">
							<select onchange="Change()" id="Selected" class="form-control selectproducttype" data-style="btn-white">
								<option value="wedding">هدايا الزواج</option>
								<option value="baby">هدايا لمولود جديد</option>
							</select>
						</div>
					</div>
					<div id="demo">
					@foreach ($Products as $Product)
						@if ($Product->cat === 'wedding')
						<div class="col-md-3 col-sm-3 col-xs-12 productslist">
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
								
								<div>
									<a href="{{ secure_url('add/'.$Product->id) }}" class="btn" role="button">اضف الى السلة</a>
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
						<div class="col-md-3 col-sm-3 col-xs-12 productslist">
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
				<!-- end tab-->
				</div>
			<!-- end tabcontent -->
			</div>
			<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
				<button class="btn btn-light btn-radius btn-brd grd1 effect-1" type="submit">حفظ</button>
			</div>
		</form>
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
    function Change() {
        var CategorySelected = $('#Selected').val();
        if (CategorySelected == 'wedding') {
            $('#demo').css("display", "block");
            $('#demo2').css("display", "none");
        } else {
            $('#demo2').css("display", "block");
            $('#demo').css("display", "none");
        }
    }
</script>

@endsection