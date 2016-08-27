<?php

require ('../include/init.inc.php');
$title = $desc = '';
extract ( $_POST, EXTR_IF_EXISTS );
if (Common::isPost ()) {
      if($_FILES['file']['name'] !== ''){
          $img_url = Img::getImg_url($_FILES['file']);
          if($img_url){
          $jump_url = '';
          $create_time =  date('Y-m-d',time());
          $input_data = array('title'=> $title ,'hlh_url' => $img_url ,'jump_url' => $jump_url ,'content' => $desc ,'type' => '2','create_time' => $create_time);
          $medicalnews_id = Medicalnews::addMedicalnews ( $input_data );
          $Medicalnews = array('添加医疗新闻文章');
          if($medicalnews_id){
                SysLog::addLog ( UserSession::getUserName(), 'ADD', 'Medical_news' ,$medicalnews_id, json_encode($Medicalnews) );
                Common::exitWithSuccess ('医疗新闻添加完成','xhdoctor/medical_news.php');          
          }  
          }
       }else{
          OSAdmin::alert("error",ErrorMessage::IMG_MUST);
       }
}
Template::assign("_POST" ,$_POST);
Template::display ( 'xhdoctor/medical_news_add.tpl' );
