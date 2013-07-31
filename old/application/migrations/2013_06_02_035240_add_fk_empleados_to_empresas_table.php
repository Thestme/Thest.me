<?php

class Add_Fk_Empleados_To_Empresas_Table {    

	public function up()
    {
		Schema::table('empleados', function($table) 
		{
			$table->integer('empresa_id_empresa')->unsigned();
			$table->foreign('empresa_id_empresa')->
			references('id')->on('empresas')->on_delete('restrict');

		});

    }    

	public function down()
    {
		Schema::table('empleados', function($table) {
			$table->drop_foreign('empleados_empresa_id_empresa_foreign');
			$table->drop_column('empresa_id_empresa');
			$table->drop_column(array());
	});

    }

}