$(document).ready(function(){

    // alert($(".open-modal").length);

    var url = "users";

    //display modal form for company editing
    //$('.open-modal').click(function(){
    $('#company-admin-list').on('click','.open-modal',function(){
        var company_admin_id = $(this).val();

        $.get(url + '/' + company_admin_id, function (data) {
            //success data
            console.log(data);
            $('#company_admin_id').val(data.id);
            $('#name').val(data.name);
            $('#username').val(data.username);
            $('#type').val(data.type);
            $('#active').val(data.active);
            // $('#password').val(data.password);
            $('#btn-save').val("update");

            $('#myModal').modal('show');
        }) 
    });

    //display modal form for creating new company
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmCompany_admin_add').trigger("reset");
        $('#myModal').modal('show');
    });

    //delete company and remove it from list
   // $('.delete-company').click(function(){
    $('#company-admin-list').on('click','.delete-company-admin',function(){
        var company_admin_id = $(this).val();

        $.ajax({

            type: "DELETE",
            url: url + '/' + company_admin_id,
            success: function (data) {
                console.log(data);

                $("#company_admin" + company_admin_id).remove();
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
            username: $('#username').val(),
            company: $('#company').val(),
            type: $('#type').val(),
            password: $('#password').val(),
            active: $('#active').val(),
            // description: $('#description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();

        var type = "POST"; //for creating new resource
        var company_admin_id = $('#company_admin_id').val();;
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + company_admin_id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var company_admin = '<tr id="company_admin' + data.id + '"><td>' + $(".open-modal").length  + '</td><td>' + data.name + '</td><td>' + data.username + '</td><td>' + data.company + '</td><td>' + data.type + '</td><td>' + data.active + '</td><td>' + data.modified_by + '</td><td>' + data.modified_at + '</td>';
                company_admin += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                company_admin += '<button class="btn btn-danger btn-xs btn-delete delete-company" value="' + data.id + '">Delete</button></td></tr>';

                if (state == "add"){ //if user added a new record
                    $('#company-admin-list').append(company_admin);
                }else{ //if user updated an existing record

                    $("#company_admin" + company_admin_id).replaceWith( company_admin );
                }

                $('#frmCompany_admin_add').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});