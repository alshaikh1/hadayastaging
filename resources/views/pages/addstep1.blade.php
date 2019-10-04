@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>اضف مناسبة جديدة لتتلقى الهدايا</h3>
		<p class="lead">اختر الهدايا التي ترغب بها</p>
	</div>
	
	<div class="container">
	
		<div class="f1-steps">
			<div class="f1-progress">
				<div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
			</div>
			<div class="f1-step active">
				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
				<p>about</p>
			</div>
			<div class="f1-step">
				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
				<p>account</p>
			</div>
			<div class="f1-step">
				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
				<p>social</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		@include('inc.messages')
		<form class="needs-validation form-horizontal" novalidate="" action="{{ secure_url('/addstep1') }}" method="POST">
		{{ csrf_field() }}
		<div class="row">
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
				
				<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
					<button class="btn btn-light btn-radius btn-brd grd1 effect-1" type="submit">التالي</a>
				</div>
			<!-- end col -->
			</div>
		<!-- end row-->	
		</div>
		</form>
		
		
		
		
	<!-- end container -->
	</div>
		
	</div>
	<hr class="mb-4">
@endsection