<x-admin-master>

    @section('content')


   



 <p><h5>Exclusive for Alumni /خاصة بالطالب الخريج   </h5></p>
        <hr>

									<!-- Start Alumni Form -->
								
								<form id="alumniform" method="POST" action="{{route('alumniForm.store')}}">
										@csrf
									

								<!-- End Row -->

								<!-- full name  and Nationality Inputs -->
								<div class="form-row">

									 <div class="form-group col-md-6">
										      <label for="fullname">الاسم  - Name</label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
									 </div>

									<div class="form-group col-md-6">
										      <label for="nationality"> الجنسية - Nationality </label><label for="required">(* required)</label>
										      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality"  value="{{ old('nationality') }}">
									 </div>

								 </div>

									<!-- End Row -->

								 	<!-- Gender  and Refrence NO. Inputs -->
								  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="gender">الجنس- Gender     </label><label for="required">(* required)</label>
										      <select class="form-control" id="gender" name="gender" value="{{ old('gender') }}">

							                            <option selected="">Select</option>
							                            <option value="Male">ذكر - Male</option>
							                            <option value="Female">أنثى - Female</option>
							                        </select>
										    </div>

										 

										    <div class="form-group col-md-6">
										      <label for="refrenceNumber">الرقم المرجعي- Reference number</label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="refrenceNumber" name="refrenceNumber" placeholder="Refrence Number"  value="{{ old('refrenceNumber') }}">
										    </div>

									</div>

									<!-- End Row -->

									<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">
										 
										<div class="form-group col-md-6">
										     <label for="faculty">الكلية - Faculty</label><label for="required">(* Required)</label>
										      <select class="form-control" id="faculty" name="faculty">
							                            <option selected="">Select</option>
							                            <option value="Faculty Languages">Faculty of Languages</option>
							                            <option value="Faculty Islamic">Faculty of Islamic Sciences</option>
							                             <option value="Faculty IT">Faculty of Computer and Information Technology</option>
							                              <option value="Faculty Education">Faculty of Education</option>
							                               <option value="Faculty Finance">Faculty of Finance & Administrative Sciences</option>
							                                <option value="Centre Languages">Centre of Preparatory Studies & Languages</option>
							                     </select>
										</div>

										 <div class="form-group col-md-6">
										       <label for="edulevel">االمرحلة التي تخرجت فيها- Educational level</label><label for="required">(* Required)</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel"  value="{{ old('edulevel') }}">
							                            <option value="">Select</option>
							                            <option value="PhD">الدكتوراه PhD</option>
							                            <option value="Masters">الماجستير Masters</option>
							                            <option value="Diploma">الدبلوم Diploma</option>
							                             <option value="Bachelor">الليسانس/ البكالوريوس Bachelor</option>
							                              <option value="Others">غير ذلك - Others</option>
							                        </select>
										  </div>

									</div>

								<!-- End Row -->


								<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">

										    <div class="form-group col-md-6">
											      <label for="leanringmode">نوع الدراسة-Mode of study</label><label for="required">(* Required)</label>
											      <select class="form-control" id="leanringmode" name="leanringmode"  value="{{ old('leanringmode') }}">
											      				 <option selected="">Select</option>
								           					  <option value="On-line">تعليم مباشر - ON CAMPUS</option>
								                            <option value="On Campus">تعليم عن بعد - ONLINE</option>
								                            
								                   </select>
										    </div>
										                       @if(Auth::check() && Auth::user()->statues == "alumni")

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">التخصص الدقيق (إن وجد) Subspecialty (if applicable)</label>
										   		 <input type="text" class="form-control" id="Subspecialty" name="Subspecialty" placeholder="Subspecialty"  value="{{ old('Subspecialty') }}">
										    
										    </div>
										    @endif

									</div>


								<!-- End Row -->


										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number  </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{ old('MobileNumber') }}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">الهاتف الثابت- Landline Number</label> <label for="optional">(* optional)</label>

										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{ old('LandlineNumber') }}">
										    
										    </div>

										  </div>



										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{ old('email') }}">
										    </div>

										    <div class="form-group col-md-6">
										    <label for="clubtasks">أعمال ومهام يمكنك القيام بها في نادي الخريجين -Task you can do for the Alumni club </label>
										   	<select class="form-control" id="clubtasks" name="clubtasks"  value="{{ old('clubtasks') }}">
							                           		 <option value="">Select</option>
							                           		 <option value="Club Presidency">رئاسة النادي- Club Presidency </option>
							                            	<option value="Counselling">الاستشارة- Counselling</option>
							                            	<option value="supervisor">شرف إداري- supervisor</option>

							                             	<option value="Managing member">عضو إداري-  Managing member</option>
							                               <option value="Field administrative">عضو إداري ميداني-  Field administrative member</option>
							                               <option value="Financial Support">دعم مادي فقط -  Financial Support Only</option>
							                            
							                             

							                        </select>
										    
										    </div>

										  </div>

										  	
								<!-- Faculty  and Educational level Inputs -->

										    <div class="form-group">
										      <label for="currentaddress">العنوان الحالي - Current Address </label><label for="required">(* Required)</label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{ old('currentaddress') }}">
										   </div>

										    <div class="form-group">
										       <label for="Currentwork">العمل الحالي -  Current work </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{ old('Currentwork') }}">
										    
										    </div>
										       <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position</label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{ old('CurrentPosition') }}">
										    
										    </div>
										     <div class="form-group">
										       <label for="Currentworkaddress">نوان العمل الحالي - Current work address</label> <label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{ old('Currentworkaddress') }}">
										    
										    </div>
										  


										     <div class="form-group">
										       <label for="Scientificliterature">لنتاج العلمي- Scientific output</label> <label for="optional">(* optional)</label>
										           <textarea  class="form-control" id="Scientificliterature"  name="Scientificliterature" placeholder="Scientific literature"  value="{{ old('Scientificliterature') }}"></textarea>
										   		
										    
										    </div>

										     <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts </label> <label for="optional">(* optional)</label>
										   		  <textarea type="text" class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  value="{{ old('Communityposts') }}"></textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label> <label for="optional">(* optional)</label>
										   		   <textarea  type="text" class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements"  value="{{ old('Otherachievements') }}"></textarea>
										    
										    </div>

										      <div class="form-group">
										       <label for="Otherachievements">المهارات والقدرات - Skills Abilities</label> <label for="optional">(* optional)</label>
										   		  <textarea type="text" class="form-control" id="SkillsAbilities" name="SkillsAbilities" 
										   		 placeholder="Skills Abilities" value="{{ old('SkillsAbilities') }}"></textarea>
										    
										    </div>

										    
										    <div class="form-group">
										      <label for="additionaltask">هام أخرى يمكنك القيام  - Other additional tasks you can do</label> <label for="optional">(* optional)</label>
										      <textarea type="text" class="form-control" id="additionaltask" name="additionaltask" 
										      placeholder="Additional Task"  value="{{ old('additionaltask') }}"></textarea>
										    </div>




										  

										  <div class="form-row">

										    


										<div class="form-group col-md-6">
										    <label for="Memebership">Memberships   </label>
										   	
										   	<select class="form-control" id="Memberships" name="Memberships"  value="{{ old('Memberships') }}">
							                          <option value="">Select</option>
							                          <option id="silver" value="silver">Silver Membership</option>
							                           <option id="golden" value="golden">Golden Membership</option>
							                          <option  id="platinum" value="platinum">Platinum Membership</option>
							                             	
							                             

							                </select>
										    
										</div>

										<div class="form-group col-md-6">
										       		<label for="SalaryFirst">Monthly Salary  / الراتب الشهري / الدخل  </label><label for="required">(* Required)</label>
										   		 		
										   		 	<select class="form-control" id="SalaryFirst" name="SalaryFirst"  value="{{ old('fullname') }}">
								                           	 <option value="">Select</option>
								                           	 <option value="From 1 to 1000 RM">From 1 to 1000 RM</option>
								                             <option value="From 1001 to 5000 RM">From 1001 to 5000 RM</option>
								                             <option value="From 5001 to 10000 RM">From 5001 to 10000 RM</option>
							                              	 <option value="More than 10,000 RM">More than 10,000 RM</option>
							                                 <option value="I do not wish to clarify">لا أرغب في التوضيح- I do not wish to clarify</option>
							                             

							                        </select>
										    
										   		 </div>


										</div>


									

							<div class="container" id="alumni_memberships">
											


 
								<div class="form-row mb-3 text-center" id="silver_row" style="display: none;">


									<div class="form-group col-md-2">
										

									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment">
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي   </label>

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
									          		<p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>

									          			<hr/>

									            
									            	
									        

									           	
									           		
										           <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" id="inpsilver" name="Membershiptype"  value="silver"  checked="true">
												  <label class="form-check-label" for="inlineRadio1">Select</label>
												</div>

									          </div>
									        </div>
										</div>

										<div class="form-group col-md-2">
											 
 											</div>

										</div>


							<div class="form-row mb-3 text-center" id="golden_row" style="display: none">

									<div class="form-group col-md-2">
										

									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
															<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment">
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي   </label>

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

									       
									           
													<button type="button" class="btn btn-primary" id="btngolden" data-toggle="modal" data-target="#goldenModel" > Benefits(مميزات العضوية)</button><br><br>

													<p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>


									           		<hr/>
									           

									           		<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" id="inpgolden" name="Membershiptype"  value="golden"  checked="true"> 
												  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>
									          </div>
									        </div>

										</div>

										<div class="form-group col-md-2">
											

											</div>

										</div>


							<div class="form-row mb-3 text-center" id="platinum_row" style="display: none">

									<div class="form-group col-md-2">
										
									</div>
									<div class="form-group col-md-8">
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment">
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي   </label>

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
													data-toggle="modal" data-target="#PlatinumModal" > Benefits(مميزات العضوية)</button><br><br>
													<p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>


									           		<hr/>

									           		
												           <div class="form-check form-check-inline">
														  <input class="form-check-input" type="radio" id="inpplat" name="Membershiptype"  value="platinum"  checked="true">
														  <label class="form-check-label" for="inlineRadio1">Select</label>
														</div>
										        	 </div>
									       		 </div>
										</div>

										<div class="form-group col-md-2">
											  

											</div>

										</div>



										<div class="row">
										<div class="col text-center mb-3">
											
											<div class="form-group">
											 <div class="form-check">
												  <input class="form-check-input" type="checkbox" name="termsCondtions" value="yes" data-toggle="modal" data-target="#termsCondtionsModel"  value="{{ old('termsCondtions') }}" >
												   <label class="form-check-label" for="gridCheck">
												   تنبيه :  يرجى الاطّلاع على الكتيّب التعريفي للنادي، للتعرف على النادي، ولاختيار العضوية المناسبة  <br> Note:Please read the Alumni Club Brochure, to get to know about the club, and to choose the right  											      
													 </label>
												 	 
												</div>
											 </div>
										</div>

									</div>



								</div>

									
									

									<div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Submit Form</button>
										</div>

											</div>
										
									</div>

							</form>


		

 <!-- Silver Modal -->
