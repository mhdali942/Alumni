<x-admin-master>

    @section('content')

 
	
<p><h5> Cooperative Membership / عضوية المتعاونين  من خارج الجامعة </h5></p>


        <hr>
									<!-- Start Alumni Form -->
								
						<form id="Cooperativeform" method="POST"  action="{{route('honoraryForm.upgradePlan',$honoraries->id)}}">
										@csrf
									    @method('PATCH')
									


											<div class="container">
												


									      <div class="alert alert-success" role="alert">
									         	  <div class="form-row" style="text-align:center;">

												  

												    <div class="form-group col-md-12">
												  
												   					
												<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" {{ ($honoraries-> paymenttype =="self payment") ? "checked" : "" }}>

		  													<label class="form-check-label" for="inlineRadio1">Monthly self Payment / دفع شهري ذاتي  </label>

												    </div>


												 </div>
											
											</div>   


												<div class="form-row">

									 <div class="form-group col-md-4">
										     
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{$honoraries->fullname}}"  hidden="true">
									 </div>

									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="nationality" name="MobileNumber" placeholder="MobileNumber" value="{{$honoraries->MobileNumber}}"  hidden="true">
									 </div>


									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$honoraries->email}}" hidden="true">
									 </div>

								 </div>



										@if(Auth::check() && Auth::user() && $honoraries->Membershiptype == "Honorary Membership")

										<div class="card mb-4 box-shadow" style="text-align: center;">


											     

										          <div class="card-header">
										            <h4 class="my-0 font-weight-normal">Honorary Membership / العضوية الفحرية </h4>

											          </div>
										          <div class="card-body">


															<div class="col-md-12">
													          			
													          			<ul class="list-group">
																  <li class="list-group-item">تتبدأ من 500 رنجت ماليزي   و كحد  أقصى  999رنجت ماليزي      </li>
																  <li class="list-group-item">Minimum 500 MYR and Maximum 999  MYR </li>
																  
																		</ul>
													          		</div><br>

										              
										          <div class="input-group mb-4">
																		  <div class="input-group-prepend">
																		    <span class="input-group-text">MYR</span>
																		  </div>
																		  <input type="text" class="form-control" id="HonoraryMembershipAmount" class="form-control" id="HonoraryMembershipAmount" name="HonoraryMembershipAmount" placeholder="Amount / المبلغ ">
																		  <div class="input-group-append">
																		    <span class="input-group-text">.00</span>
																		  </div>
													 </div><br>
													 <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#HonoraryModal" >Benefits(مميزات العضوية))</button><br><br>
													<p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>

									           		<hr/>										            	
										         

											           <div class="form-check form-check-inline">
													  <input class="form-check-input" type="radio" name="Membershiptype"  value="Honorary Membership"  value="{{ old('Membershiptype') }}">
													  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>

										          </div>


									       </div>




										@endif



										@if(Auth::check() && Auth::user() && $honoraries->Membershiptype == "Cooperative Membership")



												 <div class="card mb-4 box-shadow" style="text-align: center;">


											     

										          <div class="card-header">
										            <h4 class="my-0 font-weight-normal">Cooperative Membership / العضوية التعاونية </h4>

											          </div>
										          <div class="card-body">



													          <div class="row">

													          		<div class="col-md-12">
													          			
													          			<ul class="list-group">
																  <li class="list-group-item">تبدأ من  50 رنجت ماليزي  و يمكن أن تساهم بأكثر من ذلك     </li>
																  <li class="list-group-item">Minimum 50 MYR and  Can contribute with more than that </li>
																  
																		</ul>
													          		</div>
									          			
														         </div><br>

										           
										          <div class="input-group mb-4">
																		  <div class="input-group-prepend">
																		    <span class="input-group-text">MYR</span>
																		  </div>
																		  <input type="text" class="form-control" id="CooperativeMembershipAmount" class="form-control" id="CooperativeMembershipAmount" name="CooperativeMembershipAmount" placeholder="Amount / المبلغ ">
																		  <div class="input-group-append">
																		    <span class="input-group-text">.00</span>
																		  </div>
																       </div><br>
										             <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#CooperativeModal" > Benefits(مميزات العضوية)</button><br><br>
										             <p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>


										           		<hr/>
										            	
										         

											           <div class="form-check form-check-inline">
													  <input class="form-check-input" type="radio" name="Membershiptype"  value="Cooperative Membership"  value="{{ old('Membershiptype') }}">
													  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>

										          </div>



														          		




									       </div>


										@endif







									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Upgrade</button>
										</div>

											</div>
										
									</div>
 
								



								</div>


									


							</form>


		<!-- Honorary Modal  -->
