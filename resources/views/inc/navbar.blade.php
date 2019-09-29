<nav class="megamenu navbar navbar-default">
	<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ secure_url('/') }}">
						<img src="{{ secure_asset('images/ribbonate-logo.png') }}" alt="Hadaya">
					</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left menu-top">
                        <li><a href="{{ secure_url('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">الرئيسية</a></li>          
						<li><a href="{{ secure_url('/search') }}" class="{{ (request()->is('search*')) || (request()->is('*eventdetails*')) || (request()->is('*purchase*')) ? 'active' : '' }}">ابحث عن مناسبات</a></li>
                        <li><a href="{{ secure_url('/add?cat=wedding') }}" class="{{ (request()->is('add')) ? 'active' : '' }}">مناسبتك</a></li>
						<li><a href="{{ secure_url('/howto') }}" class="{{ (request()->is('howto')) ? 'active' : '' }}">كيف يعمل الموقع؟</a></li>
						<li><a href="{{ secure_url('/faqs') }}" class="{{ (request()->is('faqs')) ? 'active' : '' }}">الاسئلة الشائعة</a></li>
						<li><a href="{{ secure_url('/about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">عن الموقع</a></li>
                        <li><a href="{{ secure_url('/contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">اتصل بنا</a></li>
						<li><a href="{{ secure_url('/cart') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">السلة</a></li>
                    </ul>
                </div>
            </div>
</nav>