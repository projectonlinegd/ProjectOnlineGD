@extends('layouts.master')

@section('content')

<h1>Dashboard for user {{\Auth::user()->mobile_number}}</h1>

<a href="{{ route('test') }}">Next</a>
@endsection