<?php
// 引入composer 包
require __DIR__.'/vendor/autoload.php';
// 引入 test sdk
use Kzc\Test2\TestSdk;
// 实例化 test sdk
$test_sdk = new TestSdk();
# 执行sdk 中的方法
$data = $test_sdk->setSdkType('php') # 设置 sdk 类型
->setSdkVersion('1.0.0') # 设置 sdk 版本
->getData(); # 获取 设置的数据

var_dump($data);