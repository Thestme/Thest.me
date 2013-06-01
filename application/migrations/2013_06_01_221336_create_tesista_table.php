<?php

class Create_Tesista_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesista', function($table){
			$table->increments('id_tesista');
			$table->string('nom_completo',100);
			$table->string('mail',100);
			$table->string('password',100);
			$table->integer('edad');
			$table->integer('genero');
			$table->string('ciudad',100);
			$table->string('pais',100);
			$table->string('id_linkedin',100);
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
		Schema::drop('tesista');
	}
}