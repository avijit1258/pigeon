@extends('layouts.company_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Coach Types
                </div>
                <div class="panel-body">
                            <div class="col-sm-4">
                                <form action="/coach_types/{{$coach_type->id}}" method="post" >
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT" />

                                <label for="input_coach_type">Coach Type</label>
                                <input type="text" name="coach_type" id="input_coach_type" class="form-control" value={{$coach_type->coach_type}}>

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