<?php

class Create_Empleados_Table {    

	public function up()
    {
		Schema::create('empleados', function($table) {
			$table->increments('id');
			//$table->integer('empresa_id_empresa');
			$table->string('nom_empleado');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('empleados');

    }

}