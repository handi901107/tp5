<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->view->fetch('');
    }
    public function hello()
    {
        return $this->view->fetch('');
    }
}
