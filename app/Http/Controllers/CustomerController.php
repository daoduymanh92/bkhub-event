<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Book;
use App\Question;

class CustomerController extends Controller
{
    //
    public function postRegisterEmail(Request $request) {

		$validator = Validator::make($request->all(), [	
		   'phone' => 'required'
		]);

		if ($validator->fails()) {
			return response()->json([
				'err' => 1,
				'msg' => 'Bạn cần nhập đầy đủ thông tin'
			]);  
		}

		$name = isset($request->name) && !empty($request->name) ? $request->name : null;
		$email = isset($request->email) && !empty($request->email) ? $request->email : null;
		$phone = isset($request->phone) && !empty($request->phone) ? $request->phone : null;
		$event = isset($request->event) && !empty($request->event) ? $request->event : null;

		$book = new Book;
		$book->name = $name;
		$book->email = $email;
		$book->phone = $phone;
		$book->event = $event;
		$book->save();

		return response()->json([
			'err' => 0,
			'msg' => 'Bạn đã đặt chỗ thành công'
		]);    	
    }
    /*
	* post questions
    */
    public function askQuestion(Request $request) {
		$validator = Validator::make($request->all(), [	
		   'phone' => 'required'
		]);

		if ($validator->fails()) {
			return response()->json([
				'err' => 1,
				'msg' => 'Bạn cần nhập đầy đủ thông tin'
			]);  
		}
 		$name = isset($request->name) && !empty($request->name) ? $request->name : null;
		$email = isset($request->email) && !empty($request->email) ? $request->email : null;
		$phone = isset($request->phone) && !empty($request->phone) ? $request->phone : null;
		$message = isset($request->message) && !empty($request->message) ? $request->message : null;   	

		$question = new Question;
		$question->name = $name;
		$question->email = $email;
		$question->phone = $phone;
		$question->message = $message;
		$question->save();

		return response()->json([
			'err' => 0,
			'msg' => 'Bạn đã đặt câu hỏi thành công'
		]); 
    }
	/*
		Danh sách đặt chỗ
	*/
	public function bookingList() {

		$books = Book::all();
		return view('admin.booking_list')->with('books', $books);
	}
	public function questionList() {
		$questions = Question::all();
		return view('admin.question_list')->with('questions', $questions);
	}
    public function test(Request $request) {
    	dd('hello');
    }

}
