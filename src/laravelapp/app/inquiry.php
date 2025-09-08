<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    // モデルに関連付けるテーブル名を指定 自動で紐付けされるから描かなくてもいい
    protected $table = 'inquiries';

    // $fillableプロパティではcreate()やfill()等で追加、更新を許可する属性を指定
    protected $fillable = [
        'name',
        'email',
        'sex',
        'category',
        'area',
        'message',
        'image',
    ];
}
