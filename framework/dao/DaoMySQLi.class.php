<?php

namespace framework\dao;

use \MySQli;

final class DaoMySQLi{
	//基本配置
	private $_host;
	private $_user;
	private $_pwd;
	private $_dbname;
	private $_port;
	private $_charset;
	
	//单例对象
	private static $_instance;
	//mysqli连接对象
	private $_mySQLi;
	
	private function __construct(array $option){
		$this->_host = isset($option['host'])?$option['host']:'';
		$this->_user = isset($option['user'])?$option['user']:'';
		$this->_pwd = isset($option['pwd'])?$option['pwd']:'';
		$this->_dbname = isset($option['dbname'])?$option['dbname']:'';
		$this->_port = isset($option['port'])?$option['port']:'';
		$this->_charset = isset($option['charset'])?$option['charset']:'';
		
		$this->_mySQLi = new \MySQli($this->_host,$this->_user,$this->_pwd,$this->_dbname,$this->_port);
		$this->_mySQLi->set_charset($this->_charset);
		
		
	}
	
	//获取单例对象方法
	public static function getSingleton(array $option){
		if(!self::$_instance instanceof self){
			self::$_instance = new self($option);
		}
		return self::$_instance;
		
	}
	
	public function query($sql){
		$ret = $this->_mySQLi->query($sql);
		if($this->_mySQLi->errno){
		    echo '<br> 查询失败:'.$this->_mySQLi->error;
			return false;
		}else{
			$ret_arr = array();
			while($row = $ret->fetch_assoc()){
			    $ret_arr[] = $row;
			}
			
			return $ret_arr;
		}
		}
		
	public function update($sql){
		$ret = $this->_mySQLi->query($sql);
		if($ret){
		    echo '<br> 操作执行成功！';
			return true;
		}else{
		    echo '<br> 操作执行失败！'.$this->_mySQLi->error;
			return false;
		}
	}
		
	public function getLastId(){
		return $this->_mySQLi->insert_id;
	}
			
		
	public function fetchone($sql){
		$ret = $this->_mySQLi->query($sql);
		if($this->_mySQLi->errno){
		    echo '<br> 查询失败:'.$this->_mySQLi->error;
			return false;
		}else{
				return $ret->fetch_assoc();
		}
		}
	

}


?>