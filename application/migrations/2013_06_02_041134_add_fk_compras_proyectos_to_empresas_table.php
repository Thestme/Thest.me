<?php

class Add_Fk_Compras_Proyectos_To_Empresas_Table {    

	public function up()
    {
		Schema::table('compras_proyectos', function($table) 
		{
			$table->integer('empresa_id_empresa')->unsigned();
			$table->foreign('empresa_id_empresa')->
			references('id')->on('empresas')->on_delete('restrict');
		});

    }    

	public function down()
    {
		Schema::table('compras_proyectos', function($table) {
			$table->drop_foreign('compras_proyectos_empresa_id_empresa_foreign');
			$table->drop_column('empresa_id_empresa');
			$table->drop_column(array());
		});

    }

}