@extends('layouts.layout')

@section('company')
<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Axiom Consultancy</p> 
  <h2> {{ $name }} - {{ $age }}</h2>
  <img src="/images/axiom.png">
  <!-- @for($i=0; $i < count($data); $i++)
    <p>{{$data[$i]['service']}} - {{$data[$i]['product']}} - {{$data[$i]['support']}}</p>
  @endfor -->

  @foreach($data as $data)
    <p><b>{{$data['service']}} - {{$data['product']}} - {{$data['support']}}</b></p>
    @if($loop->first)
    <p> First Element of Array {{$loop->index}}</p>
    @elseif($loop->last)
    <p>Last Element of Array {{$loop->index}}</p>
    @endif
  @endforeach
  </div>
</div>
@endsection