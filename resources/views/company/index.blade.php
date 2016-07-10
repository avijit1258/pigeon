@extends('layouts.super_admin.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Company
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Company Name</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='company-list' name = 'company-list' >
                        @foreach($companies as $company)
                            <tr id='company{{$company->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$company->company_name}}</td>
                                <td class="table-text">{{$company->modified_by}}</td>
                                <td class="table-text">{{$company->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit company</a>
                                </td>


                                <td>
                                    <form action="/companies/{{ $company->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-{{ $company->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        
            
        
        <div class="pagination">
                {!! $companies->links() !!}        
        </div>

@endsection