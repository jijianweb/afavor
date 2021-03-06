﻿<?php
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    exit('require PHP > 5.4.0');
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

// 定义应用目录
define('APP_PATH', './Application/');


if (is_dir('.' . DIRECTORY_SEPARATOR . 'vendor')) {
    require './vendor/autoload.php';
}

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
