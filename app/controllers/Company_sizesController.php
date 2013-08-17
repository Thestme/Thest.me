<?php

class Company_sizesController extends BaseController {

	/**
	 * Company_size Repository
	 *
	 * @var Company_size
	 */
	protected $company_size;

	public function __construct(Company_size $company_size)
	{
		$this->company_size = $company_size;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$company_sizes = $this->company_size->all();

		return View::make('company_sizes.index', compact('company_sizes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('company_sizes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Company_size::$rules);

		if ($validation->passes())
		{
			$this->company_size->create($input);

			return Redirect::route('company_sizes.index');
		}

		return Redirect::route('company_sizes.create')
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
		$company_size = $this->company_size->findOrFail($id);

		return View::make('company_sizes.show', compact('company_size'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$company_size = $this->company_size->find($id);

		if (is_null($company_size))
		{
			return Redirect::route('company_sizes.index');
		}

		return View::make('company_sizes.edit', compact('company_size'));
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
		$validation = Validator::make($input, Company_size::$rules);

		if ($validation->passes())
		{
			$company_size = $this->company_size->find($id);
			$company_size->update($input);

			return Redirect::route('company_sizes.show', $id);
		}

		return Redirect::route('company_sizes.edit', $id)
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
		$this->company_size->find($id)->delete();

		return Redirect::route('company_sizes.index');
	}

}