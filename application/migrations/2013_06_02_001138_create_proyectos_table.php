<?php

class Create_Proyectos_Table {    

	public function up()
    {
		Schema::create('proyectos', function($table) {
			$table->increments('id');
			$table->integer('tag_id_tag');
			$table->string('nom_proyecto');
			$table->integer('tipo');
			$table->integer('grado');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('proyectos');

    }

}