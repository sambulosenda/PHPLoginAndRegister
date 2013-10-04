<?php
class View {
	public static $instance = null;

	public static function show($view = null, $variables = array()) {
		if($view) {

			if(!empty($variables)) {
				foreach($variables as $name => $value) {
					$$name = $value;
				}
			}

			require 'views/' . $view . '.php';
		}
	}
}