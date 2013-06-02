<?php

class Create_Empresas_Table {    

	public function up()
    {
		Schema::create('empresas', function($table) {
			$table->increments('id');
			$table->string('nom_empresa');
			$table->integer('tipo_empresa');
			$table->string('rugro');
			$table->string('mail_empresa');
			$table->string('pass_empresa');
			$table->integer('tipo_plan');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('empresas');

    }

}