@extends('layouts.app')
@section('content')

    <div class="container ">
      <div class="row"><h2 class="text-center">Cars</h2></div>
<div class="row text-center">
  
    @foreach ($cars as $car )
    <div class="col-4"> 
    <div class="card border-success m-3" >
        <div class="card-header bg-transparent border-success">{{ $car->name }}</div>
        <div class="card-body text-success">
          <h5 class="card-title">{{ $car->created_at ?? 'Null' }}</h5>
          <p class="card-text">{{ $car->description }}</p>
        </div>
        <div class="card-footer bg-transparent border-success">Founded in <b>{{ $car->founded }}</b></div>
      </div>
    </div>  
    @endforeach
</div>
     

    </div>


@endsection