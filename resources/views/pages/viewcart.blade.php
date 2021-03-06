@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>سلة الشراء</h3>
	</div>
	
	<div class="container">
		<div class="f1-steps">
			<div class="f1-progress">
				<div class="f1-progress-line" data-now-value="75" data-number-of-steps="4" style="width: 75%;"></div>
			</div>
			<div class="f1-step activated">
				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
				<p>تفاصيل المناسبة</p>
			</div>
			<div class="f1-step activated">
				<div class="f1-step-icon"><i class="fa fa-gift"></i></div>
				<p>اختيار الهدايا</p>
			</div>
			<div class="f1-step active">
				<div class="f1-step-icon"><i class="fa fa-eye"></i></div>
				<p>معاينة</p>
			</div>
			<div class="f1-step">
				<div class="f1-step-icon"><i class="fa fa-check"></i></div>
				<p>تأكيد</p>
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
		<h3>معلومات المناسبة</h3>
			
			@php
				$occasion = session('occasion');
			@endphp
				<table class="table table-striped table-hover text-right">
					<thead>
					<tr>
						<th>تاريخ المناسبة</th>
						<th>الاسم الأول</th>
						<th>اسم العائلة</th>
						<th>البريد الالكتروني</th>
						<th>رقم الهاتف</th>
						<th>نوع المناسبة</th>
						<th>الوصف</th>
						<th>عنوان التوصيل</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>{{ $occasion['occdate'] }}</td>
						<td>{{ $occasion['firstname'] }}</td>
						<td>{{ $occasion['lastname'] }}</td>
						<td>{{ $occasion['emailaddress'] }}</td>
						<td>{{ $occasion['mobilenumber'] }}</td>
						<td>{{ $occasion['selectoccasion'] }}</td>
						<td>{{ $occasion['description'] }}</td>
						<td>{{ $occasion['address'] }}</td>
					</tr>
					</tbody>
				</table>
			
		</div>
	
		<div class="row">
		<h3>قائمة الهدايا</h3>
			<div class="table-responsive-sm">
				<table class="table table-striped table-hover text-right">
					<thead>
						<tr>
							<th class="text-right">اسم المنتج</th>
							<th class="text-right">الوصف</th>
							<th class="text-right">السعر</th>
							<th class="text-right">المصدر</th>
							<th class="text-right">الكمية</th>
							<th class="text-right">حذف</th>
						</tr>
					</thead>
					<tbody>
					
					@if(session('cart'))
						@foreach(session('cart') as $id => $details)
						<tr>
							<td>{{ $details['name'] }}</td>
							<td>{{ $details['description'] }}</td>
							<td>{{ $details['price'] }} دينار</td>							
							<td>{{ $details['merchant'] }}</td>
							<td>{{ $details['quantity'] }}</td>
							<td><button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i>
									</button>
							</td>
						</tr>
						@endforeach
					@endif
					</tbody>
				</table>
			</div>
		</div>
		<form class="needs-validation form-horizontal" novalidate="" action="{{ secure_url('/cart') }}" method="POST">
		{{ csrf_field() }}
		<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
			<button class="btn btn-light btn-radius btn-brd grd1 effect-1" type="submit">حفظ</a>
			<button class="btn btn-light btn-radius btn-brd grd1 effect-1" type="button" href="{{ secure_url('addstep1') }}">إلغاء</button>
		</div>
		</form>
		
	<hr class="mb-4">
	
	<script type="text/javascript">		
		$(".update-cart").click(function (e) {
		   e.preventDefault();
 
		   var ele = $(this);
 
			$.ajax({
			   url: '{{ url('update-cart') }}',
			   method: "patch",
			   data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
			   success: function (response) {
				   window.location.reload();
			   }
			});
		});
 
		$(".remove-from-cart").click(function (e) {
			e.preventDefault();
 
			var ele = $(this);
 
			if(confirm("هل أنت متأكد؟")) {
				$.ajax({
					url: '{{ secure_url('remove-from-cart') }}',
					method: "DELETE",
					data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
					success: function (response) {
						window.location.reload();
					}
				});
			}
		});
 
	</script>
	
	
	</div>
	
</div>
@endsection
