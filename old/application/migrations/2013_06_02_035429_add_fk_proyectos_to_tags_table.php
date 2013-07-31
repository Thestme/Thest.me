<?php

class Add_Fk_Proyectos_To_Tags_Table {    

	public function up()
    {
		Schema::table('proyectos', function($table) 
		{
			$table->integer('tag_id_tag')->unsigned();
			$table->foreign('tag_id_tag')->
			references('id')->on('tags')->on_delete('restrict');

		});

    }    

	public function down()
    {
		Schema::table('proyectos', function($table) {
			$table->drop_foreign('proyectos_tag_id_tag_foreign');
			$table->drop_column('tag_id_tag');
			$table->drop_column(array());
	});

    }

}