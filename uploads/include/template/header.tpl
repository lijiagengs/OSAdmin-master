<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><{$page_title}> - <{$smarty.const.ADMIN_TITLE}> - Powered by OSAdmin!</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/assets/lib/bootstrap/css/bootstrap.css">  
    <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/assets/stylesheets_<{$user_info.template}>/theme.css">
    <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/assets/lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/assets/css/other.css">
	<link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/assets/css/jquery-ui.css" />

    <script src="<{$smarty.const.ADMIN_URL}>/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<{$smarty.const.ADMIN_URL}>/assets/lib/jquery.cookie.js" ></script>
	<script src="<{$smarty.const.ADMIN_URL}>/assets/lib/bootstrap/js/bootbox.min.js"></script>
	<script src="<{$smarty.const.ADMIN_URL}>/assets/lib/bootstrap/js/bootstrap-modal.js"></script>
	<script src="<{$smarty.const.ADMIN_URL}>/assets/js/other.js"></script>
	<script src="<{$smarty.const.ADMIN_URL}>/assets/js/jquery-ui.js"></script>
    <!--wysihtml5
    <script src="<{$smarty.const.ADMIN_URL}>/wysihtml5/js/wysihtml5-0.3.0.js" ></script>
    <script src="<{$smarty.const.ADMIN_URL}>/wysihtml5/js/jquery-1.7.2.min.js" ></script>
    <script src="<{$smarty.const.ADMIN_URL}>/wysihtml5/js/bootstrap.min.js" ></script>
    <script src="<{$smarty.const.ADMIN_URL}>/wysihtml5/js/bootstrap-wysihtml5.js" ></script>-->
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
    <!--wysihtml5
   <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/wysihtml5/css/bootstrap-wysihtml5.css" />
   <!--<link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/wysihtml5/css/bootstrap.min.css" />
   <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/wysihtml5/css/wysiwyg-color.css" />-->
   <!--ueditor-->
   <link rel="stylesheet" href="<{$smarty.const.ADMIN_URL}>/ueditor/themes/default/css/ueditor.css" />

   <script src="<{$smarty.const.ADMIN_URL}>/ueditor/ueditor.config.js"></script>
   <script src="<{$smarty.const.ADMIN_URL}>/ueditor/ueditor.all.js"></script>
   <script src="<{$smarty.const.ADMIN_URL}>/ueditor/lang/zh-cn/zh-cn.js"></script>
   <script type="text/javascript">
    $(function(){
        window.ue = UE.getEditor('container', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar: ['undo redo | bold italic underline ']
        });
    });
</script>
  </head>
