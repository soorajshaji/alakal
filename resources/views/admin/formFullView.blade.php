@extends('layouts.homeLayouts') @section('formIndex') <style>
  .incfont {
    font-size: 14px;
  }

  .incfont1 {
    font-size: 17px;
  }
</style>
<section class="section">
  <div class="section-body">
    <div class="card author-box card-primary">
      <div class="card-body noPrint">
        <div class="">
          <div class="author-box-name align-center" style="text-transform: uppercase;font-size: 38px;">
            <a href="#">{{$customerDetails->name}}</a>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="incfont" style="color:black;">M.ID:- <span class="incfont1">{{$customerDetails->mid}}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class=" incfont" style="color:black;">Age:- <span class="incfont1">{{$customerDetails->age}}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incfont" style="color:black;">Gender:- <span class="incfont1">{{$customerDetails->gender}}</span>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="incfont" style="color:black;">Mobile Number:- <span class="incfont1">{{$customerDetails->phone_number}}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incfont" style="color:black;">Whatsapp:- <span class="incfont1">{{$customerDetails->whatsapp_number}}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="incfont" style="color:black;">Email Id:- <span class="incfont1">{{$customerDetails->email}}</span>
              </div>
            </div>
          </div>
          <?php
          $customer=json_decode($customerDetails->family_members); 
          if($customer[0] != null){
            echo '<div class="author-box-name align-center" style="font-size: 22px;margin-top:80px;margin-bottom:20px;">
            <a href="#">Family Members</a>
          </div>';
          }

          ?>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                  <div class="col-md-12 align-center">
                    <span class="incfont1"> 
                      <?php
                              $customer=json_decode($customerDetails->family_members); 

                              if ($customer[0] != null) {
                                echo ' 
																				<div class="table-responsive">';
                              echo '
																					<table class="table table-striped" >';
                              echo '<thead>
                                            <tr>
                                              <th>Name</th>
                                              <th>Relation</th>
                                              <th>Phone Number</th>
                                              <th>Email</th>
                                              <th>Alakal Member</th>
                                            </tr>
                                          </thead>';
                              echo "
																						<tbody>";
                              for ($j=0; $j < count($customer[0]); $j++) { 
                                echo "
																							<tr>";
                                for ($i=0; $i < 5; $i++) { 
                                  
                                  echo "
																								<td>"; 
                                  if ($customer[$i][$j] != null) {
                                    echo $customer[$i][$j];
                                  }
                                  else {
                                    echo "N/A";
                                  };  
                                  echo "
																									</td>";
                                  
                                  //
                                }
                                echo "
																											</tr>";
                            }
                              echo "
																												</tbody>";
                              echo "
																											</table>";
                              echo "
																										</div>";
                              }

                              ?> 
                      </span>
                  </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                  <div class="col-md-12 align-center">
                    <span class="incfont1"> 
                      <?php
                              $customer=json_decode($customerDetails->contribution); 

                              for ($j=0; $j < count($customer[0]); $j++) { 
                                echo '<div class="author-box-name align-center" style="font-size: 22px;margin-top:80px;margin-bottom:20px;">
                                  <a href="#">'; echo $customer[0][$j]; echo' Contribution</a>
                                </div>';
                                echo ' 
                                        <div class="table-responsive">';
                              echo '
                                          <table class="table table-striped" >';
                              echo '<thead>
                                            <tr>
                                              <th>Date</th>
                                              <th>Pay Date</th>
                                              <th>Donation Amount</th>
                                            </tr>
                                          </thead>';
                                  echo "
                                            <tbody>";
                              
                                  echo " <tr>";
                                
                                
                                  echo "<td>"; 
                                  
                                    echo $customer[1][$j]; echo '&nbsp;  to  &nbsp;'; echo $customer[2][$j];
                                    
                                  echo "</td>";

                                  echo "<td>"; 
                                  
                                  echo $customer[3][$j];
                                  
                                echo "</td>";

                                echo "<td>"; 
                                  
                                  echo $customer[4][$j];
                                  
                                echo "</td>";
                                  
                                  //
                                
                                echo "</tr>";
                            
                              echo "</tbody>";
                              echo "</table>";
                              echo " </div>";

                              if ($customer[5][$j] != null) {
                                echo '<div class="incfont" style="color:black;">Description:- <span class="incfont1">'; echo $customer[5][$j]; echo'</span>
                                  </div>';
                              }
                              }

                              ?> 
                      </span>
                  </div>
                </div>
            </div>
          </div>
          @php
          /*$customer=json_decode($customerDetails->contribution); 
              for ($i=0; $i < count($customer[0]); $i++) { 
                
                  echo '<div class="author-box-name align-center" style="font-size: 22px;margin-top:80px;margin-bottom:20px;">
                    <a href="#">'; echo $customer[0][$i]; echo' Contribution</a>
                  </div>';

                  echo '<div class="row" style="margin-bottom: 40px;">
                    <div class="col-md-4">
                      <div class="incfont" style="color:black;">Date:- <span class="incfont1">';echo $customer[1][$i]; echo '&nbsp;  to  &nbsp;'; echo $customer[2][$i]; echo'</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="incfont" style="color:black;">Pay Date:- <span class="incfont1">'; echo $customer[3][$i]; echo'</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="incfont" style="color:black;">Donation Amount:- <span class="incfont1">'; echo $customer[4][$i]; echo'</span>
                      </div>
                    </div>

                    
                  </div>';
                  
                  if ($customer[5][$i] != null) {
                    echo '<div class="incfont" style="color:black;">Description:- <span class="incfont1">'; echo $customer[5][$i]; echo'</span>
                      </div>';
                  }


                
              }*/
          @endphp

          <br>
          <br>
          <div class="author-box-name align-center" style="font-size: 22px;margin-top:80px;margin-bottom:20px;">
            <a href="#">Parish</a>
          </div>
          <br><br>

          <div class="row" style="margin-bottom: 80px;">
            <div class="col-md-6">
              <div class="incfont" style="color:black;">Parish in India:- <span class="incfont1">{{$customerDetails->details}}</span>
              </div>

            </div>
            <div class="col-md-6">
              <div class="incfont" style="color:black;">Parish in Uk:- <span class="incfont1">{{$customerDetails->details2}}</span>
              </div>
              
            </div>
          
          </div>
          <div class="float-right mt-sm-0 mt-3">
            <!--<button onclick="window.print();" class="noPrint">
                        Print Me
                        </button>-->
            <a href="{{url('formprint/'.$customerDetails->id)}}" class="btn btn-warning">print</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> @endsection