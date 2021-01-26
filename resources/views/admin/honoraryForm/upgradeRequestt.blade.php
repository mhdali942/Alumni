<x-admin-master>

    @section('content')


   




 <p><h5>Alumni Resquest Upgrade </h5></p>
        <hr>
<br><br><br><br><br>
        	<form  method="POST" action="{{route('honoraryForm.UpgradeRequest',$honoraries->id)}}">
										@csrf
											   @method('PATCH')


								<div class="form-row mb-3 text-center" id="platinum_row" >

									<div class="form-group col-md-4">
										
									</div>
									<div class="form-group col-md-4">
										
										
												 <div class="card mb-4 box-shadow">
									         	 <div class="card-header" style="background-color: #aba7a0; color: white;">

									           		 <h4 class="my-0 font-weight-normal">Cooperative Membership Resquest Upgrade / طلب تعديل العضوية </h4>
									          
									          	</div>

										          <div class="card-body" style="text-align: center;">

										          		<div class="row">
									          		<div class="col-md-12">
									          			
									          						

									          					<div class="form-row">

																	 <div class="form-group col-md-4">
																		     
																		      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" value="{{$honoraries->fullname}}"  hidden="true">
																	 </div>

																	<div class="form-group col-md-4">
																		    
																		      <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="MobileNumber" value="{{$honoraries->MobileNumber}}"  hidden="true">
																	 </div>


																	<div class="form-group col-md-4">
																		    
																		      <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$honoraries->email}}" hidden="true">
																	 </div>

																	 <div class="form-group col-md-4">
																		    
																		      <input type="text" class="form-control" id="Membershiptype" name="Membershiptype" placeholder="email" value="{{$honoraries->Membershiptype}}" hidden="true">
																	 </div>

																</div>




															<div class="form-row mb-4" >
															
																		    <label for="Memebership">Memberships </label>
																		   	<select class="form-control" id="upgrade_request" name="upgrade_request">
															                <option value="">Select</option>
															                <option id="Honorary" value="Honorary Membership">Honorary Membership</option>
															                 <option  id="Cooperative" value="Cooperative Membership">Cooperative Membership</option>
															                             	
															                             

															                </select>
																	
															 </div>

									          		</div>
									          			
									          	</div><br>
									          
									                     

									       


										        

									           		<hr/>

									           		
												          <div class="row">

											<div class="col text-center mb-3">
												<div class="form-group" style="text-align: center;">
											 <button type="submit" class="btn btn-primary">Send Request / إرسال طلب </button>
												</div>

											</div>
										
									  </div>
										        	 </div>
									       		 </div>
										</div>

										

										</div>

									

							</form>



							<br><br><br><br>


  
    @endsection

   

   @section('scripts')
        <!-- Page level plugins -->
         

          

</x-admin-master>


<script>
    


    


</script>