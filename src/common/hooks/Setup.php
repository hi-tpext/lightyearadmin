<?php
namespace tpext\lightyearadmin\common\hooks;

use think\facade\Request;
use tpext\lightyearadmin\common\Plugin;

class Setup
{
    public function run($data = [])
    {
        //$module = $data[1];
        $module = Request::module();

        if ($module == 'admin') { //admin模块， 替换错误和跳转模板
            
        }
    }
}
