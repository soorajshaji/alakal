@extends('layouts.homeLayouts')

@section('formIndex')


<style>
  .popup_style{
    margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10000;
  width: 80%;
  display: none;


  }


</style>
    <section class="section" >
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Customer List</h4>
                <div class="button"> <a href="{{url('formIndex')}}" class="btn btn-primary ">Add</a></div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>M.ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($customerDetails as $key => $items)
                      <tr>
                        <td>
                          {{$key+=1}}
                        </td>
                        <td>{{$items->mid}}</td>
                        <td>{{$items->name}}</td>
                        <td>{{$items->gender}}</td>
                        <td>{{$items->age}}</td>
                        <td>{{$items->phone_number}}</td>
                        <td>                    
                          <div class="dropdown">
                          <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                          <div class="dropdown-menu">
                            <a onclick="togglePopup({{$items->id}})" class="dropdown-item has-icon"><i class="fas fa-plus"></i> Add</a>
                            <a href="{{url('formFullView/'.$items->id)}}" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="{{url('formListEdit/'.$items->id)}}" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('formListDelete/'.$items->id)}}" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                              Delete</a>
                          </div>
                        </div>
                      </td>
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


        <div class="popup_style">
          <form id="frm">
            <div class="card">
              <div class="card-header">
                <h4>Add Contribution</h4>
              </div>
              <div class="card-body">
                <div class="row" style="margin-top:40px;">
                  <div class="col-md-2">
                    <label>Contribution</label>
                    <div class="form-group">
                        <select name="month_year" class="input-group-text" id="month_year">
                          <option value="Monthly"> Monthly</option>
                          <option value="Yearly"> Yearly</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                              <label>Start Date</label>
                              <input  name="start_date" id="start_date" type="" class="form-control datepicker">
                          </div>
                          <div class="col-md-6">
                              <label>End Date</label>
                              <input name="end_date" id="end_date" type="text" class="form-control datepicker">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                       <div class="row">
                          <div class="col-md-6">
                             <label>Pay Date</label>
                             <input  name="pay_date" id="pay_date" type="" class="form-control datepicker">
                          </div>
                       </div>
                    </div>
                 </div>
        
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label>Donation</label>
                        <input name="donation" id="donation" type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                          Enter Donation Amount
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-0">
                        <label>Discription</label>
                        <textarea name="description" id="description" class="form-control" ></textarea>
                        
                    </div>
                  </div>
              </div>
  
              <div class="card-footer text-right">
                <input type="submit" name="submit" id="pro_button" class="btn btn-primary">
              </div>
              </div>
            </div>
          </form>
        </div>
    </section>




    @push('body-scripts')
    @once
    <script type="text/javascript">
        // Function to show and hide the popup
        var time_id;
        function togglePopup(id) {
            $(".popup_style").toggle();
            time_id = id;
        }
    
        jQuery('#frm').submit(function(e){
          e.preventDefault();
          var id = time_id;
          var url = '{{ route("deleteRecord", ":id") }}';
          url = url.replace(':id', id);

          jQuery.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          jQuery.ajax({
            url: url,
            data :jQuery('#frm').serialize(),
            type : 'POST',
            success :function(result){
              window.location.href = "/"
            }

          })
          
        })


        $('#pro_button').click(function(){
         
         if ($('#donation').val() != "") {
            $("#pro_button").addClass("btn-progress");
         } else {

         }
         
      });
    </script>
    @endonce
    @endpush
    
@endsection