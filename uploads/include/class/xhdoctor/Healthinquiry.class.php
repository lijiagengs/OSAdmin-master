<?php
if (!defined('ACCESS')) {exit('Access denied.');}

class Healthinquiry extends XhdoctorBase
{
//class Sample extends Base {
	private static $table_name = 'hlh_message';

	private static $columns = 'id, title ,hlh_url ,jump_url ,content ,type ,create_time';

	public static function getTableName()
	{
		return self::$table_name;
	}

	public static function getHealthinquiry($start ='' ,$page_size='') {
                $limit ="";
		if($page_size){
			$limit =" limit $start,$page_size ";
		}
                $where = "where type = 1";
		$db = self::__instance();
		$sql = "select ".self::$columns." from ".self::getTableName()." $where $limit";
		$list = $db->query($sql)->fetchAll();
		if ($list) {
			return $list;
		}
		return array();		
	}
	public static function count($condition = '') {
		$db=self::__instance();
                $condition = array("type"=>"1");
		$num = $db->count ( self::getTableName(), $condition );
		return $num;
	}  
	public static function delHealthinquiry ( $id ){
		if (! $id || ! is_numeric ( $id )) {
			return false;
		}
		$db=self::__instance();
		$condition = array("id"=>$id);
		$result = $db->delete ( self::getTableName(), $condition );
		return $result;
	}       
	public static function addHealthinquiry($group_data) {
		if (! $group_data || ! is_array ( $group_data )) {
			return false;
		}
		$db=self::__instance();
		$id = $db->insert ( self::getTableName(), $group_data );
		return $id;
	}     
	public static function getHealthinquiryById($id) {
		if (! id || ! is_numeric ( $id )) {
			return false;
		}
		$db=self::__instance();
		$condition['id'] = $id;
		$list = $db->select ( self::getTableName(), self::$columns, $condition );
		if ($list) {
			return $list [0];
		}
		return array ();
	}
	public static function updateHealthinquiry($id,$update_data) {
		if (! $update_data || ! is_array ( $update_data )) {
			return false;
		}
		$db=self::__instance();
		$condition=array("id"=>$id);
		$id = $db->update ( self::getTableName(), $update_data,$condition );
		return $id;
	}          
}