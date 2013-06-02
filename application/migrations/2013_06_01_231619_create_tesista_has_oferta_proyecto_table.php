<?php

class Create_Tesista_Has_Oferta_Proyecto_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesistas_has_ofertas_proyectos', function($table){
			//$table->integer('tesista_id_tesista');
			//$table->integer('oferta_proyecto_id_oferta');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tesistas_has_ofertas_proyectos');
	}

}