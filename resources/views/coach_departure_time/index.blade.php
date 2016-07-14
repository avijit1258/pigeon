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
                        <th>Coach</th>
                        <th>Counter</th>
                        <th>Time</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>

                        </thead>


                        <tbody id='coach_departure_time-list' name = 'coach_departure_time-list' >
                        @foreach($coach_departure_times as $coach_departure_time)
                            <tr id='coach_departure_time{{$coach_departure_time->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{\App\Coach::find($coach_departure_time->coach_id)->coach_name}}</td>
                                <td class="table-text">{{\App\Counter::find($coach_departure_time->counter_id)->counter_name}}</td>
                                
                                <td class="table-text">{{$coach_departure_time->time}}</td>
                                <td class="table-text">{{\App\User::findOrFail($coach_departure_time->modified_by)->fullname}}</td>
                                
                                <td class="table-text">{{$coach_departure_time->modification_date}}</td>
                        
                                 <td>
                                    <a href="{{ route('coach_departure_times.edit', $coach_departure_time->id) }}" class="btn btn-primary">Edit </a>
                                </td>


                                <td>
                                    <form action="/coach_departure_times/{{ $coach_departure_time->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-route-zone-{{ $coach_departure_time->id }}" class="btn btn-danger">
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
                {!! $coach_departure_times->links() !!}        
        </div>

@endsection