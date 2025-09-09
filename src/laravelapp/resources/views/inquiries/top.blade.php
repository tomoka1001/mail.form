@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        {{-- 入力エラーがあれば表示する --}}
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('inquiries.comfilm') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table border="1">
                <tr>
                    <th><label for="onamae">名前</label></th>
                    <td><input type="text" name="name" id="onamae" value="{{ old('name') }}"></td>
                </tr>

                <tr>
                    <th><label for="mail_address">メールアドレス</label></th>
                    <td><input type="email" name="email" id="email_address" value="{{ old('email') }}"></td>
                </tr>

                <tr>
                    <th>性別</th>
                    <td>
                        {{--　例：<input class="form-check-input" type="radio" name="deposit" id="exampleRadios2" value="請求済み" {{ old('deposit') == '請求済み' ? 'checked' : '' }}> --}}
                        {{-- {{ old関数の第二引数を指定するとそれがデフォルト値になる　　old('sex')が男性であればチェックをする。男性でなければ空(チェックしない)}} --}}
                        <input type="radio" name="sex" id="sex" value="男性" {{ old('sex') === '男性' ? 'checked' : '' }}>男性
                        <input type="radio" name="sex" id="sex" value="女性" {{ old('sex') === '女性' ? 'checked' : '' }}>女性
                    </td>
                </tr>

                <tr>
                    <th>お問い合わせ</th>
                    <td>
                        {{-- 例：<input id="check1" type="checkbox" name="checkbox[]" value="選択肢1"{{ is_array(old("checkbox")) && in_array("選択肢1", old("checkbox"), true)? ' checked' : '' }}>
                                <label class="form-check-label" for="check1">選択肢1</label>--}}
                        <input type="checkbox" name="category[]" value="製品について" {{ is_array(old("category")) && in_array("製品について", old("category"), true)? ' checked' : '' }}>製品について
                        <input type="checkbox" name="category[]" value="サービスについて" {{ is_array(old("category")) && in_array("サービスについて", old("category"), true)? ' checked' : '' }}>サービスについて
                        <input type="checkbox" name="category[]" value="採用について" {{ is_array(old("category")) && in_array("採用について", old("category"), true)? ' checked' : '' }}>採用について
                        <input type="checkbox" name="category[]" value="その他" {{ is_array(old("category")) && in_array("その他", old("category"), true)? ' checked' : '' }}>その他
                    </td>
                </tr>

                <tr>
                    <th>お住まいエリア</th>
                    <td>
                        <select name="area">
                            <option value="北海道" {{ old('pref') === '北海道' ? 'select' : '' }}>北海道</option>
                            <option value="東北" {{ old('pref') === '東北' ? 'select' : '' }}>東北</option>
                            <option value="関東" {{ old('pref') === '関東' ? 'select' : '' }}>関東</option>
                            <option value="中部" {{ old('pref') === '中部' ? 'select' : '' }}>中部</option>
                            <option value="近畿" {{ old('pref') === '近畿' ? 'select' : '' }}>近畿</option>
                            <option value="中国" {{ old('pref') === '中国' ? 'select' : '' }}>中国</option>
                            <option value="四国" {{ old('pref') === '四国' ? 'select' : '' }}>四国</option>
                            <option value="九州・沖縄" {{ old('pref') === '九州・沖縄' ? 'select' : '' }}>九州・沖縄</option>
                        </select>
                </tr>

                <tr>
                    <th><label for="message">メッセージ</label></th>
                    <td><textarea name="message">{!! nl2br(old('message')) !!}</textarea></td>
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