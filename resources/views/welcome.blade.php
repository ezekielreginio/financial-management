@extends('layouts.app')

@section('title', 'RCGSolutions | Finance Management')

@section('styles')
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')
    <landing-page-component/>
@endsection

@section('scripts')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection


