@extends('layouts.super_admin.index')

@section('content')
    
        <div class="container-narrow">
        <h2>List Of Zones</h2>
    
        
        <div>

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Zone Name</th>
                        <th>Modefied By</th>
                        <th>Modefied At</th>

                    </tr>
                </thead>
                <tbody id="zone-list" name="zone-list">
                    
                    @foreach ($zones as $zone)
                    <tr id="zone{{$zone->id}}">
                        <td>{{$serial++}}</td>
                        <td>{{$zone->zone_name}}</td>
                        <td>{{$zone->modified_by}}</td>
                        <td>{{$zone->modified_at}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>

            </div>
            
        </div>
    </div>
    <div class="pagination">
            {!! $zones->links() !!}        
    </div>

@endsection