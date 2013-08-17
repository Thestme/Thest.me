<?php

class Student_typesController extends BaseController {

	/**
	 * Student_type Repository
	 *
	 * @var Student_type
	 */
	protected $student_type;

	public function __construct(Student_type $student_type)
	{
		$this->student_type = $student_type;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$student_types = $this->student_type->all();

		return View::make('student_types.index', compact('student_types'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('student_types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Student_type::$rules);

		if ($validation->passes())
		{
			$this->student_type->create($input);

			return Redirect::route('student_types.index');
		}

		return Redirect::route('student_types.create')
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
		$student_type = $this->student_type->findOrFail($id);

		return View::make('student_types.show', compact('student_type'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student_type = $this->student_type->find($id);

		if (is_null($student_type))
		{
			return Redirect::route('student_types.index');
		}

		return View::make('student_types.edit', compact('student_type'));
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
		$validation = Validator::make($input, Student_type::$rules);

		if ($validation->passes())
		{
			$student_type = $this->student_type->find($id);
			$student_type->update($input);

			return Redirect::route('student_types.show', $id);
		}

		return Redirect::route('student_types.edit', $id)
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
		$this->student_type->find($id)->delete();

		return Redirect::route('student_types.index');
	}

}