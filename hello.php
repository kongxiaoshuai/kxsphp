<?php

	echo 'hello world,github';
	list($msec,$sec)= microtime();
	echo round((float)$msec+(float)$sec),4);
	//update function start
	/**
	 * _getRunTime() is get current time
	 * @access return
	 * @return float return a float number
	 * */
	function _getRunTime(){
		list ($msec,$sec)=microtime();
		return round(((float)$msec+(float)$sec),4);
		
	}

?>
