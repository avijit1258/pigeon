@extends('layouts.company_admin.index')

@section('content')
        <div class="container narrow">
            <div>
                <div class="panel panel-default">
                <div class="panel-heading">
                    Edit and Delete Bus
                </div>
                <div class="panel-body">
                    <table class="table table-striped place-table">
                        <thead>
                        <th>Serial</th>
                        <th>Bus Number</th>
                        <th>Seats</th>
                        <th>Modified By</th>
                        <th>Modification Date</th>
                        <th>Action</th>

                        </thead>


                        <tbody id='bus-list' name = 'bus-list' >
                        @foreach($buses as $bus)
                            <tr id='bus{{$bus->id}}'>

                                <td class="table-text">{{$serial++}}</td>
                                <td class="table-text">{{$bus->bus_number}}</td>
                                <td class="table-text">{{$bus->seats}}</td>
                                <td class="table-text">{{\App\User::find($bus->modified_by)->fullname}}</td>
                                <td class="table-text">{{$bus->modification_date}}</td>
                                
                        
                                 <td>
                                    <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-primary">Edit</a>
                                </td>


                                <td>
                                    <form action="/buses/{{ $bus->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-bus-{{ $bus->id }}" class="btn btn-danger">
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
                {!! $buses->links() !!}        
        </div>

@endsection