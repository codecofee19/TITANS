<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Http\Requests;

class QuizController extends Controller
{
	//
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function question1()
	{
		return view('quiz.question1');
	}

	public function question2()
	{
		return view('quiz.question2');
	}

	public function question3()
	{
		return view('quiz.question3');
	}

	public function question4()
	{
		return view('quiz.question4');
	}

	public function question5()
	{
		return view('quiz.question5');
	}

	public function question6()
	{
		return view('quiz.question6');
	}

	public function question7()
	{
		return view('quiz.question7');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Quiz::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quiz = Quiz::findOrFail($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quiz = Quiz::findOrFail($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$quiz = Quiz::findOrFail($id);
		$input = $request->all();
		$quiz->fill($input)->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Quiz::findOrFail($id)->update(array('removed_flag' => 1));
	}
}