<div class="modal fade" id="HonoraryModal" tabindex="-1" role="dialog" aria-labelledby="HonoraryModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="HonoraryModal"> Benefits / ميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	

      		      	
			 <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
					 <li><p>1.	The honorary membership shall be granted by the university administration to dignitaries, notables, senior government officials, businessmen or famous and influential figures in societies who are other than graduates of the university. </p> </li>
					 <li><p>Invitations will be sent to these honorary personalities to attend the university’s programs, major events and official functions, and be among the distinguished guests, either the member was inside or outside Malaysia.</p> </li>
					 <li><p>2.They are entitled to represent the university in the international functions if not possible for one of the university staff to participate. Also, when a representative from the university is present in such function, the honorary members are invited as well if they are present in the same country, according to the number with which the university is allowed to attend the event.</p> </li>
					 <li><p>4.	The university management urges the members of this category to contribute to support the alumni fund, with a minimum amount of RM3000 per month and they may contribute more than that</p></li>
			 </ul>

      </p><hr/>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      		 <ul class="list-unstyled mt-3 mb-4">
					 <li><p>1.	تمنحها إدارة الجامعة للوجهاء وكبار موظفي الدول ورجال الأعمال أو الشخصيات المشهورة أو المؤثرة في المجتمعات، من غير خريجي الجامعة</p> </li>
					 <li><p>2.	توجه الدعوة إلى هذه الشخصيات الشرفية لحضور البرامج والفعاليات الكبرى والمناسبات الرسمية للجامعة، ويكون ضمن الضيوف المميزين، سواء كان العضو داخل ماليزيا أو خارجها</p> </li>
					 <li><p>3.	يحق لهم تمثيل الجامعة في المناسبات الدولية إن تعذرت مشاركة أحد منسوبي الجامعة، وعند حضور ممثل من الجامعة يتم دعوة الأعضاء الفخريين كذلك إذا كانوا موجودين في الدولة نفسها، بشرط أن يُسمح للجامعة بحضور العدد الكافي للمناسبة</p> </li>
					 <li><p>4.	تحث إدارة الجامعة أعضاء هذه الفئة أن يساهموا في دعم صندوق الخريجين، وتكون المساهمة ابتداء من (3000) رنقت شهرياً، ويمكن أن يساهم بأكثر من ذلك</p></li>
			 </ul>
      	
      </p>				

      </div>
      	 					
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>
 
</div>

<!-- Cooperative Modal  -->
<div class="modal fade" id="CooperativeModal" tabindex="-1" role="dialog" aria-labelledby="CooperativeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CooperativeModal"> Their benefits / ميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	

      		       	
			 <ul class="list-unstyled mt-3 mb-4" style="text-align: left;">
					 <li><p>1.	This membership is specified for those who wish to join the Alumni Club, provided that they should not be from the enrolled students or the alumni.  </p> </li>
					 <li><p>2.	Its bearer is entitled to enter the university and benefit from its facilities such as the library, and so on.  </p> </li>
					 <li><p>3.	Its bearer pays a monthly contribution amount of minimum 50 Malaysian Ringgits, and he can contribute with more than that</p> </li>
					 <li><p>4.	Its bearer is invited to attend public events of the university, according to the nature of the event, and the availability of places.</p></li>
			 </ul>

      </p><hr/>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      		 <ul class="list-unstyled mt-3 mb-4">
					 <li><p>1.	يحق لحاملها دخول الجامعة والاستفادة من مرافقها كالمكتبة وغير ذلك  </p> </li>
					 <li><p>2.	يدفع حاملها مساهمة شهرية بمقدار (50) رنقت على أقل تقدير، ويمكن أن يساهم بأكثر من ذلك</p> </li>
					 <li><p>3.	يدعى حاملها لحضور المناسبات العامة للجامعة، بحسب طبيعة المناسبة، وبحسب توفر الأماكن </li>
					 <li><p>4 .يدعى حاملها لحضور المناسبات العامة للجامعة، بحسب طبٌعة المناسبة، وبحسب   توفر الأمكان			</p></li>
			 </ul>
      	
      </p>				

      </div>
      	 					
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>
 
</div>

