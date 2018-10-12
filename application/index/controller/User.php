<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class User extends Controller{
    
    
    public function hello()
    {
    	$this->assign('name','dddd');
		return view('getlist');
    }
    
}