<?php
@include("../../class/connect.php");
if(!defined('InEmpireBak'))
{
	exit();
}
@include("config.php");
@include("../../class/config.php");
@include("../../class/db_sql.php");
@include("../../class/functions.php");
@include '../../'.LoadLang('f.php');
$editor=2;
$loginin=getcvar('bakusername');
$rnd=getcvar('bakrnd');
islogin($loginin,$rnd);
$link=db_connect();
$empire=new mysqlquery();
$mydbname=RepPostVar($_GET['mydbname']);
$mypath=$_GET['mypath'];
if(empty($mydbname)||empty($mypath))
{
	printerror("ErrorUrl","history.go(-1)");
}
//����
DoSetDbChar($b_dbchar);
$usql=$empire->query("use `$mydbname`");
?>