<?php

namespace App\Http\Controllers;

use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Shows a list of all the quizzes
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $quizzes = Quiz::all();

        return view('quizzes.index')
            ->with('quizzes', $quizzes);
    }
}
