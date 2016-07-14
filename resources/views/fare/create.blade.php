@extends('layouts.index')

@section('content')

<div class="container narrow">
 <div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Coach
        </div>
        <div class="panel-body">
            <div class="col-sm-4">
                <form action="/coaches/" method="post" >
                    {{ csrf_field() }}
                    

                    <label for="input_coach_name">Coach Name</label>
                    <input type="text" name="coach_name" id="input_coach_name" class="form-control">

                    <label for="input_route">Coach Type </label>
                    <select name="coach_type_id" class="form-control" >
                        @foreach( $coach_types as $coach_type)
                        {

                        <option value={{$coach_type->id}} > {{$coach_type->coach_type}}  </option> 
                        }
                        @endforeach
                    </select>
                    
                    <label for="input_route">Route </label>
                    <select name="route_id" class="form-control" >
                        @foreach( $routes as $route)
                        {

                        <option value={{$route->id}} > {{$route->route_name}}  </option> 
                        }
                        @endforeach
                    </select>

                    <label for="input_seat">Seat </label>
                    <select name="seat_id" class="form-control">
                        @foreach( $seats as $seat)
                        {

                        <option value={{$seat->id}} > {{$seat->seat_name}}  </option> 
                        }
                        @endforeach
                    </select>

                    <label for="input_company">Starting Counter</label>
                    <select name="starting_counter_id" class="form-control">
                        @foreach( $counters as $counter)
                        {

                        <option value={{$counter->id}} > {{$counter->counter_name}}  </option> 
                        }
                        @endforeach
                    </select>

                    <label for="input_starting_time">Starting Time</label>
                    <input type="time" name="starting_time" id="input_starting_time" class="form-control">

                    <label for="input_company">Ending Counter</label>
                    <select name="ending_counter_id" class="form-control">
                        @foreach( $counters as $counter)
                        {

                        <option value={{$counter->id}} > {{$counter->counter_name}}  </option> 
                        }
                        @endforeach
                    </select>

                    <label for="input_ending_time">Ending Time</label>
                    <input type="text" name="ending_time" id="input_ending_time" class="form-control">

                
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