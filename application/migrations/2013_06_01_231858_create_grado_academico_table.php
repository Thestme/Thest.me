<?php

class Create_Grado_Academico_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grados_academicos', function($table){
			$table->increments('id');
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
		Schema::drop('grados_academicos');
	}

}