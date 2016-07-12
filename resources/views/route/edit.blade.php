@extends('layouts.index')

@section('content')

<div class="container narrow">
 <div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Please Input New Route
        </div>
        <div class="panel-body">
            <div class="col-sm-4">
                <form action="/routes/{{$route->id}}" method="post" >
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />

                    <label for="input_route">Route Name</label>
                    <input type="text" name="route_name" id="input_route" class="form-control" value={{$route->route_name}}>

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