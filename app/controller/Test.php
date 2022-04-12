<?php
declare (strict_types = 1);

namespace app\controller;

use app\BaseController;
use think\facade\View;
use think\Request;

class Test extends BaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return 'test123123123132';
    }

    public function getView(){
        // return $this->fetch();
        // return view('');
        $name='liou';
        return view('testview',compact('name'));
    }

    public function getView2(){
        // return $this->fetch();
        // return view('');
        return View::fetch();
    }
}
