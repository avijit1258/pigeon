@extends('layouts.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Places
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Full Name</th>
                        <th>UserName</th>
                        <th>Type</th>
                        <th>Active</th>
                        <th>Company</th>

                        </thead>


                        <tbody id='user-list' name = 'user-list' >
                        @foreach($users as $user)
                            <tr id='user{{$user->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$user->fullname}}</td>
                                <td class="table-text">{{$user->username}}</td>
                                <td class="table-text">{{$user->type}}</td>
                                <td class="table-text">{{$user->active}}</td>
                                <td class="table-text">{{\App\Company::find($user->company_id)->company_name}}</td>

                        
                                 <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit user</a>
                                </td>


                                <td>
                                    <form action="/route/{{ $user->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-{{ $user->id }}" class="btn btn-danger">
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
                {!! $users->links() !!}        
        </div>

@endsection