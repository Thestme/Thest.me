<?php

class Company_areasController extends BaseController {

	/**
	 * Company_area Repository
	 *
	 * @var Company_area
	 */
	protected $company_area;

	public function __construct(Company_area $company_area)
	{
		$this->company_area = $company_area;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$company_areas = $this->company_area->all();

		return View::make('company_areas.index', compact('company_areas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('company_areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Company_area::$rules);

		if ($validation->passes())
		{
			$this->company_area->create($input);

			return Redirect::route('company_areas.index');
		}

		return Redirect::route('company_areas.create')
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
		$company_area = $this->company_area->findOrFail($id);

		return View::make('company_areas.show', compact('company_area'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$company_area = $this->company_area->find($id);

		if (is_null($company_area))
		{
			return Redirect::route('company_areas.index');
		}

		return View::make('company_areas.edit', compact('company_area'));
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
		$validation = Validator::make($input, Company_area::$rules);

		if ($validation->passes())
		{
			$company_area = $this->company_area->find($id);
			$company_area->update($input);

			return Redirect::route('company_areas.show', $id);
		}

		return Redirect::route('company_areas.edit', $id)
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
		$this->company_area->find($id)->delete();

		return Redirect::route('company_areas.index');
	}

}