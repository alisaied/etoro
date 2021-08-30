@extends('layouts.app')
@section('content')

    {{-- <p> {{ $myVar }}</p>
    <p>{{ $secondVar }}</p> 
<hr>
    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach

<hr>
<hr><hr><hr> --}}
@foreach ($api_result['data'] as $res)
<p>{{ $res['name'] }}</p>
@endforeach

@endsection
    

