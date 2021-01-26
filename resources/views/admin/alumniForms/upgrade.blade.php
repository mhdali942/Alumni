<x-admin-master>

    @section('content')


   



 <p><h5>Alumni Memebership Plan </h5></p>
        <hr>

									<!-- Start Alumni Form -->
								
									
								<form id="alumniform" method="POST" action="{{route('alumniForm.upgradePlan',$alumnis->id)}}">
										@csrf
											   @method('PATCH')

	<div class="container" id="alumni_memberships">
											
<br><br><br>

						<div class="form-row">

									 <div class="form-group col-md-4">
										     
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{$alumnis->fullname}}"  hidden="true">
									 </div>

									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="nationality" name="MobileNumber" placeholder="MobileNumber" value="{{$alumnis->MobileNumber}}"  hidden="true">
									 </div>


									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$alumnis->email}}" hidden="true">
									 </div>

								 </div>


 								
							@if(Auth::check() && Auth::user() && $alumnis->Membershiptype == "silver")
								<div class="form-row mb-3 text-center" id="silver_row">
									<div class="form-row">

									 <div class="form-group col-md-4">
										     
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{$alumnis->fullname}}"  hidden="true">
									 </div>

									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="nationality" name="MobileNumber" placeholder="MobileNumber" value="{{$alumnis->MobileNumber}}"  hidden="true">
									 </div>


									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$alumnis->email}}" hidden="true">
									 </div>

								 </div>

									<div class="form-group col-md-2">
										

									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" {{ ($alumnis->paymenttype == "self payment") ? "checked" : "" }}>
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي  </label>

			  												</div>
									 <div class="card mb-4 box-shadow">
									          <div class="card-header">
									            <h4 class="my-0 font-weight-normal">Silver Memebership / العضوية الفضية  </h4>

									          </div>
									          <div class="card-body">

									          	<div class="row">
									          		<div class="col-md-12">
									          			
									          			<ul class="list-group">
												  <li class="list-group-item">تبدأ من 10 رنجت ماليزي و  كحد  أقصى  499 رنجت ماليزي  </li>
												  <li class="list-group-item">Minimum 10 MYR and Maximum 499  MYR </li>
												  
														</ul>
									          		</div>
									          			
									          	</div><br>
									          
									                     

									       

									       	<div class="input-group mb-4">
												  <div class="input-group-prepend">
												    <span class="input-group-text">MYR</span>
												  </div>
												  <input type="text" class="form-control" id="amountsilver" class="form-control" id="silverMembershipAmount" name="silverMembershipAmount" placeholder="Amount / المبلغ ">
												  <div class="input-group-append">
												    <span class="input-group-text">.00</span>
												  </div>
									       </div>

									          		<button type="button" class="btn btn-primary" id="btnsilver"  data-toggle="modal" data-target="#silverModel" > Benefits(مميزات العضوية)</button><br><br>
									          			<hr/>

									            
									            	
									        

									           	
									           		
										           <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" id="inpsilver" name="Membershiptype"  value="Silver"   {{ ($alumnis->Membershiptype =="Silver") ? "checked" : "" }}>
												  <label class="form-check-label" for="inlineRadio1">Select</label>
												</div>

									          </div>
									        </div>
										</div>

										<div class="form-group col-md-2">
											 
 											</div>

							</div>
							@endif

							@if(Auth::check() && Auth::user() && $alumnis->Membershiptype == "golden")

							<div class="form-row mb-3 text-center" id="golden_row" >

									<div class="form-group col-md-2">
										

									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" {{ ($alumnis->paymenttype == "self payment") ? "checked" : "" }}>
			  													<label class="form-check-label" for="inlineRadio1">Monthly  Self Payment / دفع ذاتي شهري  </label>

			  												</div>
										 <div class="card mb-4 box-shadow">
									          <div class="card-header" style="background-color: #c3b253; color: #f5f4ee;">
									            <h4 class="my-0 font-weight-normal" >Golden / الذهبية  </h4>
									          </div>
									          <div class="card-body">

									          	 	<div class="row">
									          		<div class="col-md-12">
									          			
									          			<ul class="list-group">
												  <li class="list-group-item">تبدأ من 500 رنجت ماليزي  و  حد  أقصى  999 رنجت ماليزي  </li>
												  <li class="list-group-item">Minimum 500 MYR and Maximum 999  MYR </li>
												  
														</ul>
									          		</div>
									          			
									          	</div><br>
									          
									                     

									       

									       	<div class="input-group mb-4">
												  <div class="input-group-prepend">
												    <span class="input-group-text">MYR</span>
												  </div>
												  <input type="text" class="form-control" id="amountgolden"  class="form-control" id="goldenMembershipAmount" name="goldenMembershipAmount"  placeholder="Amount / المبلغ ">
												  <div class="input-group-append">
												    <span class="input-group-text">.00</span>
												  </div>
									       </div>

									       
									           
													<button type="button" class="btn btn-primary" id="btngolden" data-toggle="modal" data-target="#goldenModel" >Benefits(مميزات العضوية)</button><br><br>

									           		<hr/>
									           

									           		<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" id="inpgolden" name="Membershiptype"  value="golden"  value="{{ old('Membershiptype') }}" {{ ($alumnis->Membershiptype =="golden") ? "checked" : "" }}> 
												  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>
									          </div>
									        </div>

										</div>

										<div class="form-group col-md-2">
											

											</div>

						</div>
						@endif

					@if(Auth::check() && Auth::user() && $alumnis->Membershiptype == "platinum")

							<div class="form-row mb-3 text-center" id="platinum_row" >

									<div class="form-group col-md-2">
										
									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" {{ ($alumnis->paymenttype == "self payment") ? "checked" : "" }}	>
			  													<label class="form-check-label" for="inlineRadio1">Monthly  Self Payment / دفع  شهريذاتي شهري  </label>

			  												</div>
										
												 <div class="card mb-4 box-shadow">
									         	 <div class="card-header" style="background-color: #aba7a0; color: white;">

									           		 <h4 class="my-0 font-weight-normal">Platinum Memebership /  العضوية البلاتينية </h4>
									          
									          	</div>

										          <div class="card-body">

										          		<div class="row">
									          		<div class="col-md-12">
									          			
									          			<ul class="list-group">
												  <li class="list-group-item">تبدأ من 1000 رنجت ماليزي  و يمكن أن تساهم بأكثر من ذلك  </li>
												  <li class="list-group-item">Minimum 1000 MYR and Can contribute with more than that</li>
												   
												  
												  
														</ul>
									          		</div>
									          			
									          	</div><br>
									          
									                     

									       

									       	<div class="input-group mb-4">
												  <div class="input-group-prepend">
												    <span class="input-group-text">MYR</span>
												  </div>
												  <input type="text" class="form-control" id="amountplat"  class="form-control" id="PlatinumMembershipAmount" name="PlatinumMembershipAmount" placeholder="Amount / المبلغ ">
												  <div class="input-group-append">
												    <span class="input-group-text">.00</span>
												  </div>
									       </div>

										          <button type="button" class="btn btn-primary" id="btnplat" 
													data-toggle="modal" data-target="#PlatinumModal" >Benefits(مميزات العضوية)</button><br><br>

									           		<hr/>

									           		
												           <div class="form-check form-check-inline">
														  <input class="form-check-input" type="radio" id="inpplat" name="Membershiptype"  value="Platinum"  {{ ($alumnis->paymenttype == "Platinum") ? "checked" : "" }}">
														  <label class="form-check-label" for="inlineRadio1">Select</label>
														</div>
										        	 </div>
									       		 </div>
										</div>

										<div class="form-group col-md-2">
											  

											</div>

										</div>
										@endif





								</div>

									
									

									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Pay here / ادفع هنا </button>
										</div>

											</div>
										
									</div>

							</form>



		

 <!-- Silver Modal -->
