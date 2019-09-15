@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>ابحث عن مناسبات احبائك</h3>
		<p class="lead">قم بالبحث عن مناسبات احبائك واصدقائك من خلال البحث التالي</p>
	</div>

	<div class="container contact_form">
		<form class="needs-validation" novalidate="" action="{{ secure_url('/search') }}" method="POST" role="search" class="row">		
		{{ csrf_field() }}
			<fieldset class="row-fluid">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="firstname" id="firstname" class="form-control" placeholder="الاسم الاول">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="last_name" id="last_name" class="form-control" placeholder="اسم العائلة">
				</div>
				<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 text-center">
					<button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Search</button>
				</div>
			</fieldset>
		</form>		
	</div>
		
	@if(isset($occasions))
	<div class="container">
		<div class="row">
		
			<div class="table-responsive">
				<table class="table table-striped table-hover text-right">
					<thead>
						<tr>
							<th class="text-right">الاسم الاول</th>
							<th class="text-right">اسم العائلة</th>
							<th class="text-right">نوع المناسبة</th>
							<th class="text-right">التاريخ</th>
							<th class="text-right">تفاصيل</th>
						</tr>
					</thead>
					<tbody>
					@foreach($occasions as $occasion)
						<tr>
							<td>{{ $occasion->firstname }}</td>
							<td>{{ $occasion->lastname }}</td>
							<td>{{ $occasion->type }}</td>
							<td>{{ $occasion->occdate }}</td>
							<td><a href="{{ secure_url('/eventdetails/'.$occasion->id) }}">تفاصيل</a>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		@endif
		<!-- end row-->
		
		<div class="row">
			<div class="col-md-12 d-flex text-center">
				{{ $occasions->links() }}
			</div>
		</div>
		
		
		</div>
	<hr class="mb-4">
	</div>
	
</div>
@endsection
