<?php

class Company_size extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'employee_quantity' => 'required'
	);
}