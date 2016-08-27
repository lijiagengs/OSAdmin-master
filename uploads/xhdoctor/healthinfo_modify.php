<?php

require ('../include/init.inc.php');
$id = $title = $name = $desc = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );
Common::checkParam($id);
$healthinfo = Healthinfo::getHealthinfoById($id);
if(empty($healthinfo)){
	Common::exitWithError('健康知识不存在',"xhdoctor/healthinfo.php");
}
if (Common::isPost ()) {	
	if($title =="" || $desc =="" ||$name =="" ){	 
		OSAdmin::alert("error",ErrorMessage::NEED_PARAM);
                return false;
	}
        $create_time =  date('Y-m-d',time());
        $Healthinfo = array('修改健康信息文章');
        if($_FILES['file']['name'] !== ''){
            $img_url = Img::getImg_url($_FILES['file']);
            if($img_url){
                $update_data = array ('title' => $title,'name'=>$name , 'hlh_url' => $img_url , 'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
                $result = Healthinfo::updateHealthinfo( $id,$update_data );
                if($result>=0){
                 SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Healthinfo' ,$id, json_encode($Healthinfo) );
                 Common::exitWithSuccess ('健康知识修改完成','xhdoctor/healthinfo.php');          
                }  
            }
        }else{
            $update_data = array ('title' => $title, 'name'=>$name ,'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
            $result = Healthinfo::updateHealthinfo( $id,$update_data );
            if($result>=0){
                SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Healthinfo' ,$id, json_encode($Healthinfo) );
                Common::exitWithSuccess ('健康知识修改完成','xhdoctor/healthinfo.php');          
            }  
        }
}
Template::assign ( 'healthinfo', $healthinfo );
Template::display ( 'xhdoctor/healthinfo_modify.tpl' );
