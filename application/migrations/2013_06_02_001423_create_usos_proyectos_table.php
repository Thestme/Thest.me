<?php

class Create_Usos_Proyectos_Table {    

	public function up()
    {
		Schema::create('usos_proyectos', function($table) {
			$table->increments('id');
			$table->integer('proyecto_id_proyecto');
			$table->string('nom_uso');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('usos_proyectos');

    }

}