@extends('layouts.app')

@section('title', 'ERP | Accounts')

@section('styles')
    <link rel="stylesheet" href="{{ mix('/css/dashboard.css') }}">
@endsection

@section('content')
	<accounts-component />
@endsection

@section('scripts')
    <script src="{{ mix('/js/accounts.js') }}"></script>
@endsection


