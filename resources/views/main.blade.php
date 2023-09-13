@extends('_layout')

@section('title')
    Strona główna
@endsection

@section('content')
    <h2>Witamy w "WWW"</h2>
    <img src="{{ url('/images/inside.jpg') }}" alt="inside the cafe" />
@endsection
