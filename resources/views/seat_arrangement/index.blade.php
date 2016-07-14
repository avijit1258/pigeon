@extends('layouts.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete seat_arrangement
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Seat</th>
                        <th>Row</th>
                        <th>Column</th>
                        <th>Seat Type</th>
                        <th>Seat Name</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>

                        </thead>


                        <tbody id='seat_arrangement-list' name = 'seat_arrangement-list' >
                        @foreach($seat_arrangements as $seat_arrangement)
                            <tr id='seat_arrangement{{$seat_arrangement->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{\App\Seat::find($seat_arrangement->seat_id)->seat_name}}</td>
                                <td class="table-text">{{$seat_arrangement->row_id}}</td>
                                <td class="table-text">{{$seat_arrangement->col_id}}</td>
                                <td class="table-text">{{\App\SeatType::find($seat_arrangement->seat_type_id)->seat_type_name}}</td>
                                <td class="table-text">{{$seat_arrangement->seat_name}}</td>
                                
                                <td class="table-text">{{\App\User::findOrFail($seat_arrangement->modified_by)->fullname}}</td>
                                
                                <td class="table-text">{{$seat_arrangement->modification_date}}</td>
                                

                        
                                 <td>
                                    <a href="{{ route('seat_arrangements.edit', $seat_arrangement->id) }}" class="btn btn-primary">Edit </a>
                                </td>


                                <td>
                                    <form action="/seat_arrangements/{{ $seat_arrangement->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-seat_arrangement-{{ $seat_arrangement->id }}" class="btn btn-danger">
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
                {!! $seat_arrangements->links() !!}        
        </div>

@endsection