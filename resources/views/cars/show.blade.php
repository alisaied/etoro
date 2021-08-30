@extends('layouts.app')
@section('content')

<div class="container ">


<div class="row text-center">

  <div class="col-12"> 
  <div class="card border-success m-3" >
      <div class="card-header bg-transparent border-success">
        <a href="/cars/{{ $car->id }}" >{{ $car->name }}</a>          
      </div>
      <div class="card-body text-success">
        <h5 class="card-title"></h5>
        <p class="card-text">{{ $car->description }}</p>        
      </div>

      <div class="float-right p-3">
       <table class="table"><tr><th>Model</th><th>Engines</th><th>ProductionDate</th> </tr>
        @forelse ($car->carModels as $model)
            <tr>
                <td>{{ $model['model_name'] }}</td>
            <td>
                    @foreach ($car->engines as $engine)
                        @if ($model->id==$engine->model_id)
                        
                        [ {{ $engine->engine_name }} ]
                            
                        @endif
                    @endforeach

            </td>
            <td> {{ date('Y-m-d',strtotime($car->productionDate->created_at)) }}</td>
            </tr>
        @empty
            <p>No Models Found</p>
        @endforelse

       </table>
<p>  @forelse ($car->products as $product)
           [{{ $product->name }}]
       @empty
           No product 
       @endforelse
     
</p>
     

      
      </div>
      <div class="card-footer bg-transparent border-success">Founded in <b>{{ $car->founded }}</b></div>
        <div class="float-right p-3">
          <a href="/cars/{{ $car->id }}/edit">Edit &rarr;</a>
          <form action="/cars/" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete &rarr;</button>
          </form>
        
        </div>

      
    </div>
  </div>  
</div>
</div>

@endsection