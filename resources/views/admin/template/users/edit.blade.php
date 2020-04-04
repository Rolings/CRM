@extends('admin.app')
@section('title',__('admin.users'))

@section('content')
    @include('admin.template.users.fields')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('admin/css/profile.css') }}">
@endsection