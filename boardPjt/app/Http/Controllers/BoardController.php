<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller {
    // p.77 라우트명의 관례 학습

    public function index() {
        return view('board/index');
    }

    public function create() {
        return view('board/create');
    }

    public function show() {
        return view('board/show');
    }
}
