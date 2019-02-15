<?php

function get_setting()
{

		$IP = '192.168.1.223';
		$KEY = '123456';

		$data = array(
			'ip'=>$IP,
			'password'=>$KEY
		);

		return (object) $data;
}


