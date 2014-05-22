<?php

class Wrapper extends CApplicationComponent {
	public static $instance;
	
	public function init() {
		require_once(__DIR__ . '/Java.inc');
		
		parent::init();
		
		self::$instance = $this;
	}
	
	public function java($name) {
		return java($name);
	}
	
	public function javaInspect($object) {
		return java_inspect($object);
	}
	
	public function javaInstanceOf($object, $class) {
		return java_instanceof($object, $class);	
	}
	
	public function javaServerName() {
		return java_server_name();
	}
	
	public function javaSession() {
		return java_session(func_get_args());	
	}
	
	public function getInstance() {
		return self::$instance;
	}
}
