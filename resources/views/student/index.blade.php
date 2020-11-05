@extends('layouts.boot')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to e-DM5 Blast') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('HI THIS STUDETN IS NOT HERE') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
