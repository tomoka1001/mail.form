<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInquiry;
use Illuminate\Http\Request;
use App\inquiry;

class InquiriesController extends Controller
{
    // ルートから指示->入力画面表示
    public function showCreateForm()
    {
        return view('inquiries.top');
    }

    // 確認画面
    public function comfilm(CreateInquiry $request)
    {
        return view('inquiries/comfilm');
    }

    // 完了画面表示(new 箱を作る)
        public function showThanksForm(Request $request)
    {
        // フォルダモデルのインスタンス(箱）を作成する
        $inquiry = new inquiry();

        // ここで$requestを読んでいる
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->sex = $request->sex;
        $inquiry->category = $request->category;
        $inquiry->area = $request->area;
        $inquiry->message = $request->message;
        $inquiry->image = $request->image;

        // インスタンスの状態をデータベースに書き込む
        $inquiry->save();

        return redirect()->route('inquiries.top');
    }
}
