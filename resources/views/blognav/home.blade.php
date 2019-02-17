@extends('vendor.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="jumbotron" style="text-align: center; margin-top: 50px; margin-bottom: 0px">
                <h1>Hello Laravel</h1>
                <p class="lead">
                    你现在所看到的是 <a href="#">Laravel 入门教程</a> 的示例项目主页。
                </p>
                <p>一切，将从这里开始。</p>
                <p> 
                    <a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">现在注册</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection