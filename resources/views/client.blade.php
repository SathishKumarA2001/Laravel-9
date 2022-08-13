@extends('layouts.layout')

@section('client')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <img src="/images/axiom.png"><br>
  <h4><b>{{ $client_name }}</b></h4>
  @foreach($clients as $client)
  <h4>{{ $client->name }} - {{ $client->project }} - {{ $client->amount }}</h4>
  @endforeach
</div>
@endsection