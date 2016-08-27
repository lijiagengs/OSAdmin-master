<?php

require ('../include/init.inc.php');
$title = $desc = '';
extract ( $_POST, EXTR_IF_EXISTS );
if (Common::isPost ()) {
      echo $desc;
      if($_FILES['file']['name'] !== ''){
          $img_url = Img::getImg_url($_FILES['file']);
          if($img_url){
          $jump_url = '';
          $create_time =  date('Y-m-d',time());
          $input_data = array('title'=> $title ,'hlh_url' => $img_url ,'jump_url' => $jump_url ,'content' => $desc ,'type' => '1','create_time' => $create_time);
          $healthinquiry_id = Healthinquiry::addHealthinquiry ( $input_data );
          $Healthinquiry = array('添加健康资讯文章');
          if($healthinquiry_id){
                SysLog::addLog ( UserSession::getUserName(), 'ADD', 'Healthinquiry' ,$healthinquiry_id, json_encode($Healthinquiry) );
                Common::exitWithSuccess ('健康资讯添加完成','xhdoctor/healthinquiry.php');          
          }  
          }
       }else{
          OSAdmin::alert("error",ErrorMessage::IMG_MUST);
       }
}
Template::assign("_POST" ,$_POST);
Template::display ( 'xhdoctor/healthinquiry_add.tpl' );
