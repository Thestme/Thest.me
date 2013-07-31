<?php

class Create_Tesista_Has_Proyecto_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesistas_has_proyectos', function($table){
			//$table->integer('tesista_id_tesista');
			//$table->integer('proyecto_id_proyecto');
			$table->integer('id_tesis');
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
		Schema::drop('tesistas_has_proyectos');
	}

}