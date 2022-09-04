@extends('layouts.homeLayouts')

@section('formIndex')
    <section class="section">
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Customer List</h4>
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
    </section>
    
@endsection