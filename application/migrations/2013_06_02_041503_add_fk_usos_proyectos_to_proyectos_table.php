<?php

class Add_Fk_Usos_Proyectos_To_Proyectos_Table {    

	public function up()
    {
		Schema::table('usos_proyectos', function($table) 
		{
			$table->integer('proyecto_id_proyecto')->unsigned();
			$table->foreign('proyecto_id_proyecto')->
			references('id')->on('proyectos')->on_delete('restrict');

		});

    }    

	public function down()
    {
		Schema::table('usos_proyectos', function($table) {
			$table->drop_foreign('usos_proyectos_proyecto_id_proyecto_foreign');
			$table->drop_column('proyecto_id_proyecto');
			$table->drop_column(array());
	});

    }

}