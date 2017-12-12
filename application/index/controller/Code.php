<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 15:06
 */
namespace app\index\controller;
class code
{
    public function _empty($name)
    {
        return $this->showCode($name);
    }
    protected function showCode($name)
    {
        return '邮政编码是' .$name;
    }
}