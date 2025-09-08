@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        <form action="{{ route('inquiries.comfilm')}}" method="POST">
        @csrf
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

                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" value="送信">
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection