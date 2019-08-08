<?php

namespace App\Http\Controllers\Read;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //首页
    public function index()
    {
       // $res = DB::table('read_turbot')->where('turbot_show',1)->get();
      $res =  $this->turbot();
        return view('index/index',['res'=>$res]);
    }
    //轮播图数据
    public function turbot()
    {
        $res = DB::table('read_turbot')->where('turbot_show',1)->get();
        return $res;

    }

    //登录视图
    public function login()
    {
      return view('index/login');
    }
}
