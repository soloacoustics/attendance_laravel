{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/attendances/{{$attendance->id}}" method="post">
    {{ csrf_field() }}
    <div>
      <label for="date">日付</label>
      {{$attendance->date}}
    </div>
    <div>
      <label for="work_from">出勤時間</label>
      <input type="text" name="work_from" value="{{$attendance->work_from}}">
    </div>
    <div>
      <label for="work_to">退勤時間</label>
      <input type="text" name="work_to" value="{{$attendance->work_to}}">
    </div>
    <div>
      <label for="break_from">休憩開始時間</label>
      <input type="text" name="break_from" value="{{$attendance->break_from}}">
    </div>
    <div>
      <label for="break_to">休憩終了時間</label>
      <input type="text" name="break_to" value="{{$attendance->break_to}}">
    </div>
    <div>
      <label for="description">内容</label>
      <textarea name="description" rows="8" cols="80">{{$attendance->description}}</textarea>
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </form>
@endsection