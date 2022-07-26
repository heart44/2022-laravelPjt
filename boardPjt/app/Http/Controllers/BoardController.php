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
        $board->save(); //insert 됨, 바로 id값 넘어오게 세팅 돼있다고 함

        return redirect()->route('boards.show', ['id' => $board->id]); //주소 이동
    }

    public function show(Request $req) {
        $id = $req->input('id');
        $board = Board::find($id);
        $board->hits++;
        $board->save();
        return view('board/show')->with("data", Board::findOrFail($id));
    }

    public function edit(Request $req) {
        $id = $req->input('id');
        return view('board/create')->with("data", Board::findOrFail($id));
    }

    public function update(Request $req) {
        $id = $req->input('id');
        $board = Board::findOrFail($id);
        $board->title = $req->input('title');
        $board->ctnt = $req->input('ctnt');
        $board->save();

        // return redirect('/boards/show?id='. $id);
        return redirect()->route('boards.show', [ "id" => $id ]);
    }

    public function destroy(Request $req) {
        $id = $req->input('id');
        Board::find($id)->delete();
        return redirect('/boards');
    }
}
