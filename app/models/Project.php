<?php

class Project extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'objectives' => 'required',
		'due_date' => 'required',
		'deployable' => 'required'
	);
}