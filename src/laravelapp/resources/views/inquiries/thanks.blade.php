@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        <table border="1">
            <tr>
                <th>名前</th>
                <input type="hidden" name="onamae" value="">
            </tr>

            <tr>
                <th>メールアドレス</th>
                <input type="hidden" name="email" value="">
            </tr>

            <tr>
                <th>性別</th>
                <input type="hidden" name="onamae" value="">
            </tr>

            <tr>
                <th>お問い合わせカテゴリ</th>
                <input type="hidden" name="email" value="">
            </tr>

            <tr>
                <th>お住まい</th>
                <input type="hidden" name="onamae" value="">
            </tr>

            <tr>
                <th>メッセージ</th>
                <input type="hidden" name="email" value="">
            </tr>

            <tr>
                <th>写真</th>
                <input type="hidden" name="onamae" value="">
            </tr>
        </table>
    </div>
@endsection