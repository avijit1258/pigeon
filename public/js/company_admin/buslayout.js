$(document).ready(function () {
    var Data = "<table>";
    for (var i = 1; i <= 12; i++) {
        Data += "<tr>";
        for (var j = 1; j <= 5; j++) {
            var SeatNo = (i-1)*5+j;
            Data += "<td><button id='" + i + "_" + j + "' class='seat_pos' data-name='seat "+SeatNo+"' data-status='on' data-seat-type='economy'>Seat "+SeatNo+"</button></td>";
        }
        Data += "</tr>";
    }
    Data += "</table>";
    $("#seat").html(Data);
    
    $(".seat_pos").click(function(){
        $(this).css("background-color","gray");
        var Name = $(this).attr("data-name");
        var Status = $(this).attr("data-status");
        var SeatType = $(this).attr("data-seat-type");
        var SeatPosition = $(this).attr("id");
        
        $("#status").val(Status);
        $("#name").val(Name);
        $("#seat-type").val(SeatType);
        $("#seat_position").val(SeatPosition);
    });
    
    $("#submit_form").click(function(){
        if($("#seat_position").val() != ""){
            var Id = $("#seat_position").val();
            $("#"+Id).attr("data-name",$("#name").val());
            $("#"+Id).attr("data-status",$("#status").val());
            $("#"+Id).attr("data-seat-type",$("#seat-type").val());
            $("#"+Id).html($("#name").val());
            if($("#status").val() == 'off'){
                $("#"+Id).css("background-color","red");
            }else{
                $("#"+Id).removeAttr("style");
            }
        }
    });
    
    $("#save_seat").click(function(){
        $.each($(".seat_pos"),function(){
            console.log($(this).attr("data-status"));
        })
    });
});