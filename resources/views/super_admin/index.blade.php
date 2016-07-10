@extends('layouts.super_admin.index')

@section('content')
    
        <div class="container-narrow">
        <h2>Super Admin</h2>
        <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New Company</button>
        
        
        <div>

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Company</th>
                        <th>Modified By</th>
                        <th>Modified At</th>
                    </tr>
                </thead>
                <tbody id="companies-list" name="companies-list">
                    
                    @foreach ($companies as $company)
                    <tr id="company{{$company->id}}">
                        <td>{{$serial++}}</td>
                        <td>{{$company->company_name}}</td>
                        <td>{{$company->modified_by}}</td>
                        <td>{{$company->modified_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$company->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-company" value="{{$company->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>

            </div>
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Company Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmCompanies" name="frmCompanies" class="form-horizontal" novalidate="">


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label"> Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="company_id" name="company_id" value="0">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="pagination">
            {!! $companies->links() !!}        
    </div>

@endsection