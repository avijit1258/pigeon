@extends('layouts.company_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Seat Type
                </div>
                <div class="panel-body">
                
                                <form action="/seat_types/" method="post" >
                                {{ csrf_field() }}
                                

                                <label for="input_seat_type">Seat type</label>
                                <input type="text" name="seat_type_name" id="input_seat_type" class="form-control">

                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add
                                </button>

                            </form> 
                    </div>   
                            
                </div>
           </div>
       </div>
            
        
   

@endsection