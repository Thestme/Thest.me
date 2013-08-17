<?php

class Student_projectsController extends BaseController {

	/**
	 * Student_project Repository
	 *
	 * @var Student_project
	 */
	protected $student_project;

	public function __construct(Student_project $student_project)
	{
		$this->student_project = $student_project;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$student_projects = $this->student_project->all();

		return View::make('student_projects.index', compact('student_projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('student_projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Student_project::$rules);

		if ($validation->passes())
		{
			$this->student_project->create($input);

			return Redirect::route('student_projects.index');
		}

		return Redirect::route('student_projects.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student_project = $this->student_project->findOrFail($id);

		return View::make('student_projects.show', compact('student_project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student_project = $this->student_project->find($id);

		if (is_null($student_project))
		{
			return Redirect::route('student_projects.index');
		}

		return View::make('student_projects.edit', compact('student_project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Student_project::$rules);

		if ($validation->passes())
		{
			$student_project = $this->student_project->find($id);
			$student_project->update($input);

			return Redirect::route('student_projects.show', $id);
		}

		return Redirect::route('student_projects.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->student_project->find($id)->delete();

		return Redirect::route('student_projects.index');
	}

}