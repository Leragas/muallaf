@extends('layouts.boot')

@section('content')
<div class="container">
    <form action="{{env('absolute')}}/UploadXL3" enctype="multipart/form-data" method="post">
        @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Excel 3</button>
            </form>
    
</div>
@endsection
