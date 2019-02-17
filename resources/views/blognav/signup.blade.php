@extends('vendor.main')
@section('title', '注册')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 150px">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="text-align: center;">注册账户</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{{action('Blog\UserController@signup')}}}">
                            <div class="form-group">
                                <label for="name">名称：</label>
                                <input type="text" class="form-control" placeholder="name" name="name">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">邮箱：</label>
                                <input type="text" class="form-control" placeholder="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="password">密码：</label>
                                <input type="password" class="form-control" placeholder="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">确认密码：</label>
                                <input type="password" class="form-control" placeholder="password" name="confirmation" >
                            </div>
                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection