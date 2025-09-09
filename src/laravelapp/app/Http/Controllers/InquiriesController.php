<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInquiry;
use Illuminate\Http\Request;
use App\Inquiry;

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
        // $request->except() 使用例：hoge3を省いて取得する $request->except('hoge3');
        // 配列でも受け取れる $request->except(['hoge3']);
        $post_data = $request->except('imagefile');

        // バリデーション済みのデータを取得
        $datas= $request->validated();
        
        // dd($datas);
        // with関数を使って受け渡す　
        return view('inquiries/comfilm')->with('datas', $datas);
        
        // 配列を使って受け渡すコード　return view('inquiries/comfilm', ['datas' => $datas]);
        // compact関数で変数を受け渡す  return view('inquiries/comfilm', compact('datas'));
    }

    // 完了画面表示(new 箱を作る)
        public function showThanksForm(Request $request)
    {

        // dd($request);
        // フォルダモデルのインスタンス(箱）を作成する
        $inquiry = new Inquiry();

        // ここで$requestを読んでいる
        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->sex = $request->sex;
        $inquiry->category = implode(",", $request->category);
        $inquiry->area = $request->area;
        $inquiry->message = $request->message;
        // $inquiry->image = $request->image;

        // インスタンスの状態をデータベースに書き込む
        // $inquiry->save();

        return view('inquiries/thanks')->with('inquiry', $inquiry);
    }
}
