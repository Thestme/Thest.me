<?php

class Project_selection extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required'
	);
}