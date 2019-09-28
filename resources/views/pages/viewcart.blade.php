@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>سلة الشراء</h3>
		<p class="lead">سلة الشراء سلة الشراء</p>
	</div>
		
	<div class="container">
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
	<hr class="mb-4">
	</div>
	
</div>
@endsection
