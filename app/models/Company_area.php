<?php

class Company_area extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'enabled' => 'required'
	);
}