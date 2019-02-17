<?php
namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * 用户登录
     * @param  Request $request
     * @return [type]
     */
    public function login(Request $request) {

    }

    /**
     * 用户注册
     * @param  Request $request
     * @return [type]
     */
    public function signup(Request $request) {
        echo "string";die();
        // TODO + name email password校验
        // if ($request->isMethod('POST')) {
        //     $data = [];
        //     $data['name']        = $request->input('name');
        //     $data['password']    = bcrypt($request->input('password')); // TODO + 加密
        //     $data['email']       = $request->input('email');
        //     $data['icon']        = $this->getIcon($request->input('email'));
        //     $data['create_time'] = date('Y-m-d H:i:s');

        //     $id = User::createUser($data);
        //     if ($id) {
        //         // 重定向至首页
        //         return redirect()->action('Blog\BlogNavController@home');
        //     }
        // }
    }

    /**
     * 获取用户信息
     * @param  Request $request
     * @return [type]
     */
    public function getUser(Request $request) {
        $id = $request->input('id');
        $user = User::getUserById($id);

        return view('user.info', compact('user'));
    }

    /**
     * 生成用户默认头像
     * @param  [type]  $email
     * @param  integer $size
     * @return [type]
     */
    public function getIcon($email, $size = 100) {
        $hash = md5(strtolower($email));
        return 'http://www.gravatar.com/avatar'."/{$hash}"."/{$size}";
    }
}
