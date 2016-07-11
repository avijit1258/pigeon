@extends('layouts.company_admin.index')

@section('content')

<div class="container narrow">
 <div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Please Input New Seat 
    </div>
    <div class="panel-body">
      <div class="col-sm-4">
        <form action="/seats/" method="post" >
          {{ csrf_field() }}
          

          <label for="input_seat">Seat Name</label>
          <input type="text" name="seat_name" id="input_seat" class="form-control">
          <label for="input_row">Row</label>
          <input type="text" name="row" id="input_row" class="form-control">
          <label for="input_column">Column</label>
          <input type="text" name="col" id="input_column" class="form-control">

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