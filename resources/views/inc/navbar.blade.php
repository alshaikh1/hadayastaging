<nav class="megamenu navbar navbar-default">
	<div class="container">
				<div>
					<ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
				</div>
	
	
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ secure_url('/') }}">
						<img src="{{ secure_asset('images/ribbon8-logo.png') }}" alt="Hadaya">
					</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left menu-top">
                        <li><a href="{{ secure_url('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">الرئيسية</a></li>          
						<li><a href="{{ secure_url('/search') }}" class="{{ (request()->is('search*')) || (request()->is('*eventdetails*')) || (request()->is('*purchase*')) ? 'active' : '' }}">ابحث عن مناسبات</a></li>
                        <li><a href="{{ secure_url('/add') }}" class="{{ (request()->is('add')) ? 'active' : '' }}">مناسبتك</a></li>
						<li><a href="{{ secure_url('/howto') }}" class="{{ (request()->is('howto')) ? 'active' : '' }}">كيف يعمل الموقع؟</a></li>
						<li><a href="{{ secure_url('/faqs') }}" class="{{ (request()->is('faqs')) ? 'active' : '' }}">الاسئلة الشائعة</a></li>
						<li><a href="{{ secure_url('/about') }}" class="{{ (request()->is('about')) ? 'active' : '' }}">عن الموقع</a></li>
                        <li><a href="{{ secure_url('/contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
</nav>