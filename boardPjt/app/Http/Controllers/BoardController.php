<?php
namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller {
    // p.77 라우트명의 관례 학습

    public function index() {
        return view('board/index');
    }

    public function create() {
        return view('board/create');
    }

    public function store() {
        $board = new Board([
            "title" => "제목1",
            "ctnt" => "내용2",
            "hits" => "0",
        ]);
        $board->save(); //insert 됨

        return redirect('/boards'); //주소 이동
    }

    public function show() {
        return view('board/show');
    }
}
