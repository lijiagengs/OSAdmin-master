<?php

require ('../include/init.inc.php');
$id = $method = $page_no = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );

if ($method == 'del' && ! empty ( $id )) {
		$result = Healthinfo::delHealthinfo ( $id );
                $Healthinfo = array('删除健康信息文章');
		if ($result) {
			SysLog::addLog ( UserSession::getUserName(), 'DELETE',  'Healthinfo' ,$id ,json_encode($Healthinfo) );
			Common::exitWithSuccess ( '已删除','xhdoctor/healthinfo.php' );
		}else{
			OSAdmin::alert("error");
		}
	}
//START 数据库查询及分页数据
$page_size = PAGE_SIZE;
$page_no=$page_no<1?1:$page_no;
$row_count = Healthinfo::count ();
$total_page=$row_count%$page_size==0?$row_count/$page_size:ceil($row_count/$page_size);
$total_page=$total_page<1?1:$total_page;
$page_no=$page_no>($total_page)?($total_page):$page_no;
$start = ($page_no - 1) * $page_size;
$healthinfo = Healthinfo::getHealthinfo($start , $page_size);
$page_html=Pagination::showPager("healthinfo.php",$page_no,$page_size,$row_count);
//追加操作的确认层
$confirm_html = OSAdmin::renderJsConfirm("icon-pause,icon-play,icon-remove");

// 设置模板变量
Template::assign ( 'osadmin_action_confirm' , $confirm_html);
Template::assign ( 'page_no', $page_no );
Template::assign ( 'page_html', $page_html );
Template::assign('healthinfo',$healthinfo);
//引用模板文件
Template::display ( 'xhdoctor/healthinfo.tpl' );
?>
