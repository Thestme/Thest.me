<?php

class Student extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'born_at' => 'required',
		'password' => 'required',
		'country' => 'required',
		'city' => 'required'
	);
}