@extends('layouts.boot')

@section('content')
<div  align="right" class="container">
    <div class="row">
     
        <div class="col-12 pt-2" align="left">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 ">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">My Info</h3></div>
                                    <div class="card-body">
            
            <a href="{{env('absolute')}}/editMyProfile"><button class="btn btn-info">Edit Profile</button></a>
          
              
            <div class="h6"><br>Username : {{ $user->username }}</div>
            <div class=" font-weight-bold">Name :{{ $user->profile->name }}</div>
            <div class=" font-weight-bold" >phone: {{ $user->profile->phone }}</div>
            <div class="font-weight-bold" >email Position: {{ $user->profile->email }}</div>
            <div class=" font-weight-bold">national_id: {{ $user->profile->national_id }}</div> 
             </div> </div> </div>
       
           
            
        </div>
   
   
     
</div>
@endsection
