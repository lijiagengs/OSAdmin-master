<?php

require ('../include/init.inc.php');
$id = $title = $desc = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );
Common::checkParam($id);
$medicalnews = Medicalnews::getMedicalnewsById($id);
if(empty($medicalnews)){
	Common::exitWithError('医疗新闻不存在',"xhdoctor/medical_news.php");
}
if (Common::isPost ()) {	
	if($title =="" || $desc =="" ){	 
		OSAdmin::alert("error",ErrorMessage::NEED_PARAM);
                return false;
	}
        $create_time =  date('Y-m-d',time());
        $Medical_news = array('修改医疗新闻');
        if($_FILES['file']['name'] !== ''){
            $img_url = Img::getImg_url($_FILES['file']);
            if($img_url){
                $update_data = array ('title' => $title, 'hlh_url' => $img_url , 'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
                $result = Medicalnews::updateMedicalnews( $id,$update_data );
                if($result>=0){
                 SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Medical_news' ,$id, json_encode($Medical_news) );
                 Common::exitWithSuccess ('医疗新闻修改完成','xhdoctor/medical_news.php');          
                }  
            }
        }else{
            $update_data = array ('title' => $title, 'content' => $desc ,'content' => $desc ,'create_time' => $create_time );
            $result = Medicalnews::updateMedicalnews( $id,$update_data );
            if($result>=0){
                SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Medical_news' ,$id, json_encode($Medical_news) );
                Common::exitWithSuccess ('医疗新闻修改完成','xhdoctor/medical_news.php');          
            }  
        }
}
Template::assign ( 'medicalnews', $medicalnews );
Template::display ( 'xhdoctor/medical_news_modify.tpl' );
