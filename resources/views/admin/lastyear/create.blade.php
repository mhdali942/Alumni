<x-admin-master>

    @section('content')

		<!-- Page Header -->

										 <p><h5>Exclusive for Final Year Students / خاصة بطلاب السنة الآخيرة  </h5></p>
        									<hr>
			
									<!-- Start Alumni Form -->
								
								<form name="lastyear" method="POST" action="{{route('lastyear.store')}}">
										@csrf
									

								<!-- End Row -->

								<!-- full name  and Nationality Inputs -->
					<!-- full name  and Nationality Inputs -->
								<div class="form-row">

									 <div class="form-group col-md-6">
										      <label for="fullname">الاسم الكامل  - Full Name </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
									 </div>

									<div class="form-group col-md-6">
										      <label for="nationality">الجنسية - Nationality</label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality"  value="{{ old('nationality') }}">
									 </div>

								 </div>

									<!-- End Row -->

								 	<!-- Gender  and Refrence NO. Inputs -->
								  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="gender">الجنس- Gender   </label><label for="required">(* Required)</label>
										      <select class="form-control" id="gender" name="gender" value="{{ old('gender') }}">

							                              <option selected="">Select</option>
							                            <option value="Male">ذكر - Male</option>
							                            <option value="أFemale">أنثى - Female</option>
							                        </select>
										    </div>

										 

										    <div class="form-group col-md-6">
										      <label for="refrenceNumber">الرقم المرجعي- Reference number </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="refrenceNumber" name="refrenceNumber" placeholder="Refrence Number"  value="{{ old('refrenceNumber') }}">
										    </div>

									</div>

									<!-- End Row -->

								<!-- mobiles and landline  Inputs -->
										<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{ old('MobileNumber') }}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Subspecialty">الهاتف الثابت- Landline Number</label><label for="optional">(* optional)</label>

										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{ old('LandlineNumber') }}">
										    
										    </div>

										  </div>


										  	<!-- End Row -->


										  	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address</label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{ old('email') }}">
										    </div>

												    <div class="form-group col-md-6">
												     <label for="faculty">الكلية - Faculty</label>
												      <select class="form-control" id="faculty" name="faculty">
									                            <option selected="">Select</option>
									                            <option value="Faculty of Languages">Faculty of Languages</option>
									                            <option value="Faculty of Islamic">Faculty of Islamic Sciences</option>
									                             <option value="Faculty of IT">Faculty of Computer and Information Technology</option>
									                              <option value="Faculty of Eduction">Faculty of Education</option>
									                               <option value="Faculty of Finance">Faculty of Finance & Administrative Sciences</option>
									                                <option value="Centre of Languages">Centre of Preparatory Studies & Languages</option>
									                     </select>
												</div>
										  </div>



									<!-- Faculty  and Educational level Inputs -->
									<div class="form-row">
										 
											
										    <div class="form-group col-md-6">
											      <label for="leanringmode">نوع الدراسة-Mode of study</label><label for="required">(* Required)</label>
											      <select class="form-control" id="leanringmode" name="leanringmode"  value="{{ old('leanringmode') }}">
											      				  <option selected="">Select</option>
								           					  <option value="On-line">تعليم عن بعد - ONLINE</option>
								                            <option value="On Campus">تعليم مباشر - ON CAMPUS</option>
								                            
								                   </select>
										    </div>

										 <div class="form-group col-md-6">
										       <label for="edulevel">االمرحلة الدراسية - Educational level</label><label for="required">(* Required)</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel"  value="{{ old('edulevel') }}">
							                            <option value="">Select</option>
							                            <option value="اPhD">الدكتوراه PhD</option>
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
										       <label for="Subspecialty">التخصص الدقيق (إن وجد) Subspecialty (if applicable) </label><label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Subspecialty" name="Subspecialty" placeholder="Subspecialty"  value="{{ old('Subspecialty') }}">
										    
										    </div>




										     <div class="form-group  col-md-6">
												       <label for="SalaryFirst">Monthly Salary  / الراتب الشهري / الدخل  </label>
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


								<!-- End Row -->
										  	
								<!-- Faculty  and Educational level Inputs -->

										    <div class="form-group">
										      <label for="currentaddress">العنوان الحالي - Current Address </label><label for="required">(* Required)</label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{ old('currentaddress') }}">
										   </div>

										    <div class="form-group">
										       <label for="Currentwork">العمل الحالي -  Current work </label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{ old('Currentwork') }}">
										    
										    </div>
										       <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position</label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{ old('CurrentPosition') }}">
										    
										    </div>
										     <div class="form-group">
										       <label for="Currentworkaddress">عنوان العمل الحالي - Current work address</label><label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{ old('Currentworkaddress') }}">
										    
										    </div>
										    

										     <div class="form-group">
										       <label for="Previouspositions">المناصب السابقة - Previous positions</label><label for="optional">(* optional)</label>
										   		 <input type="text" class="form-control" id="Previouspositions" name="Previouspositions" placeholder="Previous Positions"  value="{{ old('Previouspositions') }}">
										    
										    </div>

										     <div class="form-group">
										       <label for="Scientificliterature">النتاج العلمي- Scientific output</label>
										   		
										   		 <textarea class="form-control" id="Scientificliterature" name="Scientificliterature" placeholder="Scientific literature"  value="{{ old('Scientificliterature') }}"></textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts</label>
										   		
										   		  <textarea class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  value="{{ old('Communityposts') }}"></textarea>
										    
										    </div>

										     <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label>
										   		
										   		  <textarea class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements"  value="{{ old('Otherachievements') }}"></textarea>
										    
										    </div>

										      <div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements </label>
										   		
										   		  <textarea class="form-control" id="SkillsAbilities" name="SkillsAbilities" 
										   		 placeholder="Skills Abilities" value="{{ old('SkillsAbilities') }}"></textarea>
										    
										    </div>


										     <div class="form-group">
										      <label for="additionaltask">مهام أخرى يمكنك القيام بها- Other additional tasks you can do </label>
										     
										       <textarea class="form-control" id="additionaltask" name="additionaltask" 
										      placeholder="Additional Task"  value="{{ old('additionaltask') }}"></textarea>
										    </div>


										    

										  

										

										  	<div class="form-row">


										  		 <div class="form-group col-md-6">
										    <label for="Memebership">Memberships   </label>
										   	<select class="form-control" id="Memberships" name="Memberships"  value="{{ old('Memberships') }}">
							                          <option value="">Select</option>
							                          <option id="bronze" value="bronze">Bronze Membership</option>
							                          
							                             	
							                             

							                </select>
										    
										    </div>

										     <div class="form-group col-md-6">
												    <label for="clubtasks">Club Tasks / مهام  يمكن القيام بها   </label>
												   	<select class="form-control" id="clubtasks" name="clubtasks"  value="{{ old('clubtasks') }}">
									                           		 <option value="">Select</option>
									                           		 <option value="Club Presidency">Club Presidency </option>
									                            	<option value="Supervisor">Supervisor</option>
									                             	<option value="Field administrative member">Field administrative member</option>
									                               <option value="Counselling">Counselling</option>
									                               <option value="Managing Member">Managing Member</option>
									                               <option value="Pay club subscription only">Pay club subscription only</option>
									                             

									                        </select>
												    
												    </div>

										  </div>


												 
	 				
	 							
	 								<div class="form-row mb-3 text-center" id="lastyear_memberships">

											<div class="form-group col-md-3">
													

											</div>

											<div class="form-group col-md-6">
													 
													      <div class="alert alert-info" role="alert">
														         	  <div class="form-row" style="text-align: center;">

																	     <div class="form-group col-md-12">

																	     	<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment">
							  													<label class="form-check-label" for="inlineRadio1"> Monthly Self Payment / دفع ذاتي شهري </label>

																	    
																	    </div>


																	  


																	 </div>
															
															</div>       
													 <div class="card mb-4 box-shadow">
													 	 

												          <div class="card-header" style="background-color: #c3b253;">
												            <h4 class="my-0 font-weight-normal" style="color: #ffff;" >Bronze /البرونزية </h4>
												          </div>
												          <div class="card-body">

												            	<div class="row">
													          		<div class="col-md-12">
													          			
													          			<ul class="list-group">
																  <li class="list-group-item">تبدأ من 10 رنجت ماليزي و يمكن أن تساهم بأكثر من ذلك   </li>
																  <li class="list-group-item">Minimum 10 MYR and Can contribute with more than that </li>
																  
																		</ul>
													          		</div>
									          			
														          	</div><br>

														          		<div class="input-group mb-4">
																		  <div class="input-group-prepend">
																		    <span class="input-group-text">MYR</span>
																		  </div>
																		  <input type="text" class="form-control" id="bronzeMembershipAmount" class="form-control" id="bronzeMembershipAmount" name="bronzeMembershipAmount" placeholder="Amount / المبلغ ">
																		  <div class="input-group-append">
																		    <span class="input-group-text">.00</span>
																		  </div>
																       </div>


												          
												          	<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#bronzeModal" > Benefits(مميزات العضوية)</button><br><br>
													<p><strong style="color: red;">Note:</strong> Monthly Subscriptions are to be received from the 1st to the 10th of each month </p>
													<p><strong style="color: red;">تنويه :</strong> يتم استقبال اشتراكات العضويات شهريا من تاريخ 1 إلى 10 من كل شهر </p>
												          

												           		<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="Membershiptype" checked="true" value="Bronze" >
															   
															  <label class="form-check-label" for="inlineRadio1">Select</label>
																</div>
												          </div>
												        </div>

											</div>

											<div class="form-group col-md-3">
														
											</div>

									</div>	
	 					
																		
									

						<div class="row">
							
							<div class="col text-center mb-3">
											
								<div class="form-group">
									<div class="form-check">
										
										<input class="form-check-input" type="checkbox" name="termsCondtions" value="checked" data-toggle="modal" data-target="#termsCondtionsModel" >
												   <label class="form-check-label" for="gridCheck">
												   	Please read the terms and regulations of the Alumni Club /يرجى قراءة اللائحة الأساسية لنادي الخريجين
												      
										</label><br>
												 	 
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




