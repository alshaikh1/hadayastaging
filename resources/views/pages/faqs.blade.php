@extends('layouts.app')

@section('content')
<div class="section wb main">
	<div class="section-title text-center">
		<h3>الاسئلة الشائعة</h3>
		<p class="lead">تجد هنا اجابات للأسئلة
		والاستفسارات الشائعة</p>
	</div>
	<div class="container">
		<div class="panel-group" id="faqAccordion">
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
					 <h4 class="panel-title">
						<a href="#" class="ing">كيف يعمل الموقع وما الهدف من استخدامه؟</a>
				  </h4>

				</div>
				<div id="question0" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">الجواب</span></h5>
						<p>فريق عمل Ribbonate لديه ارتباطات وشراكات مع العديد من الموردين المعتمدين الذين يتمتعون بسمعة رائعة في مجال البضائع والمنتجات، اذا كانت لديك مناسبة زواج او مولود جديد، 
						بامكانك انشاء قائمة هدايا ترغب بالحصول عليها، ومن ثم مشاركة هذه القائمة مع احبائك واصدقائك ليقوموا بشراء الهدايا لك عبر موقعنا، ومن ثم نقوم نحن بتوصيل الهدايا لك.
							</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
					 <h4 class="panel-title">
						<a href="#" class="ing">هل هي خدمة مجانية؟</a>
				  </h4>

				</div>
				<div id="question1" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">الجواب</span></h5>
						<p>نعم، هي خدمة مجانية للجميع. ليس هناك أي رسوم اضافية.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
					 <h4 class="panel-title">
						<a href="#" class="ing">لا ارغب بهدايا عينية. هل استطيع الحصول على هدايا نقدية؟</a>
				  </h4>

				</div>
				<div id="question2" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">Answer</span></h5>

						<p>طبعا، بامكانك اختيار كوبون نقدي بقيمة 10 دنانير وبالتالي يقوم اصدقائك واحباؤك بشراء الكوبونات لك. ومن ثم يمكنك استعمال كوبونات الشراء من المتاجر المعتمدة لدينا.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
					 <h4 class="panel-title">
						<a href="#" class="ing">هل عملية انشاء قائمة هدايا سهلة؟</a>
				  </h4>

				</div>
				<div id="question3" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">الجواب</span></h5>

						<p>عملية انشاء قائمة الهدايا سهلة جدا ولا تستغرق اكثر من دقيقتين. كل ما عليك هو الضغط على رابط (مناسبتك) في القائمة الرئيسية ومن ثم اكمال النموذج واختيار الهدايا.</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
					 <h4 class="panel-title">
						<a href="#" class="ing">لقد انتهت المناسبة، وارغب في مسح معلوماتي. ماذا افعل؟</a>
				  </h4>

				</div>
				<div id="question4" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">الجواب</span></h5>

						<p>العملية بسيطة. كل ما عليك مراسلتنا على البريد الالكتروني التالي 
						<a href="mailto:support@ribbonate.com">support@ribbonate.com</a> 
						وسنقوم بمسح معلوماتك خلال يوم عمل واحد.
						</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default ">
				<div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
					 <h4 class="panel-title">
						<a href="#" class="ing">هل الهدايا مكفولة؟</a>
				  </h4>

				</div>
				<div id="question5" class="panel-collapse collapse" style="height: 0px;">
					<div class="panel-body">
						 <h5><span class="label label-primary">الجواب</span></h5>

						<p>نعم، مكفولة بضمان المتجر الذي تم اختيار الهدية منه. وبامكانك مراجعة المتجر لاستبدالها في حال العطل.
						</p>
					</div>
				</div>
			</div>
			
		</div>
		<hr class="mb-4">
	</div>
</div>
@endsection