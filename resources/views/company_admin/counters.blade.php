@extends('layouts.company_admin.index')

@section('content')
    
        <div class="container-narrow">
        <h2>List Of Counters</h2>
        <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New Counter</button>

        
        <div>

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Counter Name</th>
                        <th>Company</th>
                        <th>Zone</th>
                        <th>Modefied By</th>
                        <th>Modefied At</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody id="counter-list" name="counter-list">
                    
                    @foreach ($counters as $counter)
                    <tr id="counter{{$counter->id}}">
                        <td>{{$serial++}}</td>
                        <td>{{$counter->counter_name}}</td>
                        <td>{{\App\Company::find($counter->company_id)->name}}</td>
                        <td>{{\App\Zone::find($counter->zone_id)->zone_name}}</td>
                        <td>{{$counter->modified_by}}</td>
                        <td>{{$counter->modified_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$counter->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-counter" value="{{$counter->id}}">Delete</button>
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
                            <h4 class="modal-title" id="myModalLabel">Counter Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmCounters" name="frmCounters" class="form-horizontal" novalidate="">


                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Counter Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="counter_name" name="counter_name" placeholder="Counter Name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCompany" class="col-sm-3 control-label">Company </label>
                                    <div class="col-sm-9">
                                        <select name="company" class="form-control" id="company">
                                        @foreach($companies as $company)
                                            
                                                <option value= {{$company->id}} >  {{ $company->name}}
                                                </option>          
                                            
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputZone" class="col-sm-3 control-label">Zone </label>
                                    <div class="col-sm-9">
                                        <select name="zone" class="form-control" id="zone">
                                        @foreach($zones as $zone)
                                            
                                                <option value= {{$zone->id}} >  {{ $zone->zone_name}}
                                                </option>          
                                            
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="counter_id" name="counter_id" value="0">
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    <div class="pagination">
            {!! $counters->links() !!}        
    </div>

@endsection