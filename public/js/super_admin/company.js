$(document).ready(function(){

    // alert($(".open-modal").length);

    var url = "companies";

    //display modal form for company editing
    //$('.open-modal').click(function(){
    $('#companies-list').on('click','.open-modal',function(){
        var company_id = $(this).val();

        $.get(url + '/' + company_id, function (data) {
            //success data
            console.log(data);
            $('#company_id').val(data.id);
            $('#name').val(data.name);
            $('#btn-save').val("update");

            $('#myModal').modal('show');
        }) 
    });

    //display modal form for creating new company
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmCompanies').trigger("reset");
        $('#myModal').modal('show');
    });

    //delete company and remove it from list
   // $('.delete-company').click(function(){
    $('#companies-list').on('click','.delete-company',function(){
        var company_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + company_id,
            success: function (data) {
                console.log(data);

                $("#company" + company_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //create new company / update existing company
    //$('#btn-save').on('click',function(e){

    $("#btn-save").click(function (e) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            name: $('#name').val(),
            // description: $('#description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();

        var type = "POST"; //for creating new resource
        var company_id = $('#company_id').val();;
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + company_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var company = '<tr id="company' + data.id + '"><td>' + $(".open-modal").length + '</td><td>' + data.name + '</td><td>' + data.modified_by + '</td><td>' + data.modified_at + '</td>';
                company += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                company += '<button class="btn btn-danger btn-xs btn-delete delete-company" value="' + data.id + '">Delete</button></td></tr>';

                if (state == "add"){ //if user added a new record
                    $('#companies-list').append(company);
                }else{ //if user updated an existing record

                    $("#company" + company_id).replaceWith( company );
                }

                $('#frmCompanies').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});