<?php

class AreasController extends BaseController {

	/**
	 * Area Repository
	 *
	 * @var Area
	 */
	protected $area;

	public function __construct(Area $area)
	{
		$this->area = $area;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$areas = $this->area->all();

		return View::make('areas.index', compact('areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Area::$rules);

		if ($validation->passes())
		{
			$this->area->create($input);

			return Redirect::route('areas.index');
		}

		return Redirect::route('areas.create')
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
		$area = $this->area->findOrFail($id);

		return View::make('areas.show', compact('area'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$area = $this->area->find($id);

		if (is_null($area))
		{
			return Redirect::route('areas.index');
		}

		return View::make('areas.edit', compact('area'));
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
		$validation = Validator::make($input, Area::$rules);

		if ($validation->passes())
		{
			$area = $this->area->find($id);
			$area->update($input);

			return Redirect::route('areas.show', $id);
		}

		return Redirect::route('areas.edit', $id)
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
		$this->area->find($id)->delete();

		return Redirect::route('areas.index');
	}

}