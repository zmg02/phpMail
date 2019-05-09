<?php
/**
 * Created by PhpStorm.
 * User: xym
 * Date: 2018/7/27
 * Time: 下午3:29
 */
require_once("./functions.php");
$flag = sendMail('xxxxx@yahoo.com','xym在线通知','hello,lj');//ps填写要发送的邮箱地址
if($flag){
    echo "发送邮件成功！";
}else{
    echo "发送邮件失败！";
}
?>