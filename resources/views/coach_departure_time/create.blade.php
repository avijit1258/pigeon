@extends('layouts.index')

@section('content')
<div class="container narrow">
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Please Input New Route Zone</div>
            <div class="panel-body">
                <div class="col-sm-4">
                    <form action="/coach_departure_times/" method="post" >
                        {{ csrf_field() }}
                        <table class="table">

                            <thead>
                                <th>Coach</th>
                                <th colspan="2">

                                    <select name="coach_id" class="form-control" >
                                        @foreach( $coaches as $coach)
                                        {
                                        <option value={{$coach->id}} > {{$coach->coach_name}}</option>
                                        }
                                        @endforeach
                                    </select>
                                </th>

                            </thead>
                            <thead>
                                <th>Sl</th>
                                <th>Counter</th>
                                <th>Time</th>
                                <th>
                                    <a href="javascript:;" onclick="Add_More_Zone()">Add More</th>
                                </thead>

                                <tbody id="counter_departure_time_list">

                                    <tr>
                                        <td class="sl">1</td>

                                        <td colspan="2">

                                            <select name="counter_id[]" class="form-control" >
                                                @foreach( $counters as $counter)
                                                {
                                                <option value={{$counter->id}} > {{$counter->counter_name}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </td>
                                        <td colspan="2">
                                        <label>Time</label>
                                        <input type="time" name="time" placeholder="Time" class="form-control">
                                            
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
    <div id="counter_load_area" style="display:none">
        <select name  ="counter_id[]" class="form-control">
            @foreach( $counters as $counter)
            {
            <option value ={{$counter->id}} > {{$counter->counter_name}}</option>
            }
    @endforeach
        </select>
    </div>
    <div id="time_area" style="display:none">
        <input type="time" name="time" placeholder="Time" class="form-control">
    </div>
    <script type="text/javascript">
    function Add_More_Zone(){
        var SelectData = $("#counter_load_area").html();
        var TimeData = $("#time_area").html();
        var Serial = 1;
        $.each($(".sl"),function(){
            var Value = parseInt($(this).html());
            if(Value>Serial){
                Serial = Value;
            }
        });
        Serial= Serial+1;
        $("#counter_departure_time_list").append("<tr><td class='sl'>"+Serial+"</td><td colspan='2'>"+SelectData+"</td><td>"+TimeData+"</td></tr>");
    }


</script>
@endsection