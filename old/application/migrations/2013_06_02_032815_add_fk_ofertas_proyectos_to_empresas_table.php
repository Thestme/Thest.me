<?php

class Add_Fk_Ofertas_Proyectos_To_Empresas_Table {    

	public function up()
    {
		Schema::table('ofertas_proyectos', function($table) 
		{
			$table->integer('empresa_id_empresa')->unsigned();
			$table->foreign('empresa_id_empresa')->
			references('id')->on('empresas')->on_delete('restrict');
		});

    }    

	public function down()
    {
		Schema::table('ofertas_proyectos', function($table) {
			$table->drop_column(array());
	});

    }

}