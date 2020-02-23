<?php

namespace tpext\lightyearadmin\common;

use tpext\common\Module as baseModule;

class Module extends baseModule
{
    protected $version = '1.0.1';

    protected $name = 'lightyear.admin';

    protected $title = 'lightyear模板样式';

    protected $description = '提供相关样式资源';

    protected $root = __DIR__ . '/../../';

    protected $assets = 'assets';
}