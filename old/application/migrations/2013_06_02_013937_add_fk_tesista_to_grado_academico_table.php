<?php

class Add_Fk_Tesista_To_Grado_Academico_Table {    

	public function up()
    {
		Schema::table('tesistas', function($table) 
		{
			$table->integer('grado_academico_id_grado')->unsigned();
			$table->foreign('grado_academico_id_grado')->references('id')->
			on('grados_academicos')->on_delete('restrict');
		});

    }    

	public function down()
    {
		Schema::table('tesistas', function($table) {
			$table->drop_foreign('tesistas_grado_academico_id_grado_foreign');
			$table->drop_column('grado_academico_id_grado');
			$table->drop_column(array());
	});

    }

}