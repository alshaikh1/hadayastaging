@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>اتصل بنا</h3>
		<p class="lead">لديك سؤال او استفسار؟ سنكون سعداء لتلقي رسالتك والاجابة عليها في أقرب وقت</p>
	</div>
	<div id="support" class="section wb">
        <div class="container">
			<div class="row">
                <div class="col-md-6">
                    <ul class="footer-links text-center">
						<li><a href="mailto:info@ribbonate.com">info@ribbonate.com</a></li>
						<li><a href="{{ secure_url('/') }}">www.ribbonate.com</a></li>
						<li>شارع عبدالله غوشة - عمان</li>
						<li>962782034444</li>
					</ul>
                </div><!-- end col -->
				<div class="col-md-6">
					<div id="map"></div>
						<script>
							function initMap() {
								// The location of Uluru
								var uluru = {lat: 31.968635, lng: 35.900724};								
								// The map, centered at Uluru
								var map = new google.maps.Map(
								document.getElementById('map'), {zoom: 4, center: uluru});
								// The marker, positioned at Uluru
								var marker = new google.maps.Marker({position: uluru, map: map});
								}
						</script>
						<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmO_xxOao9JUiSdIIDKdoLnWgc26ALeq0&callback=initMap"></script>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	<hr class="mb-4">
</div>
@endsection