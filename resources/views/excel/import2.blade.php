@extends('layouts.boot')

@section('content')
<div class="container">
    <form action="{{env('absolute')}}/UploadXL2" enctype="multipart/form-data" method="post">
        @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Excel 2</button>
            </form>
    
</div>
@endsection
