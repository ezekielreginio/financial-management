@extends('layouts.app')

@section('title', 'ERP | Accounts')

@section('content')
	<accounts-component />
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/dashboard.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('/js/accounts.js') }}"></script>
@endsection


