@extends('layouts.homeLayouts')

@section('formIndex')

<style>
    .right {
  position: absolute;
  right: 0px;
  width: 300px;
  padding: 10px;
}
@media only screen and (max-width: 600px) {
      .mobile_view_mid{
      margin-top: 80px;
      width: 100px;
   }
}
</style>

<div class="card">
    <form class="needs-validation" action="{{url('formListUpdate/'.$customerDetails->id)}}" novalidate="" method="POST" enctype="multipart/form-data" >
    @csrf
      <div class="card-header">
        <h4>Customer Details</h4>
        <div class="input-group right mobile_view_mid">
            <label>M.ID No</label>
                <input value="{{$customerDetails->mid}}" name="mid" id="mid" type="text" class="form-control" required="">
                
           
        </div>
      </div>
      <div class="card-body">

         

        <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
                <label>Your Name</label>
                <div class="input-group">
                                <!--<select name="name_prefix" class="input-group-text" id="inputGroupSelect05">
                                    <option value="</option>
                                    <option value="Mr."> Mr.</option>
                                    <option value="Mrs."> Mrs.</option>
                                    <option value="Miss."> Miss.</option>
                                    <option value="Ms."> Ms.</option>
                                    <option value="Dr."> Dr.</option>
                                  </select>-->
                                  <input value="{{$customerDetails->name}}" name="name" id="name" type="text" class="form-control" required="">
                                  <div class="invalid-feedback">
                                    What's your name?
                                  </div>
                   
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Your Age</label>
                        <input value="{{$customerDetails->age}}" name="age" id="age" type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                            What's your age?
                          </div>
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Your Gender</label>
                                <select name="gender" class="input-group-text" id="inputGroupSelect05">
                                    <option value="{{$customerDetails->gender}}"> {{$customerDetails->gender}}</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                                    <option value="Others"> Others</option>
                                  </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input value="{{$customerDetails->phone_number}}" name="phone_number" type="text" class="form-control phone-number" required="">
                      <div class="invalid-feedback">
                        What's your number?
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Whatsapp Number</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <img src="https://img.icons8.com/material-outlined/24/000000/whatsapp--v1.png"/>
                        </div>
                      </div>
                      <input value="{{$customerDetails->whatsapp_number}}" name="whatsapp_number" type="text" class="form-control phone-number">
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label>Email Id</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                    <input value="{{$customerDetails->email}}" name="email" type="text" class="form-control phone-number" required="">
                    
                  </div>
                </div>
          </div>
        </div>

        

        <div class="align-center" style="margin-top:40px;">
          <label style="color:black; font-size:18px;" class="justify-center">Family Members</label>
          <div class="field_wrapper">
            <div class="button">
               <!--<input type="text" name="field_name[]" value=""/>-->
               <a href="javascript:void(0);" class="btn btn-icon btn-primary add_button"><i class="fas fa-plus"></i></a>
            </div>
         </div>
        </div>

        <?php $date = json_decode($customerDetails->contribution); 
        for ($i=0; $i < count($date[0]); $i++) { 
          
        
         echo '<div class="align-center" style="margin-top:40px;margin-bottom:40px;">
          <label style="color:black; font-size:18px;" class="justify-center">';echo$date[0][$i];echo' Contribution (';echo$date[1][$i];echo '&nbsp; to &nbsp; ';echo$date[2][$i];echo')</label>
        </div>';

        
        echo '<div class="row">
            <div class="col-md-2">
                <label>Contribution</label>
                <div class="form-group">
                    
                                <select name="month_year[]" class="input-group-text" id="inputGroupSelect05">
                                  <option value="';echo$date[0][$i];echo'"> ';echo$date[0][$i];echo'</option>
                                  <option value="';echo$date[0][$i];echo'"> ';echo$date[0][$i];echo'</option>
                                    <option value="';echo$date[0][$i];echo'"> ';echo$date[0][$i];echo'</option>
                                  </select>
                                 

                    
                </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                 <div class="row">
                     <div class="col-md-6">
                         <label>Start Date</label>
                         
                          
                         <input value="';echo $date[1][$i];echo'"  name="start_date[]" type="text" class="form-control datepicker">
                     </div>
                     <div class="col-md-6">
                         <label>End Date</label>
                         <input value="';echo $date[2][$i];echo'" name="end_date[]" type="text" class="form-control datepicker">
                     </div>
                 </div>
              </div>
            </div>
            <div class="col-md-5">
                    <div class="form-group">
                       <div class="row">
                          <div class="col-md-6">
                             <label>Pay Date</label>
                             <input value="';echo $date[3][$i];echo'"  name="pay_date[]" type="text"  class="form-control datepicker">
                          </div>
                       </div>
                    </div>
                 </div>
        </div>';
        echo '<div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>Donation</label>
                        <input value="';echo $date[4][$i];echo'" name="donation[]" id="donation" type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                            Enter Donation Amount
                        </div>
                   
                </div>

            </div>
            <div class="col-md-6">
              <div class="form-group mb-0">
                 <label>Discription</label>
                 <textarea name="description[]" id="description" class="form-control">';echo $date[5][$i];echo'</textarea>
                 <div class="invalid-feedback">
                    Enter details
                 </div>
              </div>
           </div>

        </div>';
        }
        ?>
        <br><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label>Parish in India</label>
                    <textarea name="details" id="details" class="form-control" required="">{{$customerDetails->details}}</textarea>
                    <div class="invalid-feedback">
                      Enter details
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-0">
                  <label>Parish in Uk</label>
                  <textarea name="details2" id="details2" class="form-control" required="">{{$customerDetails->details2}}</textarea>
                  <div class="invalid-feedback">
                    Enter details
                  </div>
                </div>
          </div>
            
        </div>
        <div class="row" style="margin-top: 40px;">

        </div>
        <?php
        
        
        $customer=json_decode($customerDetails->family_members); 
        $customer1=$customerDetails->family_members; 
        $length =0;
        if ($customer[0] != null) {
          $length = count($customer[0]);
        }
        ?>

        

      <div class="card-footer text-right">
        <input type="submit" name="Submit" id="pro_button" class="btn btn-primary">
      </div>
    </div>
    </form>
  </div>

