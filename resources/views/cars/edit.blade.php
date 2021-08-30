@extends('layouts.app')
@section('content')

<div class="container">
  <div><h2>Update Car</h2></div>
  <form action="/cars/{{ $car->id }}" method="POST" class="col-4">
@csrf
@method('PUT')
      <div class="form-group">
        <label for="">Car Name</label>
        <input type="text"
          class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Car Name" value="{{ $car->name }}">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for="">Desc</label>
        <input type="text"
          class="form-control" name="description" id="" aria-describedby="helpId" placeholder="Desc" value="{{ $car->description }}">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for="">Founded </label>
        <input type="number"
          class="form-control" name="founded" id="" aria-describedby="helpId" placeholder="Founded in year" value="{{ $car->founded }}">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for="">Submit</label>
        <input type="submit"
          class="form-control btn-success" name="submit" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>


  </form>
</div>

@endsection