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
                
                SAHSIAH_KEBERSIHAN
                    <input id="SAHSIAH_KEBERSIHAN"
                           type="text"
                           class="form-control{{ $errors->has('SAHSIAH_KEBERSIHAN') ? ' is-invalid' : '' }}"
                           name="SAHSIAH_KEBERSIHAN"
                           value="{{ old('SAHSIAH_KEBERSIHAN')  ?? $student->SAHSIAH_KEBERSIHAN}}"
                           autocomplete="title" autofocus>
                    
                       SAHSIAH_BERSOSIAL
                    <input id="SAHSIAH_BERSOSIAL"
                           type="text"
                           class="form-control{{ $errors->has('SAHSIAH_BERSOSIAL') ? ' is-invalid' : '' }}"
                           name="SAHSIAH_BERSOSIAL"
                           value="{{ old('SAHSIAH_BERSOSIAL')  ?? $student->SAHSIAH_BERSOSIAL}}"
                           autocomplete="title" autofocus>
                    
                       SAHSIAH_BERMINDA_POSITIVE
                    <input id="SAHSIAH_BERMINDA_POSITIVE"
                           type="text"
                           class="form-control{{ $errors->has('SAHSIAH_BERMINDA_POSITIVE') ? ' is-invalid' : '' }}"
                           name="SAHSIAH_BERMINDA_POSITIVE"
                           value="{{ old('SAHSIAH_BERMINDA_POSITIVE')  ?? $student->SAHSIAH_BERMINDA_POSITIVE}}"
                           autocomplete="title" autofocus>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
