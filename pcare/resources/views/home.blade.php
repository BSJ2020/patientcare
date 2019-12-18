@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="jumbotron  mx-auto mt-5">
            <div class="container">
                <h1 class="display-5">Welcome  <span class="mx-2"></span>({{Auth::user()->name}})</h1>
                <div class="row">
                    <a href="" class="mx-auto h4">Continue to Dashboard</a>
                </div>
            </div>
        </div>
    </div>

@endsection
