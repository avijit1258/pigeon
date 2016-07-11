 @extends('layouts.company_admin.index')

@section('content')
    
        <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Counters
                </div>
                <div class="panel-body">
                
                                <form action="/counters/{{$counter->id}}" method="POST" >
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT" />

                                <label for="input_counter">Counter Name</label>
                                <input type="text" name="counter_name" id="input_counter" class="form-control" value={{$counter->counter_name}}>

                               
                                <label for="input_zone">Zone</label>
                                <select name="zone_id" class="form-control">
                                    @foreach( $zones as $zone)
                                    {

                                        <option value={{$zone->id}} > {{$zone->zone_name}}  </option> 
                                    }
                                    <option value={{$counter->zone_id}} selected="selected"> {{\App\Zone::find($counter->zone_id)->zone_name}}  </option>
                                        @endforeach
                                </select>

                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update
                                </button>

                            </form> 
                    </div>   
                            
                </div>
            
        
   

@endsection