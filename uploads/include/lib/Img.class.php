<?php

if(!defined('ACCESS')) {exit('Access denied.');}
/**
 * 处理图片上传的类
 */
class Img{
    /**
     * 获得图片上传后的地址
     * @param array $file file标签上传的原始格式
     */
    public static function getImg_url($file){
        $file_type = array('image/jpg','image/jpeg','image/png');
        if(!in_array(strtolower($file['type']), $file_type)){
            OSAdmin::alert("error",'请上传 jpg , jpeg ,png 格式的图片');
            return FALSE;
        }
        if($file['size'] / 1024 /1024 > 2){
            OSAdmin::alert("error",'上传图片的大小应该限制在 2M 以内');
            return FALSE;
        }
        if ($file["error"] > 0){
            OSAdmin::alert("error",'文件上传发生错误');
            return FALSE;
        }
        $newfile =  substr($file['name'], strrpos($file['name'], '.') );
        $ymd = date('Ymd');
	$upload_url .= '/'.$ymd;
	$upload_dir  = '../assets/images/healthinfo/'.$ymd;
       if(!file_exists($upload_dir))
	    {
              mkdir($upload_dir, 0777);		
	    }
	   //上传文件名称
	   $filena = time()+rand(1,9999).$newfile;
	   //上传文件路径
	   $save_url = 'http://xhdoctor.ci2.com/uploads/assets/images/healthinfo'.$upload_url.'/'.$filena;
	   $save_dir = $upload_dir.'/'.$filena;
	   if(file_exists($save_dir))
	     {
		OSAdmin::alert("error",'同名文件已存在');
                return FALSE;
	     }
	   //将上传的文件移动到指定的目录下
	   if(@move_uploaded_file($file['tmp_name'], $save_dir))
	     {
                return $save_url;
             }
    }  
}


