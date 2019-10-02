@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>سلة الشراء</h3>
	</div>
		
	<div class="container">
		<div class="row">
		
			
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
			<div class="table-responsive-sm">
				<table class="table table-striped table-hover text-right">
					<thead>
						<tr>
							<th class="text-right">اسم المنتج</th>
							<th class="text-right">الوصف</th>
							<th class="text-right">السعر</th>
							<th class="text-right">المصدر</th>
							<th class="text-right">الكمية</th>
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
						</tr>
						@endforeach
					@endif
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
			<a href="addstep1" class="btn btn-light btn-radius btn-brd grd1 effect-1">حفظ</a>
			<a href="addstep1" class="btn btn-light btn-radius btn-brd grd1 effect-1">إلغاء</a>
		</div>
		
	<hr class="mb-4">
	</div>
	
</div>
@endsection
