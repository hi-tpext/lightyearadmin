<?php

namespace tpext\lightyearadmin\common;

use tpext\common\ExtLoader;
use tpext\common\Plugin as basePlugin;
use tpext\lightyearadmin\common\hooks\Setup;

class Plugin extends basePlugin
{
    protected $name = 'light.year.admin';

    protected $__root__ = __DIR__ . '/../../';

    protected $assets = 'assets';

    public function pluginInit($info = [])
    {
        ExtLoader::watch('module_init', Setup::class, '设置模板', false);

        return parent::pluginInit($info);
    }
}
