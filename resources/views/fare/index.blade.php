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
                        <th>Coach Name</th>
                        <th>Starting Time</th>
                        <th>Ending Time</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>

                        </thead>


                        <tbody id='coach-list' name = 'coach-list' >
                        @foreach($coaches as $coach)
                            <tr id='coach{{$coach->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$coach->coach_name}}</td>
                                <td class="table-text">{{$coach->starting_time}}</td>
                                <td class="table-text">{{$coach->ending_time}}</td>
                                
                                <td class="table-text">{{\App\User::findOrFail($coach->modified_by)->fullname}}</td>
                                
                                <td class="table-text">{{$coach->modification_date}}</td>
                                

                        
                                 <td>
                                    <a href="{{ route('coaches.edit', $coach->id) }}" class="btn btn-primary">Edit coach</a>
                                </td>


                                <td>
                                    <form action="/coaches/{{ $coach->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-coach-{{ $coach->id }}" class="btn btn-danger">
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
                {!! $coaches->links() !!}        
        </div>

@endsection