<?php
/**
 * ECSHOP 供货商文章页
 * ============================================================================
 * * 版权所有 2005-2012 商派网络，并保留所有权利。
 * ecshop.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: article.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$smarty->assign('ur_here', "通知文章");

/* 供货商文章 */
$article_id = intval($_REQUEST['id']);
$sql = "select * from ". $ecs->table('article') ." where article_id = '$article_id' ";
$article = $db->getRow($sql);

$smarty->assign('article',  $article);
$smarty->display('start_article.htm');

?>
