<?php

// 加载composer资源库
require_once('../resources/autoload.php');
// 初始化数据库配置
require_once('./lib/config.php');
// 加载自己项目资源库
require_once('./lib/fivestep.php');

// 新建整理后的存储表
fivestep::initable();

// 整理数据
fivestep::cleandata();