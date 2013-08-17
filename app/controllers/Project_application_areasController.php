<?php

class Project_application_areasController extends BaseController {

	/**
	 * Project_application_area Repository
	 *
	 * @var Project_application_area
	 */
	protected $project_application_area;

	public function __construct(Project_application_area $project_application_area)
	{
		$this->project_application_area = $project_application_area;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$project_application_areas = $this->project_application_area->all();

		return View::make('project_application_areas.index', compact('project_application_areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('project_application_areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Project_application_area::$rules);

		if ($validation->passes())
		{
			$this->project_application_area->create($input);

			return Redirect::route('project_application_areas.index');
		}

		return Redirect::route('project_application_areas.create')
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
		$project_application_area = $this->project_application_area->findOrFail($id);

		return View::make('project_application_areas.show', compact('project_application_area'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project_application_area = $this->project_application_area->find($id);

		if (is_null($project_application_area))
		{
			return Redirect::route('project_application_areas.index');
		}

		return View::make('project_application_areas.edit', compact('project_application_area'));
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
		$validation = Validator::make($input, Project_application_area::$rules);

		if ($validation->passes())
		{
			$project_application_area = $this->project_application_area->find($id);
			$project_application_area->update($input);

			return Redirect::route('project_application_areas.show', $id);
		}

		return Redirect::route('project_application_areas.edit', $id)
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
		$this->project_application_area->find($id)->delete();

		return Redirect::route('project_application_areas.index');
	}

}