<div class="modal fade" id="silverModel" tabindex="-1" role="dialog" aria-labelledby="silverModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="silverModel"> Benefits / مميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	
      		<ul class="list-unstyled mt-3 mb-4">
				<li>1.All graduates can obtain it</li>
				<li>2.Its bearer pays a monthly subscription amount of 10 to 499 Malaysian Ringgits</li>
				<li>3.Its bearer is entitled to enter the university and benefit from its facilities such as the library, and so on. </li>
				<li>4.Its bearer is entitled to run for the position of the club president, memberships of its departments, advisory board or the executive work teams of its programs and activities. </li>
				 <li>5.Its bearer is invited to attend public events of the university, alumni programs and parties</li>
			</ul>
      </p><hr/>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      	
      		<ul class="list-unstyled mt-3 mb-4">
				<li>1.يمكن لجميع الخريجين الحصول عليها</li>
				<li>2.دفع حاملها مساهمة شهرية بمقدار (10 إلى 499) رنقت</li>
				<li>3.حق لحاملها دخول الجامعة والاستفادة من مرافقها كالمكتبة وغير ذلك</li>
				<li>4.	يحق لحاملها الترشح لرئاسة النادي أو عضويات إدارته، أو المجلس الاستشاري، أو ضمن فرق العمل التنفيذية لبرامجه وأنشطته</li>
				 <li>5.	دعى حاملها لحضور المناسبات العامة للجامعة وبرامج الخريجين وحفلاتهم</li>
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


