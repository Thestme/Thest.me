<?php

class GendersController extends BaseController {

	/**
	 * Gender Repository
	 *
	 * @var Gender
	 */
	protected $gender;

	public function __construct(Gender $gender)
	{
		$this->gender = $gender;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$genders = $this->gender->all();

		return View::make('genders.index', compact('genders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('genders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Gender::$rules);

		if ($validation->passes())
		{
			$this->gender->create($input);

			return Redirect::route('genders.index');
		}

		return Redirect::route('genders.create')
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
		$gender = $this->gender->findOrFail($id);

		return View::make('genders.show', compact('gender'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gender = $this->gender->find($id);

		if (is_null($gender))
		{
			return Redirect::route('genders.index');
		}

		return View::make('genders.edit', compact('gender'));
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
		$validation = Validator::make($input, Gender::$rules);

		if ($validation->passes())
		{
			$gender = $this->gender->find($id);
			$gender->update($input);

			return Redirect::route('genders.show', $id);
		}

		return Redirect::route('genders.edit', $id)
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
		$this->gender->find($id)->delete();

		return Redirect::route('genders.index');
	}

}