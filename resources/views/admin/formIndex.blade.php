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
      margin-bottom: -80px;
      width: 100px;
   }
}


</style>


<div class="card">
   <form class="needs-validation" action="{{url('/saveCustomer')}}" novalidate="" method="POST" enctype="multipart/form-data" >
      @csrf
      <div class="card-header">
         <h4>Customer Details</h4>
         <div class="input-group right mobile_view_mid" >
            <label>M.ID No</label>
            <input name="mid" type="text" class="form-control" required="">
         </div>
      </div>
      <div class="card-body">
         <div class="row" style="margin-top: 80px;">
            <div class="col-md-6">
               <label>Your Name</label>
               <div class="input-group">
                  <!--<select name="name_prefix" class="input-group-text" id="inputGroupSelect05">
                     <option value="Mr."> Mr.</option>
                     <option value="Mrs."> Mrs.</option>
                     <option value="Miss"> Miss</option>
                     <option value="Ms."> Ms.</option>
                     <option value="Dr."> Dr.</option>
                  </select>-->
                  <input name="name" type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                     What's your name?
                  </div>
               </div>
            </div>
            <div class="col-md-2">
               <div class="form-group">
                  <label>Your Age</label>
                  <input name="age" type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                     What's your age?
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>Your Gender</label>
                  <select name="gender" class="input-group-text" id="inputGroupSelect05">
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
                     <input name="phone_number" type="text" class="form-control phone-number" required="">
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
                     <input name="whatsapp_number" type="text" class="form-control phone-number" required="">
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
                     <input name="email" type="text" class="form-control " required="">
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

         <div class="align-center" style="margin-top:40px;">
            <label style="color:black; font-size:18px;" class="justify-center">Contribution</label>
         </div>


         <div class="row" style="margin-top:40px;">
            <div class="col-md-3">
               <label>Contribution</label>
               <div class="form-group">
                  <select name="month_year" class="input-group-text" id="inputGroupSelect05">
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
                        <input  name="start_date" type="text" class="form-control datepicker">
                     </div>
                     <div class="col-md-6">
                        <label>End Date</label>
                        <input name="end_date" type="text" class="form-control datepicker">
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label>Donation</label>
                  <input name="donation" type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                     Enter Donation Amount
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group mb-0">
                  <label>Discription</label>
                  <textarea name="description" class="form-control" required=""></textarea>
                  <div class="invalid-feedback">
                     Enter details
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group mb-0">
                  <label>Parish in India</label>
                  <textarea name="details" class="form-control" required=""></textarea>
                  <div class="invalid-feedback">
                     Enter details
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group mb-0">
                  <label>Parish in Uk</label>
                  <textarea name="details2" class="form-control" required=""></textarea>
                  <div class="invalid-feedback">
                     Enter details
                  </div>
               </div>
            </div>
         </div>

        

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
       var a = 1;
       //var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
      //var fieldHTML = '<div id="'+x+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input name="family_name[]" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>';
        //Initial field counter is 1
       
       //Once add button is clicked
       $(addButton).click(function(){
           //Check maximum number of input fields
           if(x < maxField){ 
               x++; //Increment field counter
               
               $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input required="" name="family_name[]" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
               a = a+1;
           }
           /*for(var i =0;i<3;i++){
             $(wrapper).append('<div id="'+a+'" style="margin-top:20px;margin-bottom:20px;">  <div class="row" style="margin-top:40px;"> <div class="col-md-4"> <div class="form-group"> <label>Name</label> <div class="input-group"> <input name="family_name[]" type="text" class="form-control"> </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Relationship</label> <input name="family_relationship[]" type="text" class="form-control"> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Phone Number</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-phone"></i> </div> </div> <input name="family_number[]" type="text" class="form-control phone-number"> </div> </div> </div> </div> <div class="row"> <div class="col-md-4"> <div class="form-group"> <label>Email Id</label> <div class="input-group"> <div class="input-group-prepend"> <div class="input-group-text"> <i class="fas fa-envelope"></i> </div> </div> <input name="family_email[]" type="text" class="form-control" > </div> </div> </div> <div class="col-md-4"> <div class="form-group"> <label>Alakal Member</label> <select name="alakal_member[]" class="input-group-text" id="inputGroupSelect05"> <option value="Yes"> Yes</option> <option value="No"> No</option> </select> </div> </div> <div class="col-md-4" style="margin-top:35px;"> <div class="button remove_button"> <a href="javascript:void(0);" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a> </div> </div> </div></div>'); //Add field html
              
           }*/
       });
       var a =0;
       //Once remove button is clicked
       $(wrapper).on('click', '.remove_button', function(e){
           e.preventDefault();
           $(this).parent('div').parent('div').parent('div').remove(); //Remove field html
           x--; //Decrement field counter
           a--;
       });
   });
</script>
@endonce
@endpush


@endsection