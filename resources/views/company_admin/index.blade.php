@extends('layouts.company_admin.index')

@section('content')
    
    <div class="col-lg-12 col-sm-12">
                    <div class="row">
                    <div id="seat" class="col-md-6"></div>
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td>Seat Position</td>
                                <td><input type="text" id="seat_position" value="" readonly/></td>
                            </tr>
                            <tr>
                                <td>Seat Status</td>
                                        <td>
                                            <select id="status">
                                                
                                                <option value="on">On</option>
                                                <option value="off">Off</option>
                                    </select>
                                        </td>
                            </tr>
                            <tr>
                                <td>Seat Name</td>
                                <td><input type="text" id="name"/></td>
                            </tr>
                            <tr>
                                <td>Seat Type</td>
                                <td>
                                    <select id="seat-type">
                                        <option value="economy">economy</option>
                                        <option value="business">business</option>
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

@endsection