<!-- Golden Modal  -->
<div class="modal fade" id="goldenModel" tabindex="-1" role="dialog" aria-labelledby="goldenModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="goldenModel"> Benefits / مميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	

      		<ul class="list-unstyled mt-3 mb-4">
				<li>1.	All graduates can obtain it</li>
				<li>2.	Its bearer is entitled to enter the university and benefit from its facilities such as the library, and so on. </li>
				<li>3.	Its bearer pays a monthly subscription amount of 500 to 999 Malaysian Ringgits. </li>
				<li>4.	Its bearer is entitled to benefit from the facilities of the universities and institutions which signed agreements with the MEDIU according to the scopes and ranges agreed upon</li>
				 <li>5.	Its bearer is entitled to run for the position of the club president, memberships of its departments, advisory board or the executive work teams of its programs and activities. </li>
				 <li>6.	Publication of academic research in the academic journals of the University with reduced fees, after the passage of 12 months from the beginning of the membership or after the in-advance payment of 12 months. He is entitled to publish only two research papers in the university journals a year</li>
				 <li>7.	Its bearer is invited to attend the public events of the university, and the private events according to the availability of seats and allowed number of invitees. </li>
			</ul>

      </p>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      	
      	<ul class="list-unstyled mt-3 mb-4">
				<li>1.يحق لحاملها دخول الجامعة والاستفادة من مرافقها كالمكتبة وغير ذلك</li>
				<li>2.يدفع حاملها مساهمة شهرية بمقدار (500 إلى 999) رنقت</li>
				<li>3.يحق لحاملها الاستفادة من مرافق الجامعات والمؤسسات والجهات التي تعقد الجامعة اتفاقيات معها، بحسب الحدود والنطاقات المتفقة عليها</li>
				<li>4.يحق لحاملها الترشح لرئاسة النادي أو عضويات إدارته، أو المجلس الاستشاري، أو ضمن فرق العمل التنفيذية لبرامجه وأنشطته</li>
				 <li>5.نشر الأبحاث العلمية في المجلات العلمية التابعة للجامعة برسوم مخفضة، وذلك بعد مضي مدة 12 شهراً من ابتداء العضوية، أو بعد الدفع المقدم لاشتراك 12 شهراً. ويحق له نشر بحثين فقط في مجلات الجامعة في العام الواحد</li>
				 <li>6.يدعى حاملها لحضور المناسبات العامة للجامعة، وكذلك المناسبات الخاصة بحسب توفر المقاعد وعدد المدعوين المسموح لهم بالحضور</li>
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




