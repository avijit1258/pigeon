@extends('layouts.company_admin.index')

@section('content')

<div class="container narrow">
 <div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Counters
        </div>
        <div class="panel-body">
            <div class="col-sm-4">
                <form action="/counters/" method="post" >
                    {{ csrf_field() }}
                    

                    <label for="input_counter">Counter Name</label>
                    <input type="text" name="counter_name" id="input_counter" class="form-control">

                    
                    <label for="input_company">Zone</label>
                    <select name="zone_id" class="form-control">
                        @foreach( $zones as $zone)
                        {

                        <option value={{$zone->id}} > {{$zone->zone_name}}  </option> 
                    }
                    @endforeach
                </select>

                
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