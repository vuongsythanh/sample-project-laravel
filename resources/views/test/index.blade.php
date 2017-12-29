@extends('layouts.master')

@section('title')
  <title>Theme Template for Bootstrap</title>
@endsection

@section('content')

  <h1>This is My Test Page</h1>

  @if(count($mang) > 0)

      @foreach($mang as $m)

            {{ $m }} <br>

      @endforeach

  @else

      <h1> Sorry, nothing to show...</h1>

  @endif

@endsection
