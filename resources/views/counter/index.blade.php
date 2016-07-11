@extends('layouts.company_admin.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Counters
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Counter Name</th>
                        <th>Zone</th>
                        <th>Company</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>

                        </thead>


                        <tbody id='counter-list' name = 'counter-list' >
                        @foreach($counters as $counter)
                            <tr id='counter{{$counter->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$counter->counter_name}}</td>
                                <td class="table-text">{{\App\Zone::findOrFail($counter->zone_id)->zone_name}}</td>
                                <td class="table-text">{{\App\Company::findOrFail($counter->company_id)->company_name}}</td>
                                <td class="table-text">{{\App\User::findOrFail($counter->modified_by)->fullname}}</td>
                                
                                <td class="table-text">{{$counter->modification_date}}</td>
                                

                        
                                 <td>
                                    <a href="{{ route('counters.edit', $counter->id) }}" class="btn btn-primary">Edit counter</a>
                                </td>


                                <td>
                                    <form action="/counters/{{ $counter->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-counter-{{ $counter->id }}" class="btn btn-danger">
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
                {!! $counters->links() !!}        
        </div>

@endsection