@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>اضف مناسبة جديدة لتتلقى الهدايا</h3>
		<p class="lead">اختر الهدايا التي ترغب بها</p>
	</div>
	
	
	
	<div class="container">
		@include('inc.messages')

		<div class="row addproducts">
			
			<div class="col-sm-3 col-md-2 sidebar">
				<div class="row">
					<h3>النوع</h3>
					<ul class="nav nav-sidebar">				
						<li class="{{ Request::query('cat') == 'wedding' ? 'active' : '' }}"><a href="{{ secure_url('/addstep2?cat=wedding') }}">هدايا زواج</a></li>
						<li class="{{ Request::query('cat') == 'baby' ? 'active' : '' }}"><a href="{{ secure_url('/addstep2?cat=baby') }}">هدايا مواليد</a></li>					
					</ul>
				</div>
				
				<div class="row">
					<table class="table table-striped table-hover text-right">
						<thead>
							<tr>
								<th class="text-right">اسم المنتج</th>
								<th class="text-right">السعر</th>
								<th class="text-right">الكمية</th>
							</tr>
						</thead>
						<tbody>
						@if(session('cart'))
							@foreach(session('cart') as $id => $details)
							<tr>
								<td>{{ $details['name'] }}</td>
								<td>{{ $details['price'] }} دينار</td>
								<td>{{ $details['quantity'] }}</td>
							</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
				
				
				
			<!-- end sidebar -->
			</div>
			<div class="col-sm-9 col-md-10 main">
					@foreach ($Products as $Product)
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
								<div class="martop15">
									<a href="{{ secure_url('addstep2/'.$Product->cat.'/'.$Product->id) }}" class="btn btn-primary btn-block" role="button">اضف الى السلة</a>
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
					@endforeach
			<!-- end col-9 -->
			</div>
		<!-- end row-->	
		</div>
		
		@if(!$Products == '')
		
		<div class="row">
			<div class="col-md-12 d-flex text-center">
				{{ $Products->links() }}
			</div>
		</div>
		@endif
		
		<div class="buybtn col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="clear:both">
					<a href="addstep3" class="btn btn-light btn-radius btn-brd grd1 effect-1">التالي</a>
		</div>
		
	<!-- end container -->
	</div>
		
	</div>
	<hr class="mb-4">
@endsection