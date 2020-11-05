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
                
                    <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">name</label>

                    <input id="name"
                           type="text"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name"
                           value="{{ old('name') ?? $student->name}}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
              <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label">phone</label>

                    <input id="phone"
                           type="text"
                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                           name="phone"
                           value="{{ old('phone')  ?? $student->phone }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
                
                
                        <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">email</label>

                    <input id="email"
                           type="text"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email"
                           value="{{ old('email')  ?? $student->email}}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
                
                    <div class="form-group row">
                    <label for="national_id" class="col-md-4 col-form-label">national_id</label>

                    <input id="national_id"
                           type="text"
                           class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}"
                           name="national_id"
                           value="{{ old('national_id')  ?? $student->national_id}}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('national_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('national_id') }}</strong>
                        </span>
                    @endif
                </div>

                

                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
