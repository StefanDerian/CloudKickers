<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;
use Illuminate\Support\Facades\DB;


class QuestionsController extends Controller
{
    //


    public function get_questions_answers(){
      //the questions data along side with the answers
    $questions_answers = DB::table('questions')
          ->select(
              '*'
          )
          ->join(
              'answers',
              'questions.id','=','answers.question_id'
          )
          ->get();

      return $questions_answers;
    }
    public function index(Request $request)
    {
        $questions_answers = get_questions_answers();


        //pre process questions answers
        $question_answers_dict = [];

        foreach ($questions_answers as $value) {
          // code...
          $answer = $questions_answers->$answers;
          // assummed that every questions are different

          if(!array_key_exists ( $questions_answers->question , $question_answers_dict )){
            // if the questions is not exists yet
            $new_question = [];
            array_push($new_question, $answer );
            $question_answers_dict[$questions_answers->question]["answers"] = $new_question ;
          }else{
            // if the questions is already exists
            array_push($question_answers_dict[$questions_answers->question]["answers"], $answer);
          }

        }
        return view('questions',["question_answers" => $questions_answers]);
    }

}
