@extends('layouts.company_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Buses
                </div>
                <div class="panel-body">
                
                                <form action="/buses/" method="post" >
                                {{ csrf_field() }}
                                

                                <label for="input_bus_number">Bus Number</label>
                                <input type="text" name="bus_number" id="input_bus_number" class="form-control">
                                <label for="input_seats">Seats</label>
                                <input type="text" name="seats" id="input_seats" class="form-control">
                                


                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add
                                </button>

                            </form> 
                    </div>   
                            
                </div>
           
        
   

@endsection