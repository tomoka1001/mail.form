@extends('layout')

@section('styles')
@endsection
@section('content')
    <div>
        <form action="{{ route('inquiries.thanks')}}" method="POST">
        @csrf
            <input type="hidden" name="name" value="{{ $datas['name'] }}">
            <input type="hidden" name="email" value="{{ $datas['email'] }}">
            <input type="hidden" name="sex" value="{{ $datas['sex'] }}">
            @foreach ($datas['category'] as $category)
                <input type="hidden" name="category[]" value="{{ $category }}">
            @endforeach
            <input type="hidden" name="area" value="{{ $datas['area'] }}">
            <input type="hidden" name="message" value="{{ $datas['message'] }}">
            {{-- <input type="hidden" name="image" value="{{ $datas['image'] }}"> --}}
                <table border="1">
                    <tr>
                        <th>名前</th>
                        <td>{{ $datas['name'] }}</td>
                    </tr>

                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ $datas['email'] }}</td>
                    </tr>

                    <tr>
                        <th>性別</th>
                        <td>{{ $datas['sex'] }}</td>
                    </tr>

                    <tr>
                        <th>お問い合わせカテゴリ</th>
                            <td>{{ implode(',', $datas['category']) }}</td>
                    </tr>

                    <tr>
                        <th>お住まい</th>
                        <td>{{ $datas['area'] }}</td>
                    </tr>

                    <tr>
                        <th>メッセージ</th>
                        <td>{!! nl2br($datas['message']) !!}</td>
                    </tr>

                    <tr>
                        <th>写真</th>
                        {{-- @if (!empty($datas['image'] && $datas['image'] !== 'null'))
                                <td>{{ $datas['image'] }}</td>
                            @else
                            <td>アップロードされている画像はありません</td>
                        @endif --}}
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