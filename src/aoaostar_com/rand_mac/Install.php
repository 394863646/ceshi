<?php

namespace plugin\aoaostar_com\rand_mac;


use app\model\Plugin;

class Install implements \plugin\Install
{

    public function Install(Plugin $model)
    {
        $model->title = "随机MAC地址生成";
        $model->class = plugin_current_class_get(__NAMESPACE__);
        $model->alias = base_space_name(__NAMESPACE__);
        $model->desc = '花式生成MAC地址';
        $model->version = 'v1.0';
    }

    public function UnInstall(Plugin $model)
    {

    }
}
