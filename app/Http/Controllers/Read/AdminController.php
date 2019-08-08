<?php

namespace App\Http\Controllers\Read;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
   public function admin()
   {
       return view('admin/index');
   }
    //小说添加展示
    public function add()
    {
       return view('admin/add');
    }
   //小说添加执行
    public function readadd(Request $request)
    {
        $post=$request->only(['read_name','read_show','read_host','username']);
        $read_name = $request['read_name'];
        $read_show = $request['read_show'];
        $read_host = $request['read_host'];
        //$read_file = $request['read_file'];
//        $post = [
//            'read_name'=>$read_name,
//            'read_show'=>$read_show,
//            'read_host'=>$read_host,
//        ];

        if($request->hasFile('read_file')){
        $post['read_file']=$this->upload($request,'read_file');
    }

        $res=DB::table('read_goods')->insert($post);
        if($res){
            echo"<script>alert('添加成功');</script>";
        }else{
            echo"<script>alert('添加失败');</script>";
        }

    }
    //轮播图
    public function turbot()
    {
       return view('admin/turbot');
    }
     //轮播图添加
    public function doturbot(Request $request)
    {
        $post=$request->only(['turbot_show']);
        if($request->hasFile('turbot_file')){
            $post['turbot_file']=$this->upload($request,'turbot_file');
        }
        $res=DB::table('read_turbot')->insert($post);
        dd($res);
    }

    //文件上传
    public function upload (Request $request,$name)
    {
        if ($request->file($name)->isValid()) {
            $photo = $request->file($name);
            $extension = $photo->extension();
            $store_result = $photo->storeAs(date('Ymd'),date('YmdHis').rand(100,999).'.'.$extension);
            return $store_result;
        }
        exit('文件上传过程出错');
    }

    //添加作品
    public function text()
    {
        return view('admin/text');
    }

    public function dotext(Request $request)
    {
       $username = $request->username;
        $content = $request->text;
        $read_name = $request->read_name;
     $arr = [
         'text'=>$content,
         'username'=>$username,
         'read_name'=>$read_name
     ];
        $res = DB::table('content')->insert($arr);
        if($res){
            echo  'ok';
        }else{
            echo  'no';
        }

    }
    //作者列表
    public function author()
    {
        $data = DB::table('author')->get();
        return view('admin/author',['data'=>$data]);
    }
    //小说列表
    public function readindex()
    {
        $data = DB::table('read_goods')->get();
      return view('admin/readindex',['data'=>$data]);
    }
    //更改审核状态
    public function readlook(Request $request)
    {
     $read_id = $request->read_id;
        $res = DB::table('read_goods')->where('read_id',$read_id)->update(['read_look'=>1]);
        if($res){
            $data = [
                'code'=>200,
                'message'=>'已审核',
                'data'=>[]
            ];
        }else{
            $data = [
                'code'=>100,
                'message'=>'审核失败',
                'data'=>[]
            ];
        }
        return json_encode($data,JSON_UNESCAPED_UNICODE);

    }
}
