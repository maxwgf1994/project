<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页
    public function index()
    {
        return view('admin.index',['title'=>'U袋网后台首页']);
    }
    //后台会员列表
    public function show()
    {
        return view('admin.member-list',['title'=>'会员列表']);
    }
}
