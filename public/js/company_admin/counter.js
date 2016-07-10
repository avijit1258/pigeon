$(document).ready(function(){

	var url = "counters";
    alert('welcome admin');

	$('#counter-list').on('click', '.open-modal', function(){
		var id = $(this).val();
        alert('i am in open modal '+id);

		$.get(url+'/'+id, function(data){

			console.log(data);
			$('#counter_id').val(data.id);
			$('#counter_name').val(data.counter_name);
			// $('#company').value(data.company);
			//$('#zone').value(data.zone);
			$('select[name="company"]').val(data.company_id);
			$('select[name="zone"]').val(data.zone_id);

			$('#btn-save').val('update');
			$('#myModal').modal('show');

		});
	});

	$('#btn-add').click(function(){
        alert('i am inside btn-add');
		$('#btn-save').val('add');
		$('#frmCounters').trigger("reset");
		$('#myModal').modal('show');
	});

	$('#counter-list').on('click', '.delete-counter', function(){

		var id = $(this).val();
        alert('i am in delete-modal');

		$.ajax({

			type: "DELETE",
            url: url + '/' + id,
            data: {  
                "_token": "{{ csrf_token() }}",
                 
                },
            success: function (data) {
                console.log(data);

                $("#counter" + id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
		});
	});

	$('#btn-save').click(function (e) {
    
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // })

        e.preventDefault(); 

        var formData = {
            
            counter_name: $('#counter_name').val(),
            company_id: $('#company').val(),
            zone_id: $('#zone').val(),
            
            // description: $('#description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();

        var type = "POST"; //for creating new resource
        var id = $('#counter_id').val();
        var my_url = url;

        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var counter = '<tr id="counter' + data.id + '"><td>' + $(".open-modal").length  + '</td><td>' + data.counter_name + '</td><td>' + data.company + '</td><td>' + data.zone + '</td><td>' + data.modified_by + '</td><td>' + data.modified_at + '</td>';
                counter += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                counter += '<button class="btn btn-danger btn-xs btn-delete delete-counter" value="' + data.id + '">Delete</button></td></tr>';

                if (state == "add"){ //if user added a new record
                    $('#counter-list').append(counter);
                }else{ //if user updated an existing record

                    $("#counter" + id).replaceWith( counter );
                }

                $('#frmCounters').trigger("reset");

                $('#myModal').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            },
        });
    });

});

//\Auth::user()->name
//\Carbon::now()->toDateTimeString()