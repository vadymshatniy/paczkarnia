@extends('layouts.app')

@section('title')
    Blend 500
@endsection

@section('content')
    <h2>500</h2>
    @php
        Log::info('Текст ошибки');
    @endphp
@endsection
