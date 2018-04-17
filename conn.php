<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/4/17
 * Time: 10:56
 */
$link = @mysqli_connect("localhost","root","")or die('连接失败');
@mysqli_select_db($link,'advice')or die('选择失败');
mysqli_set_charset($link,'utf8');