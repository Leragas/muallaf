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
                
                KEMAHIRAN_KEBERSIHAN
                    <input id="KEMAHIRAN_KEBERSIHAN"
                           type="text"
                           class="form-control{{ $errors->has('KEMAHIRAN_KEBERSIHAN') ? ' is-invalid' : '' }}"
                           name="KEMAHIRAN_KEBERSIHAN"
                           value="{{ old('KEMAHIRAN_KEBERSIHAN')  ?? $student->KEMAHIRAN_KEBERSIHAN}}"
                           autocomplete="title" autofocus>
                    
                       KEMAHIRAN_BERSOSIAL
                    <input id="KEMAHIRAN_BERSOSIAL"
                           type="text"
                           class="form-control{{ $errors->has('KEMAHIRAN_BERSOSIAL') ? ' is-invalid' : '' }}"
                           name="KEMAHIRAN_BERSOSIAL"
                           value="{{ old('KEMAHIRAN_BERSOSIAL')  ?? $student->KEMAHIRAN_BERSOSIAL}}"
                           autocomplete="title" autofocus>
                    
                       KEMAHIRAN_BERMINDA_POSITIVE
                    <input id="KEMAHIRAN_BERMINDA_POSITIVE"
                           type="text"
                           class="form-control{{ $errors->has('KEMAHIRAN_BERMINDA_POSITIVE') ? ' is-invalid' : '' }}"
                           name="KEMAHIRAN_BERMINDA_POSITIVE"
                           value="{{ old('KEMAHIRAN_BERMINDA_POSITIVE')  ?? $student->KEMAHIRAN_BERMINDA_POSITIVE}}"
                           autocomplete="title" autofocus>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