<!--Bronze Modal  -->
<div class="modal fade" id="bronzeModal" tabindex="-1" role="dialog" aria-labelledby="bronzeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bronzeModal"> Their benefits / مميزات العضوية </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>
      	

      		 <ul class="list-unstyled mt-3 mb-4">
				
				 <li>1. This membership is for final year students in all levels whose academic record status is still active, and who are expected to graduate in that last year at the time of membership application. Upon completion of their study and graduation from the university, they are entitled to opt for the silver, gold or platinum membership. </li>
					 <li></li>
				 <li>2. Its bearer is entitled to enter the university and benefit from its facilities such as the library and so on.</li>
				 <li>3. Its bearer pays a monthly subscription of at least RM10, and he may contribute more than that. </li>
				<li>4. Its bearer is invited to attend public events of the university, according to the nature of the event, and the availability of places</li>
			</ul>
								             
      </p>

      <div class="float-right" style="direction: rtl; text-align: right;">
      	

      		<p style="direction: rtl;">
      	
      	<ul class="list-unstyled mt-3 mb-4">
					<li>1.	يعضويته لطلاب السنة النهائية في جميع المستويات الذين لا يزال سجلهم الأكاديمي نشطًا ، والذين من المتوقع أن يتخرجوا في ذلك العام الماضي وقت تقديم طلب العضوية. عند الانتهاء من الدراسة والتخرج من الجامعة ، يحق لهم اختيار العضوية الفضية أو الذهبية أو البلاتينية.</li>

					<li>2.	يحق لحاملها دخول الجامعة والاستفادة من مرافقها كالمكتبة وغير ذلك </li>
					<li>3.	يدفع حاملها مساهمة شهرية بمقدار (10) رنقت على أقل تقدير، ويمكن أن يساهم بأكثر من ذلك</li>
					<li>4.	يدعى حاملها لحضور المناسبات العامة للجامعة، بحسب طبيعة المناسبة، وبحسب توفر الأماكن  </li>

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







