<?php

class Project_state extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);
}