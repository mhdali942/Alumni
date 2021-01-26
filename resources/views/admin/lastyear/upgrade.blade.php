<x-admin-master>

    @section('content')


   



 <p><h5>Last Year students Memebership Plan </h5></p>
        <hr>

									<!-- Start Alumni Form -->
								
									
								<form id="lastyear" method="POST" action="{{route('lastyear.upgradePlan',$lastyears->id)}}">
										@csrf
											   @method('PATCH')

					<div class="container">
															
				<br><br><br>

	
 								
									 <div class="form-group col-md-4">
										     
										      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{$lastyears->fullname}}"  hidden="true">
									 </div>

									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="nationality" name="MobileNumber" placeholder="MobileNumber" value="{{$lastyears->MobileNumber}}"  hidden="true">
									 </div>


									<div class="form-group col-md-4">
										    
										      <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$lastyears->email}}" hidden="true">
									 </div>

								 </div>

									
												<div class="form-row mb-3 text-center">

											<div class="form-group col-md-3">
													

											</div>

											<div class="form-group col-md-6">
													 
													      <div class="alert alert-info" role="alert">
														         	  <div class="form-row" style="text-align: center;">

																	     <div class="form-group col-md-12">

																	     	<input class="form-check-input" type="radio" name="paymenttype" id="payment" value="self payment" {{ ($lastyears->paymenttype == "self payment") ? "checked" : "" }}>
							  													<label class="form-check-label" for="inlineRadio1"> Monthly Auto Payment / دفع تلقائي  </label>

																	    
																	    </div>


																	  


																	 </div>
															
															</div>       
													 <div class="card mb-4 box-shadow">
													 	 

												          <div class="card-header" style="background-color: #cd7f32;">
												            <h4 class="my-0 font-weight-normal" style="color: #ffff;" >Bronze Mermbership / العضوية  البرونزية</h4>
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
															  <input class="form-check-input" type="radio" name="Membershiptype"  value="Bronze" checked="true" 
															   >
															  <label class="form-check-label" for="inlineRadio1">Select</label>
																</div>
												          </div>
												        </div>

											</div>

											<div class="form-group col-md-3">
														
											</div>

									</div>	
	 					
																		
					
									

									<div class="row">

											<div class="col text-center mb-4">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Pay Here / ادفع هنا </button>
										</div>

											</div>
										
									</div>

							</form>




				<!--Bronze Modal  -->
				<div class="modal fade" id="bronzeModal" tabindex="-1" role="dialog" aria-labelledby="bronzeModal" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document"> 
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="bronzeModal"> Benefits / مميزات العضوية </h5>
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



  
    @endsection

   

   @section('scripts')
        <!-- Page level plugins -->
         

          

</x-admin-master>


<script>
    


    	$(document).ready(function(){
		$('.bronzeModal').modal();
	});



</script>