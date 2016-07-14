 @extends('layouts.index')

 @section('content')
 <div class="panel panel-default">
     <div class="panel-heading">Please Input New Counters</div>
     <div class="panel-body">
         <div class="col-sm-4">
             <form action="/coaches/{{$coach->
                 id}}" method="POST" >
                    {{ csrf_field() }}
                 <input type="hidden" name="_method" value="PUT" /> 

                 <label for="input_coach_name">Coach Name</label>
                 <input type="text" name="coach_name" id="input_coach_name" class="form-control" value="{{$coach->coach_name}}"> 

                 <label for="input_route">Route</label>
                 <select name="coach_type_id" class="form-control" >
                     @foreach( $coach_types as $coach_type)
                        {
                        
                        @if($coach_type->id == $coach->coach_type_id)
                        <option value={{$coach_type->id}} selected="selected"> {{$coach_type->coach_type}}</option>
                        @else
                        <option value={{$coach_type->id}} > {{$coach_type->coach_type}}</option>
                        @endif 
                        }
                        @endforeach
                 </select>

                 <label for="input_route">Route</label>
                 <select name="route_id" class="form-control" >
                     @foreach( $routes as $route)
                    {
                        @if($route->id == $coach->route_id)
                        <option value={{$route->id}} selected="selected"> {{$route->route_name}}</option>
                        @else
                        <option value={{$route->id}} > {{$route->route_name}}</option>
                        @endif
                     }
                    @endforeach
                 </select>

                 <label for="input_seat">Seat</label>
                 <select name="seat_id" class="form-control">
                     @foreach( $seats as $seat)
                    {
                     
                     @if($seat->id == $coach->seat_id)
                     <option value={{$seat->id}} selected="selected"> {{$seat->seat_name}}</option>
                     @else
                     <option value={{$seat->id}} > {{$seat->seat_name}}</option>
                     @endif
                     }
                    @endforeach
                 </select>

                 <label for="input_company">Starting Counter</label>
                 <select name="starting_counter_id" class="form-control">
                     @foreach( $counters as $counter)
                    {
                     
                     @if($counter->id == $coach->starting_counter_id)
                     <option value={{$counter->id}} selected="selected" > {{$counter->counter_name}}</option>
                     @else
                     <option value={{$counter->id}} > {{$counter->counter_name}}</option>
                     @endif

                     }
                    @endforeach
                 </select>

                 <label for="input_starting_time">Starting Time</label>
                 <input type="time" name="starting_time" id="input_starting_time" class="form-control" value={{$coach->starting_time}}> 

                 <label for="input_company">Ending Counter</label>
                 <select name="ending_counter_id" class="form-control">
                     @foreach( $counters as $counter)
                    {
                     
                     
                     @if($counter->id == $coach->ending_counter_id)
                     <option value={{$counter->id}} selected="selected" > {{$counter->counter_name}}</option>
                     @else
                     <option value={{$counter->id}} > {{$counter->counter_name}}</option>
                     @endif

                     }
                    @endforeach
                 </select>

                 <label for="input_ending_time">Ending Time</label>
                 <input type="text" name="ending_time" id="input_ending_time" class="form-control" value={{$coach->ending_time}}> 
                    <button type="submit" class = "btn btn-default"> <i class="fa fa-btn fa-plus"></i>
                    Update
                    </button>

         </form>

     </div>
 </div>

 </div>
 @endsection