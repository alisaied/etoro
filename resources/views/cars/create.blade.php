@extends('layouts.app')
@section('content')

<div class="container">
  <form action="/cars" method="POST" class="col-4">
@csrf
      <div class="form-group">
        <label for="">Car Name</label>
        <input type="text"
          class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Car Name">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for="">Desc</label>
        <input type="text"
          class="form-control" name="description" id="" aria-describedby="helpId" placeholder="Desc">
        <small id="helpId" class="form-text text-muted">Help text</small>
      </div>
      <div class="form-group">
        <label for="">Founded </label>
        <input type="number"
          class="form-control" name="founded" id="" aria-describedby="helpId" placeholder="Founded in year">
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