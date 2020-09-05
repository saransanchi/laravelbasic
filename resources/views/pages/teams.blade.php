@extends('layout.app')

@section('title', 'teams')


@section('content')
    
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Our @if($teamMembers >24) Big @endif Teams</h1>
    <p class="lead">list the  our teams...</p>
  </div>
</div>
@endsection




