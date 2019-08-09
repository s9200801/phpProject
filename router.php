<?php

class router{
	public function __construct(){
		$this->method=$_SERVER['REQUSET_METHOD'];
		$this->url=$_SERVER['PATH_INFO'];
	}

	public function add($route,$callback){
		$this->rules[$route]=$callback);
	}

	public function run(){
		$is_match=FALSE;
		foreach ($this->rules as $route=>$callback) {
			if('default'==$route)
				continue;

			if(preg_match($route,$this->url,$match)){
				$is_match=TRUE;
				$callback($match);
				break;
			}

			if(!$is_match)
				$this->rules['default']
		}
	}
}