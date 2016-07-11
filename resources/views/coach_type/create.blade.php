@extends('layouts.company_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Coach Types
                </div>
                <div class="panel-body">
                
                                <form action="/coach_types/" method="post" >
                                {{ csrf_field() }}
                                

                                <label for="input_coach_type">Coach Type</label>
                                <input type="text" name="coach_type" id="input_coach_type" class="form-control">

                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update
                                </button>

                            </form> 
                    </div>             
                </div>
           

@endsection