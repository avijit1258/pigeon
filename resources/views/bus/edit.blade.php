@extends('layouts.company_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Buses
                </div>
                <div class="panel-body">
                
                                <form action="/buses/{{$bus->id}}" method="post" >
                                {{ csrf_field() }}
                                 <input type="hidden" name="_method" value="PUT" />

                                <label for="input_bus_number">Bus Number</label>
                                <input type="text" name="bus_number" id="input_bus_number" class="form-control" value={{$bus->bus_number}}>
                                <label for="input_seats">Seats</label>
                                <input type="text" name="seats" id="input_seats" class="form-control" value={{$bus->seats}}>
                                


                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update
                                </button>

                            </form> 
                    </div>   
                            
                </div>
           
            

@endsection