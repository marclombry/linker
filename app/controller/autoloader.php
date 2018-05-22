<?php
class Autoloader{
	/**
	*@param array $arr array at format ['','','']
	*
	*/
	public static function Autoload($arr){
		if(is_array($arr))
		{
			foreach($arr as $v)
			{
				require 'controller/'.$v.'.php';
			}
		}else{
			require 'controller/'.$arr.'.php';
		}
	}
	
}