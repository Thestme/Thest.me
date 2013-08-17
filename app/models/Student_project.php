<?php

class Student_project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required'
	);
}