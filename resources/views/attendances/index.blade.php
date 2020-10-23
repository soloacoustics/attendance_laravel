{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '勤怠管理')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <div>
    <a href="/attendances/create">新規作成</a>
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
    @foreach ($attendances as $attendance)
        <tr>
            <td>{{$attendance->date}}</td>
            <td>{{$attendance->work_from}}</td>
            <td>{{$attendance->work_to}}</td>
            <td>{{$attendance->break_from}}</td>
            <td>{{$attendance->break_to}}</td>
            <td>{{$attendance->description}}</td>
        <td>{{ $daily_sum = ((strtotime($attendance->work_to) - strtotime($attendance->work_from))/60/60) - ((strtotime($attendance->break_to) - strtotime($attendance->break_from))/60/60) }}</td>
            <td><a href="/attendances/{{$attendance->id}}/edit">編集</a></td>
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