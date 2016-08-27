<?php /* Smarty version Smarty-3.1.15, created on 2016-07-21 16:45:46
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35157908bba6d2337-21707981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35711d666ea3fdfe9363bc54fab16a3f18428a34' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\footer.tpl',
      1 => 1458323676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35157908bba6d2337-21707981',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57908bba6dc149_00313310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57908bba6dc149_00313310')) {function content_57908bba6dc149_00313310($_smarty_tpl) {?>					<footer>
                        <hr>
                        <p class="pull-right">A <a href="http://osadmin.org/" target="_blank">Basic Backstage Management System for China Only.</a> by <a href="http://weibo.com/osadmin" target="_blank">SomewhereYu</a>. 安卓应用【<a href="http://app.herobig.com" target="_blank">短信卫士</a>】</p>
                        <p>&copy; 2013 <a href="http://osadmin.org" target="_blank">OSAdmin</a></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap.js"></script>

<!-- 捷径的提示 -->

		<script type="text/javascript">	
			alertDismiss("alert-success", 3);
			alertDismiss("alert-info", 10);

			listenShortCut("icon-plus");
			listenShortCut("icon-minus");

			doSidebar();
		</script>
	</body>
</html>
<?php }} ?>
