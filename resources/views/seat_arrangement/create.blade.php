@extends('layouts.index')

@section('content')

<div class="col-lg-12 col-sm-12">
    <div class="row">
        <div id="seat" class="col-md-6">
                      
            
        </div>
        <div id="seat_and_seat_type" class="col-md-6">

            <label for="input_seat">Seat </label>
            <select name="seat_id" class="form-control" id="seat_arrange_id" >
                @foreach( $seats as $seat)
                {

                <option value={{$seat->id}} > {{$seat->seat_name}}  </option> 
                }
                @endforeach
            </select>
            

        </div>
        <div class="col-md-6">
            
            
            <table>
                <tr>
                    <td>Seat Position</td>
                    <td><input type="text" id="seat_position" value="" readonly/></td>
                </tr>
                
                <tr>
                    <td>Row</td>
                    <td><input type="text" id="row"/></td>
                </tr>
                <tr>
                    <td>Column</td>
                    <td><input type="text" id="column"/></td>
                </tr>
                <tr>
                    <td>Seat Name</td>
                    <td><input type="text" id="name"/></td>
                </tr>
                <tr>
                    <td>Seat Type</td>
                    <td>
                        <select id="seat-type">
                            @foreach( $seat_types as $seat_type)
                            {

                            <option value={{$seat_type->id}} > {{$seat_type->seat_type_name}}  </option> 
                            }
                            @endforeach 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button id="submit_form">Update Seat</button></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <button id="save_seat" class="btn btn-primary">Save Seat</button>
        </div>
        

    </div>
</div>


<script src={{asset('js/company_admin/buslayout.js')}}></script>

@endsection