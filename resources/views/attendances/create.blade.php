{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/attendances" method="post">
    {{-- 以下を入れないとエラーになる --}}
    {{ csrf_field() }}
    <div>
      <label for="date">日付</label>
      <input type="text" name="date">
    </div>
    <div>
      <label for="work_from">出勤時間</label>
      <input type="text" name="work_from">
    </div>
    <div>
      <label for="work_to">退勤時間</label>
      <input type="text" name="work_to">
    </div>
    <div>
      <label for="break_from">休憩開始時間</label>
      <input type="text" name="break_from">
    </div>
    <div>
      <label for="break_to">休憩終了時間</label>
      <input type="text" name="break_to">
    </div>
    <div>
      <label for="description">作業内容</label>
      <textarea name="description" rows="8" cols="80"></textarea>
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>
@endsection