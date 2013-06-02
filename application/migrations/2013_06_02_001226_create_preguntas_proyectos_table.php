<?php

class Create_Preguntas_Proyectos_Table {    

	public function up()
    {
		Schema::create('preguntas_proyectos', function($table) {
			$table->increments('id');
			//$table->integer('proyecto_id_proyecto');
			$table->string('nom_preg');
			$table->string('nom_resp');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('preguntas_proyectos');

    }

}