@extends('vendor.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="text-align: center;">
            <img src="{{ $user->icon }}" alt="icon" style="margin: 50px 0px 0px 0px">
            <h5>{{ $user->name }}</h5>
        </div>
    </div>
</div>
@endsection