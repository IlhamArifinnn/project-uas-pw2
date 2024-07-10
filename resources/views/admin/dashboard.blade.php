@extends('admin.layouts.app')

@section('content')
    <h1 class="dark:text-white">welcome to dashboard, {{ auth()->user()->name }}</h1>
@endsection
