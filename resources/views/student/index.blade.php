@extends('layouts.boot')

@section('content')


<div class="container">
   
        <div class="col-lg-12">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">Student Management Panel</div>

                <div class="card-body">
                    
                    
                    @if ( (Auth::user()->level) == 9)
                    <br>
                    <a href='{{env('absolute')}}/Create/Student'>
                    <button class='btn btn-warning'>
                        Create Student
                    </button>
                        </a>
                    @endif
                    
                     <div class="table-responsive">
                    <table class="table table-bordered block" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                                <th>Name</th>
                                <th>Phone/
                               Email</th>
                                <th>IC</th>
                                <th>Action</th>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($semuaStudent as $d)
                              <tr> 
                                     <!--<td>{{ $d->id }}</td> -->
                                <td>{{ $d->name }}</td>
                                 <td>{{ $d->phone }}<br>{{ $d->email }}</td>
                                <td>{{ $d->national_id }}</td>
                                <td>  
                                    
                                    @if ( (Auth::user()->level) == 9)
                <a href='{{env('absolute')}}/Edit/Student/{{ $d->id }}'> <button class='btn btn-warning'>Edit </button> </a> 
                  <a href='{{env('absolute')}}/Student/Report/{{ $d->id }}'> <button class='btn btn-success'>Print </button> </a>
                    <a href='{{env('absolute')}}/MarksAkhlak_1/{{ $d->id }}'> <button class='btn btn-warning'>Marks - Akhlak_1 </button> </a>  
                   <a href='{{env('absolute')}}/G2/Student/{{ $d->id }}'> <button class='btn btn-info'>KEPIMPINAN </button> </a>
                   <a href='{{env('absolute')}}/G3/Student/{{ $d->id }}'> <button class='btn btn-info'>SAHSIAH </button> </a>
                   <a href='{{env('absolute')}}/G4/Student/{{ $d->id }}'> <button class='btn btn-info'>KEMAHIRAN </button> </a><br>
                  <a href='{{env('absolute')}}/G1/Student/{{ $d->id }}'> <button class='btn btn-info'>ILMU </button> </a>  
                   @endif
                       
                  @if ( (Auth::user()->level) == 1)
                         <a href='{{env('absolute')}}/G1/Student/{{ $d->id }}'> <button class='btn btn-info'>ILMU </button> </a>  
                         <a href='{{env('absolute')}}/MarksAkhlak_1/{{ $d->id }}'> <button class='btn btn-warning'>Marks - Akhlak_1 </button> </a>     
                         @endif
                            
                            @if ( (Auth::user()->level) == 2)
                           <a href='{{env('absolute')}}/G2/Student/{{ $d->id }}'> <button class='btn btn-info'>KEPIMPINAN </button> </a>
                           <a href='{{env('absolute')}}/G3/Student/{{ $d->id }}'> <button class='btn btn-info'>SAHSIAH </button> </a>
                   <a href='{{env('absolute')}}/G4/Student/{{ $d->id }}'> <button class='btn btn-info'>KEMAHIRAN </button> </a><br>
                           @endif
                            
                               @if ( (Auth::user()->level) == 3)
                          <a href='{{env('absolute')}}/G3/Student/{{ $d->id }}'> <button class='btn btn-info'>SAHSIAH </button> </a>
                            @endif
                             
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

@endsection
