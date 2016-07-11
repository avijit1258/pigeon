@extends('layouts.company_admin.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Route
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Route</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='route-list' name = 'route-list' >
                        @foreach($routes as $route)
                            <tr id='route{{$route->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$route->route_name}}</td>
                                <td class="table-text">{{\App\User::findOrFail($route->modified_by)->fullname}}</td>
                                <td class="table-text">{{$route->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('routes.edit', $route->id) }}" class="btn btn-primary">Edit</a>
                                </td>


                                <td>
                                    <form action="/routes/{{ $route->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-{{ $route->id }}" class="btn btn-danger">
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
                {!! $routes->links() !!}        
        </div>

@endsection