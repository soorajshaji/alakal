<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <title>Alakal</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/jquery-selectric/selectric.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">

  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' />

  <style>
    
  </style>
</head>

<body onload="window.print()">
    <section class="section container" >
        <div class="section-body" style="margin-right: -20px">
              <div class="card author-box card-primary">
                <div class="card-body noPrint">
                  <div class="">
                    <div class="author-box-name align-center" style="text-transform: uppercase;font-size: 38px;">
                      <img height="150px" src="{{asset('assets/logo/logo.png')}}" alt="" srcset="">
                    </div> <br>
                    <div class="row" style="margin-top: 150px;margin-bottom:60px;">
                        <div class="col-md-4"><div class="incfont" style="color:black;">Name:- <span style="font-size: 24px">{{$customerDetails->name}}</span></div></div>
                        
                        
                    </div>
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
                    <br><br>
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
                  </div>
                </div>
              </div>
            </div>
    
            
    </section>



        <!-- General JS Scripts -->
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/bundles/cleave-js/dist/cleave.min.js')}}"></script>
  <script src="{{asset('assets/bundles/cleave-js/dist/addons/cleave-phone.us.js')}}"></script>
  <script src="{{asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
  <script src="{{asset('assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <!-- Page Specific JS File -->

    <!-- JS Libraies -->
    <script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Page Specific JS File -->
    <script src="{{asset('assets/js/page/datatables.js')}}"></script>
  <script src="{{asset('assets/js/page/forms-advanced-forms.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>