<?php

require ('../include/init.inc.php');
$title = $desc = $name = '';
extract ( $_POST, EXTR_IF_EXISTS );
if (Common::isPost ()){
      if($_FILES['file']['name'] !== ''){
          $img_url = Img::getImg_url($_FILES['file']);
          if($img_url){
          $jump_url = '';
          $create_time =  date('Y-m-d',time());
          $input_data = array('title'=> $title ,'name'=>$name ,'hlh_url' => $img_url ,'jump_url' => $jump_url ,'content' => $desc ,'type' => '0','create_time' => $create_time);
          $healthinfo_id = Healthinfo::addHealthinfo ( $input_data );
          $Healthinfo = array('添加健康信息文章');
          if($healthinfo_id){
                SysLog::addLog ( UserSession::getUserName(), 'ADD', 'Healthinfo' ,$healthinfo_id, json_encode($Healthinfo) );
                Common::exitWithSuccess ('健康知识添加完成','xhdoctor/healthinfo.php');          
          }  
          }
       }else{
          OSAdmin::alert("error",ErrorMessage::IMG_MUST);
       }
}
Template::assign("_POST" ,$_POST);
Template::display ( 'xhdoctor/healthinfo_add.tpl' );

