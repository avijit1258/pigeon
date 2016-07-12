@extends('layouts.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Coach Type
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Coach Type </th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='coach-type-list' name = 'coach-type-list' >
                        @foreach($coach_types as $coach_type)
                            <tr id='coach_type{{$coach_type->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$coach_type->coach_type}}</td>
                                <td class="table-text">{{\App\User::findOrFail($coach_type->modified_by)->fullname}}</td>
                                <td class="table-text">{{$coach_type->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('coach_types.edit', $coach_type->id) }}" class="btn btn-primary">Edit </a>
                                </td>


                                <td>
                                    <form action="/coach_types/{{ $coach_type->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-coach-type-{{ $coach_type->id }}" class="btn btn-danger">
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
                {!! $coach_types->links() !!}        
        </div>

@endsection