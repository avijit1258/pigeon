@extends('layouts.company_admin.index')

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
                        <th>Seat Type</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='seat_type-list' name = 'seat_type-list' >
                        @foreach($seat_types as $seat_type)
                            <tr id='seat_type{{$seat_type->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$seat_type->seat_type_name}}</td>
                                <td class="table-text">{{\App\User::findOrFail($seat_type->modified_by)->fullname}}</td>
                                <td class="table-text">{{$seat_type->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('seat_types.edit', $seat_type->id) }}" class="btn btn-primary">Edit</a>
                                </td>


                                <td>
                                    <form action="/seat_types/{{ $seat_type->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-seat-type-{{ $seat_type->id }}" class="btn btn-danger">
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
                {!! $seat_types->links() !!}        
        </div>

@endsection