<?php
namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller {
    // p.77 라우트명의 관례 학습

    public function index() {
        //Board::all() -> 전체 select 해오는 것
        $list = Board::select(['id', 'title', 'hits', 'created_at'])->orderBy('id', 'desc')->get();
        return view('board/index')->with('list', $list);
    }

    public function create() {
        return view('board/create');
    }

    public function store(Request $req) {
        $board = new Board([
            "title" => $req->input("title"),
            "ctnt" => $req->input("ctnt"),
            "hits" => 0,
        ]);
        $board->save(); //insert 됨

        return redirect('/boards'); //주소 이동
    }

    public function show() {
        return view('board/show');
    }
}
