<?php

class Create_Oferta_Proyecto_Table {    

	public function up()
    {
		Schema::create('ofertas_proyectos', function($table) {
			$table->increments('id');
			$table->integer('empresa_id_empresa');
			$table->string('nom_oferta');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('ofertas_proyectos');

    }

}