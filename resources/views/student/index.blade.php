@extends('layouts.boot')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Welcome to e-DM5 Blast') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('HI THIS STUDETN IS NOT HERE') }}
                    <br>
                    <a href='/Create/Student'>
                    <button class='btn btn-warning'>
                        Create Student
                    </button>
                        </a>
                    
                    
                    <table id='dataTable' class='data-tables' border style='width:100%' >
                        <thead>
                            <tr> 
                                 <td>ID</td>
                                <td>Name</td>
                                <td>Phone</td>
                                <td>Email</td>
                                <td>ID</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($semuaStudent as $d)
                              <tr> 
                                   <td>{{ $d->id }}</td>
                                <td>{{ $d->name }}</td>
                                 <td>{{ $d->phone }}</td>
                                 <td>{{ $d->email }}</td>
                                <td>{{ $d->national_id }}</td>
                                <td>  
                <a href='/Edit/Student/{{ $d->id }}'> <button class='btn btn-warning'>Edit </button> </a>
                   <a href='/G1/Student/{{ $d->id }}'> <button class='btn btn-info'>G1 </button> </a>
                   <a href='/G2/Student/{{ $d->id }}'> <button class='btn btn-info'>G2 </button> </a>
                   <a href='/G3/Student/{{ $d->id }}'> <button class='btn btn-info'>G3 </button> </a>
                   <a href='/G4/Student/{{ $d->id }}'> <button class='btn btn-info'>G4 </button> </a>
                     <a href='/Student/Report/{{ $d->id }}'> <button class='btn btn-success'>Print </button> </a>
                                
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
