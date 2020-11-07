@extends('layouts.boot')

@section('content')
<div class="container">
    <form action="{{env('absolute')}}/Update/Student/{{$student->id}}" enctype="multipart/form-data" method="post">
        @csrf
         @method('PATCH')
         
         
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Student</h1>
                </div>
                
                         KEPIMPINAN_PENGURUSAN 
                    <input id="KEPIMPINAN_PENGURUSAN"
                           type="text"
                           class="form-control{{ $errors->has('KEPIMPINAN_PENGURUSAN') ? ' is-invalid' : '' }}"
                           name="KEPIMPINAN_PENGURUSAN"
                           value="{{ old('KEPIMPINAN_PENGURUSAN')  ?? $student->KEPIMPINAN_PENGURUSAN }}"
                           autocomplete="title" autofocus>
                    
                       KEPIMPINAN_SUKERELAWAN 
                    <input id="KEPIMPINAN_SUKERELAWAN"
                           type="text"
                           class="form-control{{ $errors->has('KEPIMPINAN_SUKERELAWAN') ? ' is-invalid' : '' }}"
                           name="KEPIMPINAN_SUKERELAWAN"
                           value="{{ old('ILMU_FEQAH')  ?? $student->KEPIMPINAN_SUKERELAWAN }}"
                           autocomplete="title" autofocus>
                    
                       KEPIMPINAN_JATIDIRI 
                    <input id="KEPIMPINAN_JATIDIRI"
                           type="text"
                           class="form-control{{ $errors->has('KEPIMPINAN_JATIDIRI') ? ' is-invalid' : '' }}"
                           name="KEPIMPINAN_JATIDIRI"
                           value="{{ old('KEPIMPINAN_JATIDIRI')  ?? $student->KEPIMPINAN_JATIDIRI }}"
                           autocomplete="title" autofocus>
                    
                    
                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
