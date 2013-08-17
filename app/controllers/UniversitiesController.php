<?php

class UniversitiesController extends BaseController {

	/**
	 * University Repository
	 *
	 * @var University
	 */
	protected $university;

	public function __construct(University $university)
	{
		$this->university = $university;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$universities = $this->university->all();

		return View::make('universities.index', compact('universities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('universities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, University::$rules);

		if ($validation->passes())
		{
			$this->university->create($input);

			return Redirect::route('universities.index');
		}

		return Redirect::route('universities.create')
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
		$university = $this->university->findOrFail($id);

		return View::make('universities.show', compact('university'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$university = $this->university->find($id);

		if (is_null($university))
		{
			return Redirect::route('universities.index');
		}

		return View::make('universities.edit', compact('university'));
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
		$validation = Validator::make($input, University::$rules);

		if ($validation->passes())
		{
			$university = $this->university->find($id);
			$university->update($input);

			return Redirect::route('universities.show', $id);
		}

		return Redirect::route('universities.edit', $id)
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
		$this->university->find($id)->delete();

		return Redirect::route('universities.index');
	}

}