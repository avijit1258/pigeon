@extends('layouts.super_admin.company_admin_add')

@section('content')
    
        <div class="container-narrow">
        <h2>Super Admin</h2>
        <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New company_admin</button>
        
        
        <div>

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Company</th>
                        <th>Type</th>
                        <th>Active</th>
                        <th>Modefied By</th>
                        <th>Modefied At</th>

                    </tr>
                </thead>
                <tbody id="company-admin-list" name="company-admin-list">
                    
                    @foreach ($company_admins as $company_admin)
                    <tr id="company_admin{{$company_admin->id}}">
                        <td>{{$serial++}}</td>
                        <td>{{$company_admin->name}}</td>
                        <td>{{$company_admin->username}}</td>
                        <td>{{\App\Company::find($company_admin->company_id)->name}}</td>
                        <td>{{$company_admin->type}}</td>
                        <td>{{$company_admin->active}}</td>
                        <td>{{$company_admin->modified_by}}</td>
                        <td>{{$company_admin->modified_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$company_admin->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-company-admin" value="{{$company_admin->id}}">Delete</button>
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
                            <h4 class="modal-title" id="myModalLabel">Company Admin Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmCompany_admin_add" name="frmCompany_admin_add" class="form-horizontal" novalidate="">

                                <div class="form-group">
                                    <label for="inputName" class="col-sm-3 control-label"> Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName" class="col-sm-3 control-label">User Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="User Name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCompany" class="col-sm-3 control-label">Company </label>
                                    <div class="col-sm-9">
                                        <select name="company" class="form-control" id="company">
                                        @foreach($companies as $company)
                                            
                                                <option value= {{$company->name}} >  {{ $company->name}}
                                                </option>          
                                            
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputType" class="col-sm-3 control-label"> Type</label>
                                    <div class="col-sm-9">
                                        <select name="type" class="form-control" id="type">
                                            <option value="company_admin">Company Admin</option>
                                            <option value="manager">Manager</option>
                                            <option value="counterman">Counterman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputActive" class="col-sm-3 control-label"> Active</label>
                                    <div class="col-sm-9">
                                        <select name="active" class="form-control" id="active">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-3 control-label"> Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" id="password">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="company_admin_id" name="company_admin_id" value="0">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="pagination">
            {!! $company_admins->links() !!}        
    </div>

@endsection