<?php

require ('../include/init.inc.php');
$id = $title = $desc = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );
Common::checkParam($id);
$healthinquiry = Healthinquiry::getHealthinquiryById($id);
if(empty($healthinquiry)){
	Common::exitWithError('健康资讯不存在',"xhdoctor/healthinquiry.php");
}
if (Common::isPost ()) {	
	if($title =="" || $desc =="" ){	 
		OSAdmin::alert("error",ErrorMessage::NEED_PARAM);
                return false;
	}
        $create_time =  date('Y-m-d',time());
        $Healthinquiry = array('修改健康资讯文章');
        if($_FILES['file']['name'] !== ''){
            $img_url = Img::getImg_url($_FILES['file']);
            if($img_url){
                $update_data = array ('title' => $title, 'hlh_url' => $img_url , 'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
                $result = Healthinquiry::updateHealthinquiry( $id,$update_data );
                if($result>=0){
                 SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Healthinquiry' ,$id, json_encode($Healthinfo) );
                 Common::exitWithSuccess ('健康资讯修改完成','xhdoctor/healthinquiry.php');          
                }  
            }
        }else{
            $update_data = array ('title' => $title, 'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
            $result = Healthinquiry::updateHealthinquiry( $id,$update_data );
            if($result>=0){
                SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Healthinfo' ,$id, json_encode($Healthinfo) );
                Common::exitWithSuccess ('健康资讯修改完成','xhdoctor/healthinquiry.php');          
            }  
        }
}
Template::assign ( 'healthinquiry', $healthinquiry );
Template::display ( 'xhdoctor/healthinquiry_modify.tpl' );
