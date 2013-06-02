<?php

class Create_Tesista_Has_Oferta_Proyecto_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesista_has_oferta_proyectos', function($table){
			$table->integer('tesista_id_tesista');
			$table->integer('oferta_proyecto_id_oferta');
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
		Schema::drop('tesista_has_oferta_proyectos');
	}

}