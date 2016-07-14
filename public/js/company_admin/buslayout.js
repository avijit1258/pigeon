$(document).ready(function () {

    var url = "/seats";
    $("#seat_arrange_id").click(function(){
        
        $.get(url+'/'+$('#seat_arrange_id').val(), function(data)
        {
            var Data = "<table >";
            var seat_type_id = $('#seat-type').val();
            for (var i = 1; i <= data.row; i++) {
                Data += "<tr>";
                for (var j = 1; j <= data.col; j++) {
                    var SeatNo = (i-1)*data.col+j;
                    Data += "<td><button id='" + i + "_" + j + "' class='seat_pos' data-name='seat "+SeatNo+"' data-row='"+i+"' data-col='"+j+"' data-seat-type ='"+seat_type_id+"' >Seat "+SeatNo+"</button></td>";
                }
                Data += "</tr>";
            }
            Data += "</table>";
            $("#seat").html(Data);
        });

        
    });
    
   
    $("#seat").on('click','.seat_pos', function(){
        $(this).css("background-color","gray");
        var Name = $(this).attr("data-name");
        var Row = $(this).attr("data-row");
        var Column = $(this).attr("data-col");
        var SeatPosition = $(this).attr("id");
        
        $("#name").val(Name);
        $("#seat_position").val(SeatPosition);
        $("#row").val(Row);
        $("#column").val(Column);
    });
    
    $("#submit_form").click(function(e){
        e.preventDefault();
        if($("#seat_position").val() != ""){
            var Id = $("#seat_position").val();
            $("#"+Id).attr("data-name",$("#name").val());
            $("#"+Id).attr("data-row",$("#row").val());
            $("#"+Id).attr("data-col", $("#column").val());
            $("#"+Id).attr("data-seat-type",$("#seat-type").val());
            $("#"+Id).html($("#name").val());
            if($("#status").val() == 'off'){
                $("#"+Id).css("background-color","red");
            }else{
                $("#"+Id).removeAttr("style");
            }
        }
    });
    
    var row = new Array();
    var col = new Array();
    var seat_type = new Array();
    var name = new Array();
    


    $("#save_seat").click(function(e){
        $.each($(".seat_pos"),function(){
            //console.log($(this).attr("data-status"));
            row.push($(this).attr("data-row"));
            col.push($(this).attr("data-col"));
            seat_type.push($(this).attr("data-seat-type"));
            name.push($(this).attr("data-name"));

        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formdata = {
            row : row ,
            col : col,
            seat_type : seat_type,
            name : name,
            seat_id: $('#seat_arrange_id').val(),

        }

    

        $.ajax({
            type : 'post',
            url : '/seat_arrangements/',
            data : formdata,
            dataType:'json',
            success: function(data)
            {
                alert('success');
            }
        });
    });
});