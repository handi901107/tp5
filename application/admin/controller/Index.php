<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 13:51
 */
namespace app\admin\controller;

class Index extends common
{
    public function login()
    {
        return $this->view->fetch('');

    }
}
