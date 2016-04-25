<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2014 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|
+---------------------------------------------------------------------------
*/

if (! file_exists(dirname(__FILE__) . '/system/config/database.php') AND ! file_exists(dirname(__FILE__) . '/system/config/install.lock.php') AND !defined('SAE_TMP_PATH'))
{
	header('Location: ./install/');
	exit;
}
// do 301
$map_array = array(
	'385' => 51, 
	'214' => 42, 
	'381' => 52, 
	'62' => 32, 
	'418' => 53, 
	'349' => 55, 
	'345' => 50, 
	'315' => 49, 
	'300' => 48, 
	'245' => 43, 
	'135' => 40, 
	'427' => 56, 
	'355' => 57, 
	'390' => 58, 
	'406' => 59, 
	'239' => 41, 
	'35' => 35, 
	'129' => 37, 
	'87' => 34, 
	'302' => 45, 
	'384' => 60, 
	'435' => 61, 
	'268' => 44, 
	'303' => 47, 
	'379' => 62, 
	'92' => 33, 
	'31' => 1, 
	'116' => 36, 
	'180' => 39, 
	'419' => 63, 
	'415' => 64, 
	'409' => 65, 
	'443' => 68, 
);


$curr_url = $_SERVER["PHP_SELF"];

$pattern='/^\/index.php\/(.*)\.html$/is';
preg_match($pattern, $curr_url, $result);

if ($result && count($result) == 2 && $result[1]) {
	$real_id = $map_array[$result[1] . ''];
	if ($real_id) {
		header ( 'HTTP/1.1 301 Moved Permanently' ); // 发出301头部
		header ( 'Location: http://50vip.com/article/' . $real_id ); // 跳转到我的新域名地址
	}
	else {
		header ( 'HTTP/1.1 301 Moved Permanently' ); // 发出301头部
		header ( 'Location: http://50vip.com/' ); // 跳转到我的新域名地址
	}
}
include('system/system.php');

AWS_APP::run();