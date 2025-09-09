@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        <h1>ありがとうございます。</h1>
        <p>以下の内容でお問い合わせを受け付けました。</p>
        <table border="1">
            <tr>
                <th>名前</th>
                <td>{{ $inquiry['name'] }}</td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>{{ $inquiry['email'] }}</td>
            </tr>

            <tr>
                <th>性別</th>
                <td>{{ $inquiry['sex'] }}</td>
            </tr>

            <tr>
                <th>お問い合わせカテゴリ</th>
                <td>{{ $inquiry['category'] }}</td>
            </tr>

            <tr>
                <th>お住まい</th>
                <td>{{ $inquiry['area'] }}</td>
            </tr>

            <tr>
                <th>メッセージ</th>
                <td>{{ $inquiry['message'] }}</td>
            </tr>

            <tr>
                <th>写真</th>
                {{-- <td>{{ $inquiry['image'] }}</td> --}}
            </tr>
        </table>
        <a href="./top">戻る</a>
    </div>
@endsection