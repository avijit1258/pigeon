@extends('layouts.company_admin.index')

@section('content')

<div class="container narrow">
 <div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Please Input New Seat Type
    </div>
    <div class="panel-body">
      <div class="col-sm-4">
        <form action="/routes/" method="post" >
          {{ csrf_field() }}
          

          <label for="input_route">Route Name</label>
          <input type="text" name="route_name" id="input_route" class="form-control">

          <button type="submit" class = "btn btn-default">
            <i class="fa fa-btn fa-plus"></i>Add
          </button>

        </form> 
      </div>
    </div>   
    
  </div>
</div>
</div>


@endsection