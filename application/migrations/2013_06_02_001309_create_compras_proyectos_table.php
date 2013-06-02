<?php

class Create_Compras_Proyectos_Table {    

	public function up()
    {
		Schema::create('compras_proyectos', function($table) {
			$table->increments('id');
			//$table->integer('empresa_id_empresa');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('compras_proyectos');

    }

}