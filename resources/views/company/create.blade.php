@extends('layouts.super_admin.index')

@section('content')
    
       <div class="container narrow">
           <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Routes
                </div>
                <div class="panel-body">
                            <div class="col-sm-4">
                                <form action="/companies/" method="post" >
                                {{ csrf_field() }}
                                

                                <label for="input_company">Company Name</label>
                                <input type="text" name="company_name" id="input_company" class="form-control">

                                


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