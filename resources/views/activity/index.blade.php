@extends('layouts.boot')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Activities</div>

                <div class="card-body">
                    

                    
                    <table id='dataTable' class='data-tables' border style='width:100%' >
                        <thead>
                            <tr> 
                                 <!--<td>ID</td>-->
                                <td>Type</td>
                                <td>Username</td>
                                <td>Details</td>
                               <td>Time</td>
                               <td>Relative</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            @foreach($semuaStudent as $d)
                              <tr> 
                                     <!--<td>{{ $d->id }}</td> -->
                                <td>{{ $d->type }}</td>
                                 <td>{{ $d->username }}</td>
                                 <td>{{ $d->details }}</td>
                                  <td>{{ $d->created_at }}</td>
                                 
                                   <td>
                                       
                                       @if(number_format(Carbon\Carbon::now()->diffInHours($d-> created_at),1,'.','') < 24)
                                       {{  number_format(Carbon\Carbon::now()->diffInHours($d-> created_at),1,'.','') }} Hour(s)  ago
                                     @else  
                                  {{  number_format(Carbon\Carbon::now()->diffInHours($d-> created_at)/24,1,'.','') }} Day(s)  ago  @endif
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
