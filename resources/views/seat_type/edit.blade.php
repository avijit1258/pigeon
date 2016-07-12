@extends('layouts.index')

@section('content')

<div class="container narrow">
 <div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Seat Type
        </div>
        <div class="panel-body">
            <div class="col-sm-4">
                <form action="/seat_types/{{$seat_type->id}}" method="post" >
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />

                    <label for="input_seat_type">Seat type</label>
                    <input type="text" name="seat_type_name" id="input_seat_type" class="form-control" value={{$seat_type->seat_type_name}}>

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