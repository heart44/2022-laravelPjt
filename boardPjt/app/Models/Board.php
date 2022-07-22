<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model {
    use HasFactory;

    // protected $table = '바꾸고 싶은 테이블명';
    // protected $primaryKey = 'i_board'; ㅂㅏ꾸고 싶은 pk
    protected $fillable = ['title', 'ctnt', 'hits'];    //안적으면 insert가 안됨
    protected $guarded = ['created_at'];    //한번 insert 되면 수정 안되게 보호
}
