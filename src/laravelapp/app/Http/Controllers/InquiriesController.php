<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    // ルートから指示->入力画面表示
    public function showCreateForm()
    {
        return view('inquiries.top');
    }

    // 確認画面
    public function comfilm()
    {
        return view('inquiries/comfilm');
    }

    // DBに保存
    public function create()
    {

    }

    // 完了画面表示
        public function showThanksForm()
    {
        return view('inquiries/thanks');
    }
}
