@extends('layouts.homeLayouts')

@section('formIndex')

<style>
    .right {
  position: absolute;
  right: 0px;
  width: 300px;
  padding: 10px;
}
</style>

<div class="card">
    <form class="needs-validation" action="{{url('formListUpdate/'.$customerDetails->id)}}" novalidate="" method="POST" enctype="multipart/form-data" >
    @csrf
      <div class="card-header">
        <h4>Customer Details</h4>
        <div class="input-group right">
            <label>M.ID No</label>
                <input value="{{$customerDetails->mid}}" name="mid" type="text" class="form-control" required="">
                
           
        </div>
      </div>
      <div class="card-body">

         

        <div class="row" style="margin-top:40px;">
            <div class="col-md-6">
                <label>Your Name</label>
                <div class="input-group">
                                <select name="name_prefix" class="input-group-text" id="inputGroupSelect05">
                                    <option value="{{$first = strtok($customerDetails->name, '.')}}.">{{$first = strtok($customerDetails->name, '.')}}</option>
                                    <option value="Mr."> Mr.</option>
                                    <option value="Mrs."> Mrs.</option>
                                    <option value="Miss."> Miss.</option>
                                    <option value="Ms."> Ms.</option>
                                    <option value="Dr."> Dr.</option>
                                  </select>
                                  <input value="{{str_replace(array('Mr.','Mrs.','Miss.','Ms.','Dr.'), '', $customerDetails->name)}}" name="name" type="text" class="form-control" required="">
                                  <div class="invalid-feedback">
                                    What's your name?
                                  </div>
                   
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Your Age</label>
                        <input value="{{$customerDetails->age}}" name="age" type="text" class="form-control" required="">
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
                      <input value="{{$customerDetails->whatsapp_number}}" name="whatsapp_number" type="text" class="form-control phone-number" required="">
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

         <div class="align-center" style="margin-top:40px;margin-bottom:40px;">
          <label style="color:black; font-size:18px;" class="justify-center">Contribution</label>
        </div>

        
        <div class="row">
            <div class="col-md-3">
                <label>Contribution</label>
                <div class="form-group">
                    
                                <select name="month_year" class="input-group-text" id="inputGroupSelect05">
                                  <option value="{{$customerDetails->month_year}}"> {{$customerDetails->month_year}}</option>
                                  <option value="Monthly"> Monthly</option>
                                    <option value="Yearly"> Yearly</option>
                                  </select>
                                 

                    
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <div class="row">
                     <div class="col-md-6">
                         <label>Start Date</label>
                         <input value="{{$customerDetails->start_date}}"  name="start_date" type="text" class="form-control">
                     </div>
                     <div class="col-md-6">
                         <label>End Date</label>
                         <input value="{{$customerDetails->end_date}}" name="end_date" type="text" class="form-control">
                     </div>
                 </div>
              </div>
             </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>Donation</label>
                        <input value="{{$customerDetails->donation}}" name="donation" type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                            Enter Donation Amount
                        </div>
                   
                </div>

            </div>
            <div class="col-md-6">
              <div class="form-group mb-0">
                 <label>Discription</label>
                 <textarea name="description" class="form-control" required="">{{$customerDetails->description}}</textarea>
                 <div class="invalid-feedback">
                    Enter details
                 </div>
              </div>
           </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-0">
                    <label>PArish Name</label>
                    <textarea name="details" class="form-control" required="">{{$customerDetails->details}}</textarea>
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
        <button class="btn btn-primary">Submit</button>
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
               
               $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input required="" name="family_name[]" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
               a = a+1;
           }
       });
       //Once add button is clicked

       for(var i =0;i<z;i++){
              
              $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input name="family_name[]" value="'+customer[0][i]+'" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" value="'+customer[1][i]+'" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input value="'+customer[2][i]+'" name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input value="'+customer[3][i]+'" name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"><option value="'+customer[4][i]+'"> '+customer[4][i]+'</option> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
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
   });
</script>
@endonce
@endpush
@endsection