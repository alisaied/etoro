@extends('layouts.app')
@section('content')

    <p> {{ $myVar }}</p>
    <p>{{ $secondVar }}</p> 
<hr>
    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach

<hr>


@endsection
    

