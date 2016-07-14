@extends('layouts.index')

@section('content')
<div class="container narrow">
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Please Input New Route Zone</div>
            <div class="panel-body">
                <div class="col-sm-4">
                    <form action="/route_zones/" method="post" >
                        {{ csrf_field() }}
                        <table class="table">

                            <thead>
                                <th>Route</th>
                                <th colspan="2">

                                    <select name="route_id" class="form-control" >
                                        @foreach( $routes as $route)
                                    {
                                        <option value={{$route->id}} > {{$route->route_name}}</option>
                                        }
                                    @endforeach
                                    </select>
                                </th>

                            </thead>
                            <thead>
                                <th>Sl</th>
                                <th>Zone</th>
                                <th>
                                    <a href="javascript:;" onclick="Add_More_Zone()">Add More</th>
                                </thead>

                                <tbody id="route_zone_list">

                                    <tr>
                                        <td class="sl">1</td>

                                        <td colspan="2">

                                            <select name="zone_id[]" class="form-control" >
                                                @foreach( $zones as $zone)
                                    {
                                                <option value={{$zone->id}} > {{$zone->zone_name}}</option>
                                                }
                                    @endforeach
                                            </select>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>

                            <button type="submit" class = "btn btn-default"> <i class="fa fa-btn fa-plus"></i>
                                Save
                            </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="zone_load_area" style="display:none">
        <select name  ="zone_id[]" class="form-control">
            @foreach( $zones as $zone)
    {
            <option value ={{$zone->id}} > {{$zone->zone_name}}</option>
            }
    @endforeach
        </select>
    </div>
    <script type="text/javascript">
    function Add_More_Zone(){
        var SelectData = $("#zone_load_area").html();
        var Serial = 1;
        $.each($(".sl"),function(){
            var Value = parseInt($(this).html());
            if(Value>Serial){
                Serial = Value;
            }
        });
        Serial= Serial+1;
        $("#route_zone_list").append("<tr><td class='sl'>"+Serial+"</td><td colspan='2'>"+SelectData+"</td></tr>");
    }


</script>
    @endsection