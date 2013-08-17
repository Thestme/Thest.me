<?php

class Project_application_area extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required'
	);
}