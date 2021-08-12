@extends('layouts.app')
@section('content')


@isset($name)
    <p>name is {{ $name }}</p>
@endisset

@unless ($name == 'ali')   
    <p>unless {{ $name }} is not ali</p>
@endunless

@switch($name)
    @case('joury')
        <h3>This is my daughter</h3>
        @break
    @case('alisaied')
        <h3 class="">Welcome {{ $name }}</h3>
    @break
    @default
        <h2>No match found</h2>
@endswitch



 

@endsection