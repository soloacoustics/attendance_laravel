{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '勤怠管理')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <div>
    <a href="/attendance/create">新規作成</a>
  <table>
    <tr>
        <th>日</th>
        <th>出勤</th>
        <th>退勤</th>
        <th>休憩始</th>
        <th>休憩終</th>
        <th>作業内容</th>
        <th>稼働</th>
    </tr>
    @php
      $total_sum = 0;
    @endphp
    @foreach ($attendance as $a)
        <tr>
            <td>{{$a->date}}</td>
            <td>{{$a->work_from}}</td>
            <td>{{$a->work_to}}</td>
            <td>{{$a->break_from}}</td>
            <td>{{$a->break_to}}</td>
            <td>{{$a->description}}</td>
        <td>{{ $daily_sum = ((strtotime($a->work_to) - strtotime($a->work_from))/60/60) - ((strtotime($a->break_to) - strtotime($a->break_from))/60/60) }}</td>
            <td><a href="/attendance/{{$a->id}}/edit">編集</a></td>
        </tr>
      @php
        $total_sum += $daily_sum;
      @endphp
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><font color="red">{{ $total_sum }}</font></td>
        <td></td>
    </tr>
  </table>
@endsection