</li>
</li>

	<!-- Regulation Modal -->
	<div class="modal fade" id="RegulationsModel" tabindex="-1" role="dialog" aria-labelledby="RegulationsModel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document"> 
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="RegulationsModel">General Regulation</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">Introduction</h5>
	       <p>Certainly strengthening relationships and ties between community members has a great role in building societies and benefiting countries, specifically if those relationships are based on a solid foundation of knowledge and thought.
	A big number of local and international students have graduated from Al-Madinah International University in Malaysia. These graduates are the pillars of work, construction and development in their countries and communities, and establishing communication links with them is considered to be very important because it involves the exchange of experiences and benefits, and support of the brother to his Muslim brother. This is a manifestation of the Islamic brotherhood grown in the university campus, and a right the graduate student owes to his university, they received knowledge and qualification for the job market. 
	This cultural, social and developmental non-profit club will be so that it involves the university graduates from all faculties. It is under the main management of the club, and includes sub-committees and representatives in each graduate’s country, all under one net-work system. 
	</p>

	 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">Vision</h5>

	 <p>Strengthening the bonds of brotherhood among graduates to build countries and serve communities</p>

	 <h5 style="color: #c12420; font-weight: bold;margin-left: 10px; text-decoration: underline;">Mission</h5>

	 <p>Offering a group of programs and functions for the graduates and their communities, and exchanging benefits among graduates with each other</p>

	 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px;  text-decoration: underline;">Objectives</h5>

	 <p><ul>
	 		<li>To consolidating the affiliation of graduates with the university</li>
	 		<li>To strengthen the  relations and ties among graduates by creating a network of communication among them</li>
	 		<li>To benefit from the contribution, expertise and experiences of the university graduates to raise the university performance and efficiency and to execute programs and events</li>
	 		<li>To enhance the communal partnership of graduates with their communities</li>
	 		<li>To establish partnerships with the scientific, cultural, and social clubs, entities, institutions, and associations, locally and internationally</li>
	 		<li>To develop the professional and scientific skills of the graduates</li>
	 		<li>To strengthen the graduate's relationship with the university students, and enhance cooperation among them</li>

	 </ul></p>

	<div class="float-right" style="direction: rtl; text-align: right;" >
		
		<h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">مقدمة </h5>
	       <p>لا شك أن تقوية العلاقات والروابط بين أفراد المجتمع له دور كبير في بناء المجتمعات ونفع البلدان، وبخاصة إن كانت تلك العلاقات مبنية على أساس متين راسخ من العلم والفكر.
	وقد تخرج من جامعة المدينة العالمية في ماليزيا عدد كبير من الطلبة المحليين والدوليين، وهؤلاء الخريجون هم سواعد العمل والبناء والتطوير في بلدانهم ومجتمعاتهم، ويعتبر إنشاء حلقات التواصل معهم أمراً مهماً جداً لما فيه من تبادل الخبرات والمنافع ودعم الأخ لأخيه المسلم، بما له من حق الأخوة الإسلامية التي نشأت في رحاب الجامعة، ولما على الطالب الخريج من الحقوق تجاه جامعته التي كانت سبباً –بعد الله- في تلقيه العلم وتأهّله لسوق العمل.
	وسيتم إنشاء هذا النادي الثقافي الاجتماعي التنموي غير الربحي ليضم خريجي الجامعة من جميع الكليات، ويتبع الإدارة الرئيسية للنادي، ويضم لجاناً فرعية وممثلين في كل بلد من بلدان الخريجين، يعملون تحت منظومة عمل واحدة.
	 
	</p>

	 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px; text-decoration: underline;">الرؤية</h5>

	 <p>تقوية أواصر الأخوة بين الخريجين لبناء البلدان وخدمة المجتمعات</p>

	 <h5 style="color: #c12420; font-weight: bold;margin-left: 10px; text-decoration: underline;">الرسالة</h5>

	 <p>تقديم مجموعة من البرامج والفعاليات للخريجين ومجتمعاتهم وتبادل المنافع بين الخريجين</p>

	 <h5 style="color: #c12420; font-weight: bold; margin-left: 10px;  text-decoration: underline;">الأهداف</h5>

	 <p><ul>
	 		<li>عزيز انتماء الخريجين للجامعة</li>
	 		<li>وثيق العلاقات والروابط بين الخريجين بإنشاء شبكة اتصال بينهم</li>
	 		<li>مساهمة الخريجين في رفع كفاءة الجامعة وأدائها، والاستفادة من خبراتهم وتجاربهم في تنفيذ البرامج والفعاليات</li>
	 		<li>عزيز الشراكة المجتمعية للخريجين مع مجتمعاتهم</li>
	 		<li>قد الشراكات مع الأندية والكيانات والمؤسسات والجمعيات العلمية والثقافية والاجتماعية داخلياً ودولياً</li>
	 		<li>نمية المهارات العلمية والمهنية للخريجين</li>
	 		<li>قوية علاقة الخريجين مع طلبة الجامعة، وتعزيز أوجه التعاون والشراكة فيما بينهم</li>

	 </ul></p>

	  <hr/>
   <div class="alert alert-success" role="alert">
		<p>
			<ul>
				<li>يحصل أعضاء النادي وإدارته على بطاقات العضوية، مع اختلاف أنواع البطاقات بحسب العضويات</li>
				
			</ul>
		</p>  
	</div> 
	</div>

	       

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal" >Agree</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
 
  
    @endsection

   

   @section('scripts')
        <!-- Page level plugins -->
         

          

</x-admin-master>



