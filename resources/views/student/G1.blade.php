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
                
                ILMU_AKIDAH
                    <input id="ILMU_AKIDAH"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_AKIDAH') ? ' is-invalid' : '' }}"
                           name="ILMU_AKIDAH"
                           value="{{ old('ILMU_AKIDAH')  ?? $student->ILMU_AKIDAH}}"
                           autocomplete="title" autofocus>
                    
                       ILMU_FEQAH
                    <input id="ILMU_FEQAH"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_FEQAH') ? ' is-invalid' : '' }}"
                           name="ILMU_FEQAH"
                           value="{{ old('ILMU_FEQAH')  ?? $student->ILMU_FEQAH}}"
                           autocomplete="title" autofocus>
                    
                       ILMU_AKHLAK
                    <input id="ILMU_AKHLAK"
                           type="text"
                           class="form-control{{ $errors->has('ILMU_AKHLAK') ? ' is-invalid' : '' }}"
                           name="ILMU_AKHLAK"
                           value="{{ old('ILMU_AKHLAK')  ?? $student->ILMU_AKHLAK}}"
                           autocomplete="title" autofocus>
                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
