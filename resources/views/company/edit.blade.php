 @extends('layouts.super_admin.index')

@section('content')

        <div class="container narrow">
        <div>

        <div class="panel panel-default">
                <div class="panel-heading">
                    Please Input New Company
                </div>
                <div class="panel-body">
                
                                <form action="/companies/{{$company->id}}" method="POST" >
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT" />

                                <label for="input_company">Company Name</label>
                                <input type="text" name="company_name" id="input_company" class="form-control" value={{$company->company_name}}>

                                



                                <button type="submit" class = "btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Update
                                </button>

                            </form> 
                    </div>   
                            
                </div>
            
        
   

@endsection