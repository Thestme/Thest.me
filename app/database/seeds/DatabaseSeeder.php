<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('GendersTableSeeder');
		$this->call('Student_typesTableSeeder');
		$this->call('UniversitiesTableSeeder');
		$this->call('StudentsTableSeeder');
		$this->call('Student_projectsTableSeeder');
		$this->call('ProjectsTableSeeder');
		$this->call('Project_statesTableSeeder');
		$this->call('Project_application_areasTableSeeder');
		$this->call('AreasTableSeeder');
		$this->call('CompaniesTableSeeder');
		$this->call('Company_sizesTableSeeder');
		$this->call('Company_areasTableSeeder');
		$this->call('Project_selectionsTableSeeder');
	}

}