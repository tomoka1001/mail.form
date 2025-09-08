@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        {{-- 入力エラーがあれば表示する --}}
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($erors->all() as $message)
                    <li>{{ $message }}</li>
                </ul>
            </div>
        @endif
        <form action="{{ route('inquiries.comfilm') }}" method="POST" enctype="">
            @csrf
            <table border="1">
                <tr>
                    <th><label for="onamae">名前</label></th>
                    <td><input type="text" name="onamae" id="onamae"></td>
                </tr>

                <tr>
                    <th><label for="mail_address">メールアドレス</label></th>
                    <td><input type="email" name="email" id="email_address"></td>
                </tr>

                <tr>
                    <th>性別</th>
                    <td>
                        <input type="radio" name="sex" id="sex" value="男性">男性
                        <input type="radio" name="sex" id="sex" value="女性">女性
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせ</th>
                    <td>
                        <input type="checkbox" name="cates" value="製品について">製品について
                        <input type="checkbox" name="cates" value="サービスについて">サービスについて
                        <input type="checkbox" name="cates" value="採用について">採用について
                        <input type="checkbox" name="cates" value="その他">その他
                    </td>
                </tr>

                <tr>
                    <th>お住まいエリア</th>
                    <td>
                        <select name="pref">
                            <option value="北海道">北海道</option>
                            <option value="東北">東北</option>
                            <option value="関東">関東</option>
                            <option value="中部">中部</option>
                            <option value="近畿">近畿</option>
                            <option value="中国">中国</option>
                            <option value="四国">四国</option>
                            <option value="九州・沖縄">九州・沖縄</option>
                        </select>
                </tr>

                <tr>
                    <th><label for="message">メッセージ</label></th>
                    <td><textarea name="message"></textarea></td>
                </tr>

                <tr>
                    <th><label for="image">画像</label></th>
                    <td><input type="file" name="image" accept="image/*"></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="button" value="送信">
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection