<?php /* Smarty version Smarty-3.1.15, created on 2016-07-21 16:45:46
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\simple_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2611057908bba61b0b1-51700673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392f18c47cd906f8c6ccaaa7b6523d1e9e3634e2' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\simple_header.tpl',
      1 => 1458323676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2611057908bba61b0b1-51700673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57908bba660890_72022394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57908bba660890_72022394')) {function content_57908bba660890_72022394($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo @constant('ADMIN_TITLE');?>
</title>
		<meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/css/bootstrap.css">

		<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/stylesheets_<?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?><?php echo $_smarty_tpl->tpl_vars['user_info']->value['template'];?>
<?php } else { ?>default<?php }?>/theme.css">
		<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/lib/font-awesome/css/font-awesome.css">

		<script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/js/other.js" ></script>

		<!-- Demo page code -->

		<style type="text/css">
				#line-chart {
						height:300px;
						width:800px;
						margin: 0px auto;
						margin-top: 1em;
				}
				.brand { font-family: georgia, serif; }
				.brand .first {
						color: #ccc;
						font-style: italic;
				}
				.brand .second {
						color: #fff;
						font-weight: bold;
				}
		</style>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
<?php }} ?>