<!--Platinum Modal  -->
<div class="modal fade" id="PlatinumModal" tabindex="-1" role="dialog" aria-labelledby="PlatinumModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PlatinumModal"> Benefits / مميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	

      		<ul class="list-unstyled mt-3 mb-4">
				<li>1.	All graduates can obtain it</li>
				<li>2.	Its bearer is entitled to enter the university and benefit from its facilities such as the library, and so on</li>
				<li>3.	Its bearer pays a monthly subscription amount of 500 to 999 Malaysian Ringgits. </li>
				<li>4.	Its bearer is entitled to benefit from the facilities of the universities and institutions which signed agreements with the MEDIU according to the scopes and ranges agreed upon</li>
				 <li>5.	Its bearer is invited to attend the official university events, and internal and international official events in which the university is allowed to invite whoever of its administrative and teaching staff. The member is going to be of the distinguished guests either inside or outside Malaysia</li>
				 <li>6.	Its bearer is entitled to run for the position of the club president, memberships of its departments, advisory board or the executive work teams of its programs and activities</li>
				 <li>7.	The member is granted the entitlement to be an advisor for the high management of the club. </li>
				 <li>Its bearer is entitled to elect the candidates of the club’s presidency and management members. His vote is equal to two votes of the others.</li>
				 <li>9.	Its bearer is entitled free publication in the university’s academic journals, after the passage of 12 months from the beginning of the membership or after the in-advance payment of 12 months. He is entitled to publish only two research papers in the university journals a year and more than that with reduced fees.</li>
			</ul>

      </p><hr/>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      	
      	<ul class="list-unstyled mt-3 mb-4">
<li>1.	يحق لحاملها دخول الجامعة والاستفادة من مرافقها كالمكتبة وغير ذلك. </li>
<li>2.	يدفع حاملها مساهمة شهرية بمقدار (1000) رنقت على أقل تقدير، ويمكن أن يساهم بأكثر من ذلك  </li>
<li>3.	يحق لحاملها الاستفادة من مرافق الجامعات والمؤسسات والجهات التي تعقد الجامعة اتفاقيات معها، بحسب الحدود والنطاقات المتفقة عليها  </li>
<li>4.	يدعى حاملها لحضور المناسبات الرسمية للجامعة، والمناسبات الرسمية الداخلية والدولية التي يسمح فيها للجامعة دعوة من شاء من منسوبيها الموظفين أو أعضاء هيئة التدريس، ويكون ضمن الضيوف المميزين، سواء كان العضو داخل ماليزيا أو خارجها </li>
<li>5.	يحق لحاملها الترشح لرئاسة النادي أو عضويات إدارته، أو المجلس الاستشاري، أو ضمن فرق العمل التنفيذية لبرامجه وأنشطته </li>
<li>6.	تمنح له الأحقية بأن يكون مستشاراً للإدارة العليا للنادي  </li>
<li>7.	يحق له انتخاب المرشحين لرئاسة النادي وأعضاء إدارته، وترجح الأصوات التي توافق صوته بمعدل 2 صوتين  </li>
<li>8.	نشر الأبحاث العلمية مجاناً في المجلات العلمية التابعة للجامعة، وذلك بعد مضي 12 شهراً من ابتداء العضوية، أو بعد الدفع المقدم لاشتراك 12 شهراً. ويحق له أن ينشر بحثين في مجلات الجامعة في العام الواحد، وما زاد على ذلك من الأبحاث ينشر له برسوم مخفضة  </li>

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




 <!-- Modal Terms & condtions  -->
<div class="modal fade" id="termsCondtionsModel" tabindex="-1" role="dialog" aria-labelledby="termsCondtionsModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsCondtionsModel">General Regulation</h5>
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
</div>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >close</button>
        
      </div>
    </div>
  </div>
</div>



  
    @endsection

   

   @section('scripts')
        <!-- Page level plugins -->
         

          

</x-admin-master>


<script>
    


    	$(document).ready(function(){
		$('.goldenModal').modal();
	});



        	
            $(document).ready(function(){




			   var v = $("#alumniform").validate({
				rules: {
			       
			        silverMemAmount:{

			        	
      					// max: 499,
      					// min:10
			        },

			       GoldenMemAmount:{

			        	
      					// max:999,
      					// min:500
			        },

			        PlatinumMemAmount:{

			        	
      					// max:9999999,
      					// min:1000
			        }


			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });

		  });


</script>