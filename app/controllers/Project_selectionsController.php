<?php

class Project_selectionsController extends BaseController {

	/**
	 * Project_selection Repository
	 *
	 * @var Project_selection
	 */
	protected $project_selection;

	public function __construct(Project_selection $project_selection)
	{
		$this->project_selection = $project_selection;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$project_selections = $this->project_selection->all();

		return View::make('project_selections.index', compact('project_selections'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('project_selections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Project_selection::$rules);

		if ($validation->passes())
		{
			$this->project_selection->create($input);

			return Redirect::route('project_selections.index');
		}

		return Redirect::route('project_selections.create')
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
		$project_selection = $this->project_selection->findOrFail($id);

		return View::make('project_selections.show', compact('project_selection'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project_selection = $this->project_selection->find($id);

		if (is_null($project_selection))
		{
			return Redirect::route('project_selections.index');
		}

		return View::make('project_selections.edit', compact('project_selection'));
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
		$validation = Validator::make($input, Project_selection::$rules);

		if ($validation->passes())
		{
			$project_selection = $this->project_selection->find($id);
			$project_selection->update($input);

			return Redirect::route('project_selections.show', $id);
		}

		return Redirect::route('project_selections.edit', $id)
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
		$this->project_selection->find($id)->delete();

		return Redirect::route('project_selections.index');
	}

}