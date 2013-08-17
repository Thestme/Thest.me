<?php

class Company extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'email' => 'required',
		'password' => 'required',
		'operating_since' => 'required',
		'country' => 'required',
		'city' => 'required'
	);
}