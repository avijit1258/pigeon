@extends('layouts.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Coach
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Route</th>
                        <th>Zone</th>
                        <th>Sequel</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>

                        </thead>


                        <tbody id='route_zone-list' name = 'route_zone-list' >
                        @foreach($route_zones as $route_zone)
                            <tr id='route_zone{{$route_zone->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{\App\Route::find($route_zone->route_id)->route_name}}</td>
                                <td class="table-text">{{\App\Zone::find($route_zone->zone_id)->zone_name}}</td>
                                <td class="table-text">{{$route_zone->sequel}}</td>
                                
                                <td class="table-text">{{\App\User::findOrFail($route_zone->modified_by)->fullname}}</td>
                                
                                <td class="table-text">{{$route_zone->modification_date}}</td>
                        
                                 <td>
                                    <a href="{{ route('route_zones.edit', $route_zone->id) }}" class="btn btn-primary">Edit </a>
                                </td>


                                <td>
                                    <form action="/route_zones/{{ $route_zone->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-zone-{{ $route_zone->id }}" class="btn btn-danger">
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
        </div>
        </div>
            
        
        <div class="pagination">
                {!! $route_zones->links() !!}        
        </div>

@endsection