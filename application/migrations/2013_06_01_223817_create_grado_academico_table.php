<?php

class Create_Grado_Academico_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grado_academico', function($table){
			$table->increments('id_grado');
			$table->string('nom_grado',100);
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
		Schema::drop('grado_academico');
	}

}