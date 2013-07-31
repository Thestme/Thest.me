<?php

class Create_Tags_Table {    

	public function up()
    {
		Schema::create('tags', function($table) {
			$table->increments('id');
			$table->string('nom_tag');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('tags');

    }

}