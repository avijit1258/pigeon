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
                <form action="/users/" method="post" >
                    {{ csrf_field() }}
                    

                    <label for="input_company">Full Name</label>
                    <input type="text" name="fullname" id="input_company" class="form-control">

                    <label for="input_user">User Name</label>
                    <input type="text" name="username" id="input_user" class="form-control">

                    <label for="input_password">Password</label>
                    <input type="text" name="password" id="input_password" class="form-control">

                    
                    <label for="input_company">Company</label>
                    <select name="company_id" class="form-control">
                        @foreach( $companies as $company)
                        {

                        <option value={{$company->id}} > {{$company->company_name}}  </option> 
                    }
                    @endforeach
                </select>

                <label for="input_type">Type</label>
                <select name="type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="counterman">Counterman</option>
                    <option value="online_sell">Online Sell</option>
                    
                </select>

                <label for="input_active">Active</label>
                <select name="active" class="form-control">
                    <option value=1>1</option>
                    <option value=0>0</option>
                    
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