<!-- Modal Termand condtions -->
<div class="modal fade" id="termsCondtionsModel" tabindex="-1" role="dialog" aria-labelledby="termsCondtionsModel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsCondtionsModel">General Regulation - اللوائح العامة </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <p class="card-text">
		      <a href="{{asset('assets\Files\Initial Plan For Alumni Club.pdf')}}" target="_blank"  class="text-danger">Initial Plan For Alumni Club - English Version </a>
		    </p><br>
		    <p class="card-text">
		      <a href="{{asset('assets\Files\Initial Plan For Alumni Club-arabic.pdf')}}" target="_blank"  class="text-danger" >الخطة المبدئية لنادي الخريجين  - النسخة العربية  </a>
		    </p> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
        
      </div>
    </div>
  </div>
</div>
 

    @endsection



</x-admin-master>


<script>
            	
            $(document).ready(function(){




			   var v = $("#lastyear").validate({
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
			       
			        email: {
			          required: true,
			          
			        },
			         Membershiptype: {
			          required: true,
			          
			        },
			        termsCondtions: {
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
			          maxlength:600
			          
			        },

			        currentaddress: {
			          required: true,
			          minlength:5,
			          maxlength:600
			          
			        },
			       Currentwork: {
			        
			          minlength:5,
			          maxlength:600
			          
			        },
			        CurrentPosition: {
			       
			          minlength:5,
			          maxlength:600
			          
			        },
			        Currentworkaddress: {
			        
			          minlength:5,
			          maxlength:600
			          
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
			       
			          
			        },LandlineNumber: {
			        
			          minlength:10,
			          maxlength:25
			          
			        },
			        	

			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });


		  });

            $(function() {
				    $('#lastyear_memberships').hide(); 
				     
					    $('#Memberships').change(function(){
				        if($('#Memberships').val() == 'bronze') {
				           $('#lastyear_memberships').show(); 
				         

				        } else if($('#Memberships').val() == '') {
				            	
				           $('#lastyear_memberships').hide(); 
				         
				       
					        } 
					    });
				});

            </script>