<x-admin-master>

    @section('content')


 <p>(Exclusive for collaborators who are not university students)
 - (خاصة  بالمتعاونين من غير طلبة الجامعة) 
 </p>
        <hr>

	
								
								<form id="Cooperativeform" method="POST" action="{{route('honoraryForm.store')}}">
										@csrf
									

								<!-- End Row -->

								<!-- full name  and Nationality Inputs -->
								<div class="form-row">

									 <div class="form-group col-md-6">
										      <label for="fullname">الاسم  الكامل -Full Name </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
									 </div>

									<div class="form-group col-md-6">
										      <label for="nationality">الجنسية - Nationality  </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality"  value="{{ old('nationality') }}">
									 </div>

								 </div>

									<!-- End Row -->

								 	<!-- Gender  and Refrence NO. Inputs -->
								  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="gender">الجنس   -  Gender </label><label for="required">(* Required)</label>
										      <select class="form-control" id="gender" name="gender">

							                            <option selected="">Select</option>
							                            <option value="Male">ذكر - Male</option>
							                            <option value="Female">أنثى - Female</option>
							                        </select>
										    </div>

										 

										    <div class="form-group col-md-6">
										      <label for="IcNo">رقم الهوية الماليزية/ رقم جواز السفر - NRIC Number/ Passport Number  </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="IcNo" name="IcNo" placeholder="Identification.NO">
										    </div>

									</div>

									<!-- End Row -->



										  <div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="MobileNumber">الهاتف المحمول- Mobile Number </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number"  value="{{ old('MobileNumber') }}">
										    </div>

										    <div class="form-group col-md-6">
										       <label for="Landline Number">الهاتف الثابت- Landline Number</label><label for="required">(* Optional)</label>
										   		 <input type="text" class="form-control" id="LandlineNumber" name="LandlineNumber" placeholder="LandlineNumber"  value="{{ old('LandlineNumber') }}">
										    
										    </div>

										  </div>


										    	<div class="form-row">

										    <div class="form-group col-md-6">
										      <label for="email">الايميل- E-mail Address </label><label for="required">(* Required)</label>
										      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"  value="{{ old('email') }}">
										    </div>

										     <div class="form-group col-md-6">
										       <label for="edulevel">آخر شهادة علمية - Last scientific certificate </label><label for="required">(* Required)</label>
										   
										      <select class="form-control" id="edulevel" name="edulevel"  value="{{ old('edulevel') }}">
							                            <option value="">Select</option>
							                            <option value="PhD">PhD</option>
							                            <option value="Degree">Degree</option>
							                             <option value="Master">Master</option>
							                              <option value="diploma">Diploma</option>
							                        </select>
										  </div>

										  </div>


									<!-- Faculty  and Educational level Inputs -->
								
										 

										
										   <div class="form-group">
										      <label for="currentaddress">العنوان الحالي - Current Address  </label><label for="required">(* Required)</label>
										       <input type="text" class="form-control" id="currentaddress" name="currentaddress" placeholder="Current Address"  value="{{ old('currentaddress') }}">
										   </div>


								<!-- End Row -->

								<!-- Current Work and Current Position Inputs -->
								<div class="form-group">
										       <label for="Currentwork">العمل الحالي - Current work </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="Currentwork" name="Currentwork" placeholder="Current Work"  value="{{ old('Currentwork') }}">
										    
										    </div>


									 <div class="form-group">
										       <label for="CurrentPosition">المنصب الحالي – Current Position </label><label for="required">(* Required)</label>
										   		 <input type="text" class="form-control" id="CurrentPosition" name="CurrentPosition" placeholder="Current Position"  value="{{ old('CurrentPosition') }}">
										    
										    </div>


								<!-- End Row -->

								<div class="form-group">
										       <label for="Currentworkaddress">عنوان العمل الحالي - Current work address</label><label for="required">(* Optional)</label>
										   		 <input type="text" class="form-control" id="Currentworkaddress" name="Currentworkaddress" placeholder="Current Work Address"  value="{{ old('Currentworkaddress') }}">
										    
										    </div>
								<!-- Current work address and Previous work Inputs -->
								
										     <div class="form-group">
										       <label for="Previouspositions">المناصب السابقة - Previous positions</label><label for="required">(* Optional)</label>
										   		
										   		 <textarea class="form-control" id="Previouspositions" name="Previouspositions" placeholder="Previous Positions"  value="{{ old('Previouspositions') }}"></textarea>
										    
										    </div>

								<!-- End Row -->


								<!-- Previous Positions and Scientific literature Inputs -->
									
										 
										     

										     <div class="form-group">
										       <label for="Scientificliterature">النتاج العلمي- Scientific output</label><label for="required">(* Optional)</label>
										       <textarea class="form-control" id="Scientificliterature" name="Scientificliterature" placeholder="Scientific literature"  value="{{ old('Scientificliterature') }}"></textarea>
										    
										    </div>

								

								<!-- End Row -->

								  <div class="form-group">
										       <label for="Communityposts">المشاركات المجتمعية- Community posts </label><label for="required">(* Optional)</label>
											
											<textarea class="form-control" id="Communityposts" name="Communityposts" placeholder="Community posts"  value="{{ old('Communityposts') }}"></textarea>										    
										    </div>




								<!-- Community posts and Other achievements Inputs -->
								<div class="form-group">
										       <label for="Otherachievements">إنجازات أخرى - Other achievements</label><label for="required">(* Optional)</label>
										   		
										    	
										    	<textarea class="form-control" id="Otherachievements" name="Otherachievements" placeholder="Other achievements"  value="{{ old('Otherachievements') }}"></textarea>
										    </div>

								<!-- End Row -->

								<div class="form-group">
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


								<div class="form-group">
										    <label for="Memebership">Memberships   </label><label for="required">(* Required)</label>
										   	<select class="form-control" id="Memberships" name="Memberships"  value="{{ old('Memberships') }}">
							                          <option value="">Select</option>
							                          <option id="Honorary" value="Honorary Membership">Honorary Membership</option>
							                          <option  id="Cooperative" value="Cooperative Membership">Cooperative Membership</option>
							                             	
							                             

							                </select>
										    
									 </div>
							
										  	
								<!-- Contact detalis Inputs -->

								
										    

											<div class="container">
							  
 
									<div class="form-row mb-3 text-center">


								<div class="form-group col-md-12" id="Cooperative_row" >

										
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" checked="true">
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي   </label>

			  												</div>


										 <div class="card mb-4 box-shadow" >


											     

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
													  <input class="form-check-input" type="radio" name="Membershiptype" id="Membershiptype" value="Cooperative Membership"  value="{{ old('Membershiptype') }}">
													  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>

										          </div>



														          		




									       </div>


									<div class="row">
										<div class="col text-center mb-3">
											
											<div class="form-group">
											 <div class="form-check">
												  <input class="form-check-input" type="checkbox" name="Regulations" value="yes" data-toggle="modal" data-target="#RegulationsModel"  value="{{ old('termsCondtions') }}" >
												   <label class="form-check-label" for="gridCheck">
												   تنبيه :  يرجى الاطّلاع على الكتيّب التعريفي للنادي، للتعرف على النادي، ولاختيار العضوية المناسبة  <br> Note:Please read the Alumni Club Brochure, to get to know about the club, and to choose the right  											      
													 </label>
												 	 
												</div>
											 </div>
										</div>

									</div>


								</div>
									


										</div>

							<div class="form-row mb-3 text-center">


								<div class="form-group col-md-12" id="Honorary_row" >
										<div class="alert alert-info" role="alert">
																<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" checked="true">
			  													<label class="form-check-label" for="inlineRadio1"> Monthly self payment / دفع شهري ذاتي   </label>

			  												</div>
									
										 <div class="card mb-4 box-shadow" >


											     

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
													  <input class="form-check-input" type="radio" name="Membershiptype"  id="Membershiptype" value="Honorary Membership"  value="{{ old('Membershiptype') }}">
													  <label class="form-check-label" for="inlineRadio1">Select</label>
													</div>

										          </div>


									       </div>




												<div class="row">
													<div class="col text-center mb-3">
														
														<div class="form-group">
														 <div class="form-check">
															  <input class="form-check-input" type="checkbox" name="Regulations" value="yes" data-toggle="modal" data-target="#RegulationsModel"  value="{{ old('termsCondtions') }}" >
															   <label class="form-check-label" for="gridCheck">
															   تنبيه :  يرجى الاطّلاع على الكتيّب التعريفي للنادي، للتعرف على النادي، ولاختيار العضوية المناسبة  <br> Note:Please read the Alumni Club Brochure, to get to know about the club, and to choose the right  											      
																 </label>
															 	 
															</div>
														 </div>
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
        <h5 class="modal-title" id="CooperativeModal"> Benefits / ميزات العضوية </h5>
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
      	 					
      
     
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" >Close</button>
        
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
	        <h5 class="modal-title" id="RegulationsModel">General Regulation- اللوائح العامة </h5>
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




			   var v = $("#Cooperativeform").validate({
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
			       IcNo: {
			          required: true,
			            maxlength: 20,
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
			     
			        faculty: {
			          required: true,
			          
			        },
			        edulevel: {
			          required: true,
			          
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
			          maxlength:200
			          
			        },
			        Currentworkaddress: {
			        
			          minlength:5,
			          maxlength:300
			          
			        },
			        
			        Previouspositions: {
			        
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
			          
			        },SalaryFirst: {
			          required: true,
			      
			          
			        },LandlineNumber: {
			         
			          minlength:10,
			          maxlength:20
			          
			        },Regulations: {
			         
			         required:true,
			         
			          
			        }


			      },
			      errorElement: "span",
			      errorClass: "help-inline-error",
			    });

		  });

            	$(function() {
				    $('#Cooperative_row').hide(); 
				      $('#Honorary_row').hide(); 
				    $('#Memberships').change(function(){
				        if($('#Memberships').val() == 'Honorary Membership') {
				            $('#Honorary_row').show();
				            $('#Cooperative_row').hide();
				            $('#CooperativeMembershipAmount').val('');
				             
				        } else if($('#Memberships').val() == 'Cooperative Membership') {
				            	$('#Cooperative_row').show();
				            	$('#Honorary_row').hide();
				            	$('#HonoraryMembershipAmount').val('');
				             

					        } 
					    });
				});

            </script>