<div class="modal fade" id="silverModel" tabindex="-1" role="dialog" aria-labelledby="silverModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="silverModel"> Benefits(مميزات العضوية))</h5>
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
        <h5 class="modal-title" id="goldenModel"> Benefits(مميزات العضوية))</h5>
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
        <h5 class="modal-title" id="PlatinumModal"> Benefits(مميزات العضوية))</h5>
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
        <h5 class="modal-title" id="termsCondtionsModel">General Regulation - اللوائح العامة </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
   
		 <p class="card-text">
		      <a href="{{asset('assets\Files\Initial Plan For Alumni Club.pdf')}}" target="_blank"  class="text-danger">Initial Plan For Alumni Club - English Version </a>
		    </p><br>
		    <p class="card-text">
		      <a href="{{asset('assets\Files\Initial Plan For Alumni Club-arabic.pdf')}}" target="_blank"  class="text-danger" >الخطة المبدئية لنادي الخريجين  - النسخة العربية  </a>
		    </p> 



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
			        
			    
													fullname: {
									          required: true,
									           minlength: 6
									        },
									        nationality: {
									          required: true,
									           minlength: 4
									        },
									        gender: {
									          required: true,
									           
									        },
									        refrenceNumber: {
									          required: true,
									            minlength:3,
									           
									        },
									        MobileNumber: {
									          required: true,
									           number: true,
									            minlength:10,
									             maxlength: 18,
									            
									        },
									        LandlineNumber: {
									         
									           number: true,
									            minlength:10,
									             maxlength: 18,
									            
									       },
									        email: {
									          required: true,
									          
									        },
									         Membershiptype: {
									          required: true,
									          
									        },
									       Regulations: {
									          required: true,
									          
									        },
									        faculty: {
									          required: true,
									          
									        },
									        edulevel: {
									          required: true,
									          
									        },
									        leanringmode: {
									          required: true,
									          
									        },
									       
									        Subspecialty: {
									          required: true,
									           minlength:2,
									          maxlength:40
									          
									        },

									        currentaddress: {
									          required: true,
									          minlength:5,
									          maxlength:200
									          
									        },
									       Currentwork: {
									        
									          minlength:5,
									          maxlength:100
									          
									        },
									        CurrentPosition: {
									       
									          minlength:5,
									          maxlength:100
									          
									        },
									        Currentworkaddress: {
									        
									          minlength:5,
									          maxlength:200
									          
									        },
									       
									       Scientificliterature: {
									         
									          minlength:5,
									          maxlength:600
									          
									        },Communityposts: {
									        
									          minlength:5,
									          maxlength:600
									          
									        },Otherachievements: {
									          
									          minlength:5,
									          maxlength:600
									          
									        },SkillsAbilities: {
									      
									          minlength:5,
									          maxlength:600
									          
									        },SalaryFirst: {
									          required: true,
									       
									          
									 

									      },
									      errorElement: "span",
									      errorClass: "help-inline-error",



			    }
			});

        });




            $(function() {
				    $('#golden_row').hide(); 
				      $('#platinum_row').hide(); 
				       $('#silver_row').hide(); 
				    $('#Memberships').change(function(){
				        if($('#Memberships').val() == 'silver') {
				            $('#silver_row').show();
				            $('#golden_row').hide();
				             $('#platinum_row').hide();
				            $('#amountgolden').val('');
				             $('#amountplat').val('');

				             
				        } else if($('#Memberships').val() == 'golden') {
				            	$('#golden_row').show();
				            	$('#silver_row').hide();
				            	$('#platinum_row').hide();
				            	$('#amountsilver').val('');

				            	$('#amountplat').val('');
				             
				             

					        } else if($('#Memberships').val() == 'platinum') {
				            	$('#platinum_row').show();
				            	$('#silver_row').hide();
				            	$('#golden_row').hide();
				            	$('#amountsilver').val('');
				            	$('#amountgolden').val('');
				             

					        } 
					    });
				});
		

            </script>
