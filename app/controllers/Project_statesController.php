<?php

class Project_statesController extends BaseController {

	/**
	 * Project_state Repository
	 *
	 * @var Project_state
	 */
	protected $project_state;

	public function __construct(Project_state $project_state)
	{
		$this->project_state = $project_state;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$project_states = $this->project_state->all();

		return View::make('project_states.index', compact('project_states'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('project_states.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Project_state::$rules);

		if ($validation->passes())
		{
			$this->project_state->create($input);

			return Redirect::route('project_states.index');
		}

		return Redirect::route('project_states.create')
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
		$project_state = $this->project_state->findOrFail($id);

		return View::make('project_states.show', compact('project_state'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project_state = $this->project_state->find($id);

		if (is_null($project_state))
		{
			return Redirect::route('project_states.index');
		}

		return View::make('project_states.edit', compact('project_state'));
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
		$validation = Validator::make($input, Project_state::$rules);

		if ($validation->passes())
		{
			$project_state = $this->project_state->find($id);
			$project_state->update($input);

			return Redirect::route('project_states.show', $id);
		}

		return Redirect::route('project_states.edit', $id)
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
		$this->project_state->find($id)->delete();

		return Redirect::route('project_states.index');
	}

}