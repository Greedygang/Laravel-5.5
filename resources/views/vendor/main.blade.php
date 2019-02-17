<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Blog')</title>
        <!-- 引入bootstrap css样式 -->
        <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- 引入bootstrap -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <!-- END HEAD -->
    <!-- BGEIN BODY -->
    <body>
        <!-- 导航 -->
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('about') }}">关于</a></li>
                            <li><a href="{{ route('help') }}">帮助</a></li>
                            <li><a href="javascript:void(0);" onclick="Login()">登录 注册</a></li>
                        </ul>                            
                    </div>
                </div>
            </div>
        </div>
        @section('content')
        <!-- 页面内容 -->
        @show
        <!-- 页面底部 -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <footer class="footer">
                        <small class="slogon">
                            <img class="navbar-brand" src="https://iocaffcdn.phphub.org/uploads/images/201612/12/1/iq7WQc2iuW.png?imageView2/1/w/34/h/34">
                            <a style="display:block; padding: 18px 15px 15px 15px" href="https://laravel-china.org/courses">
                                刻意练习，每日精进
                            </a>
                        </small>                       
                    </footer>                 
                </div>
            </div>
        </div>
    </body>
    <!-- END BODY -->

    <!-- 用户登录模态框 -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" style="text-align: center;">用户登录</h3>
                </div>
                <form class="form-horizontal form-label-left" method="post" action="{{ action('Blog\UserController@login') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">用户名</label>
                            <input type="text" name="username" placeholder="username" size="32">
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-4 col-xs-12">密码</label>
                            <input type="password" name="password" placeholder="password" size="32">
                        </div>
                        <div class="form-group" style="text-align: center;">
                            <button type="button" class="btn btn-primary" onclick="Signup()">注册账户</button>
                            <button type="submit" class="btn btn-primary">确认登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // 登录模态框
        function Login() {
            $('#loginModal').modal('show');
        }
        
        // 跳转注册页面
        function Signup() {
            window.location.href="/signup";
        }
    </script>
</html>