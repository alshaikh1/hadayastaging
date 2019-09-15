@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>كيف يعمل Ribbonate؟</h3>
		<p class="lead">اهلاً وسهلاً بك في Ribbonate ،نحن نعمل جاهدين لنجعل تجربتك في مشاركة قائمة الهدايا الخاصة بمناسبتك من خلال الانترنت ممتعة واسهل مما تتخيل ، كل ما عليك هو تتبع الخطوات اللاحقة :</p>
	</div>
	<div id="about" class="section wb nopadtop howto">
        <div class="container">
            <div class="row">
				<div class="col-md-6 m40">
                    <div class="message-box">
                        
						<h3><span class="stepnumber">1</span>
						هل أنت مقدم على زواج ؟ هل تنتظر مولوداً جديداً ؟هل لديك اي مناسبة قادمة ؟ </h3>
                        <p>
						تجنبا الحصول على هدايا لا ترغب بها ولا تستطيع استبدالها بهدايا اخرى يمكنك الان وبكل بساطة انشاء قائمة هدايا الخاصة بمناسبتك  مجاناَ و مشاركتها مع  أفراد العائلة و أصدقائك و زملاء العمل. <br />
						كل ما عليك هو اضافة: <br />
						<ul>
							<li>تفاصيل مناسبتك (نوع المناسبة، التاريخ المتوقع).</li>
							<li>تفاصيل عنوان التسليم ورقم الهاتف.</li>
							<li>اختيار مجموعة الهدايا التي ترغب بها عن طريق تصفح كتالوج الهدايا لدينا.</li>
						</ul>
						ويمكنك ايضاً إضافة بعض العبارات التي  تعبرعن مدى سعادتك في مشاركتهم هذه المناسبة السارة.
						</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ secure_asset('images/step1.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-6 m40">
                    <div class="message-box">
                        <h3><span class="stepnumber">2</span>
						شارك مع العائلة و الأصدقاء</h3>
                        <p>بعد الانتهاء من انشاء قائمة الهدايا الخاصة بك يمكنك الان مشاركتها مع الاخرين عبر إرسال الرابط في رسالة بريد إلكتروني أو على مواقع التواصل الاجتماعي أو تطبيقات التراسل الفورية مثل الواتساب.
						</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ secure_asset('images/step2.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-6 m40">
                    <div class="message-box">
                        <h3><span class="stepnumber">3</span>
						ابحث في سجلات الهدايا</h3>
                        <p>
						هل تحتار في شراء الهدية المناسبة لاهلك واصدقائك ، يمكنك الان شراء الهدية التي يرغبون بها من خلال : 
						<ul>
							<li>البحث في سجلات الهدايا عن طريق الاسم واسم العائلة.</li>
							<li>او من خلال النقر على الرابط المرسل لك عبر الوسائل المختلفة مما يؤدي إلى فتح قائمة الهدايا الخاصة بهم .</li>
						</ul>
						قم بأختيار الهدية التي ترغب في شرائها وطريقة الدفع ، سيقوم احد من فريق Ribbonate  بالتواصل معك لتأكيد عملية الشراء.
						</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ secure_asset('images/step3.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-6 m40">
                    <div class="message-box">
                        <h3><span class="stepnumber">4</span>
						استلم الهدايا التي اشتراها أصدقاؤك</h3>
                        <p>
						سيتم تسليمك الهدايا بالاتفاق معك على تفاصيل عملية التسليم والوقت المناسب وسيتم على الفور ارسال رسالة الكترونية تحتوتي على تفاصيل الهدية المشتراه الى المستلم ويتم ارسال رسالة الى المشتريمع امكانية اضافة كرت تهنئة مع الهدية. <br />
						<br />
						تحتاج للمزيد من المساعدة؟ ارسل لنا ما تحتاج عبر البريد الإلكتروني للدعم الفني <a href="mailto:support@ribbonate.com">support@ribbonate.com</a>. <br /><br />
						نتمنى لكم تجربة فريدة ممتعة. <br />
						فريق Ribbonate .

						</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ secure_asset('images/step4.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
			
			<div class="row">
				<div class="col-md-12">
					<a class="btn btn-light btn-radius btn-brd grd1 btn-block" href="{{ secure_url('/add') }}">أضف مناسبتك الآن</a>
				</div>
			</div>
			
        </div><!-- end container -->
    </div>
	<hr class="mb-4">
</div>
@endsection