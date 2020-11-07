@extends('layouts.boot')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student Management Panel</div>

                <div class="card-body">
                    
                    
                    @if ( (Auth::user()->level) == 9)
                    <br>
                    <a href='{{env('absolute')}}/Create/Student'>
                    <button class='btn btn-warning'>
                        Create Student
                    </button>
                        </a>
                    @endif
                    
                    
                    <table id='dataTable' class='data-tables' border style='width:100%' >
                        <thead>
                            <tr> 
                                 <!--<td>ID</td>-->
                                <td>Name</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>IC</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($semuaStudent as $d)
                              <tr> 
                                     <!--<td>{{ $d->id }}</td> -->
                                <td>{{ $d->name }}</td>
                                 <td>{{ $d->phone }}</td>
                                 <td>{{ $d->email }}</td>
                                <td>{{ $d->national_id }}</td>
                                <td>  
                                    
                                    @if ( (Auth::user()->level) == 9)
                <a href='{{env('absolute')}}/Edit/Student/{{ $d->id }}'> <button class='btn btn-warning'>Edit </button> </a> 
                  <a href='{{env('absolute')}}/Student/Report/{{ $d->id }}'> <button class='btn btn-success'>Print </button> </a>
                    <a href='{{env('absolute')}}/G1/Student/{{ $d->id }}'> <button class='btn btn-info'>ILMU </button> </a>  
                   <a href='{{env('absolute')}}/G2/Student/{{ $d->id }}'> <button class='btn btn-info'>KEPIMPINAN </button> </a>
                   <a href='{{env('absolute')}}/G3/Student/{{ $d->id }}'> <button class='btn btn-info'>SAHSIAH </button> </a>
                   <a href='{{env('absolute')}}/G4/Student/{{ $d->id }}'> <button class='btn btn-info'>KEMAHIRAN </button> </a><br>
                  @endif
                       
                  @if ( (Auth::user()->level) == 1)
                         <a href='{{env('absolute')}}/G1/Student/{{ $d->id }}'> <button class='btn btn-info'>ILMU </button> </a>  
                            @endif
                            
                            @if ( (Auth::user()->level) == 2)
                           <a href='{{env('absolute')}}/G2/Student/{{ $d->id }}'> <button class='btn btn-info'>KEPIMPINAN </button> </a>
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
