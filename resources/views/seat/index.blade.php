@extends('layouts.company_admin.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Seat
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Seat </th>
                        <th>Row</th>
                        <th>Column</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='seat-list' name = 'seat-list' >
                        @foreach($seats as $seat)
                            <tr id='seat{{$seat->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$seat->seat_name}}</td>
                                <td class="table-text">{{$seat->row}}</td>
                                <td class="table-text">{{$seat->col}}</td>
                                <td class="table-text">{{\App\User::findOrFail($seat->modified_by)->fullname}}</td>
                                <td class="table-text">{{$seat->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('seats.edit', $seat->id) }}" class="btn btn-primary">Edit</a>
                                </td>


                                <td>
                                    <form action="/seats/{{ $seat->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-seat-{{ $seat->id }}" class="btn btn-danger">
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
                {!! $seats->links() !!}        
        </div>

@endsection