@push('body-scripts')
@once
<script type="text/javascript">
   $(document).ready(function(){
       var maxField = 10; //Input fields increment limitation
       var addButton = $('.add_button'); //Add button selector
       var wrapper = $('.field_wrapper'); //Input field wrapper
       var x = 1;
       var z = <?php echo"$length"?>;
       var a = 1;
       const customer =  <?php echo "$customer1"?>;
       //var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
      //var fieldHTML = '<div id="'+x+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input name="family_name[]" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>';
        //Initial field counter is 1
        $(addButton).click(function(){
           //Check maximum number of input fields
           if(x < maxField){ 
               x++; //Increment field counter
               
               $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input required="" name="family_name[]" id="family_name" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" id="family_relationship" required="" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
               a = a+1;
           }
       });
       //Once add button is clicked

       for(var i =0;i<z;i++){

              for(var j=0;j<5;j++){
                if(customer[j][i] == ""){
                  customer[j][i] = "N/A";
                }
              }
              
              $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input name="family_name[]" id="family_name" value="'+customer[0][i]+'" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" id="family_relationship" value="'+customer[1][i]+'" type="text" class="form-control" required=""> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input value="'+customer[2][i]+'" name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input value="'+customer[3][i]+'" name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"><option value="'+customer[4][i]+'"> '+customer[4][i]+'</option> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
              x++;
              a = a+1;
           }
       //Once remove button is clicked
       $(wrapper).on('click', '.remove_button', function(e){
           e.preventDefault();
           $(this).parent('div').parent('div').parent('div').remove();
           x--; //Decrement field counter
           z--;
       });

       $('#pro_button').click(function(){
         if ($('#mid').val() != "" 
               && $('#name').val() != ""
               && $('#age').val() != "" 
               && $('#phone_number').val() != "" 
               && $('#donation').val() != ""
               && $('#details').val() != ""
               && $('#details2').val() != "") {
                  var h = 0;
                  var collection = document.getElementsByName("family_name[]");
                  var collection2 = document.getElementsByName("family_relationship[]");


                  for (var i = 0; i < collection.length; i++) {
            
                     if (collection[i].value == "") {
                        h++;
                     }
                  }
                  if (h == 0) {
                     for (var i = 0; i < collection2.length; i++) {
            
                        if (collection2[i].value == "") {
                           h++;
                        }
                     }
                  }
                  if (h == 0) {
                     $("#pro_button").addClass("btn-progress");
                  }
         } else {

         }
         
      });
   });
</script>
@endonce
@endpush
@endsection