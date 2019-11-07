
$(document).ready(function(){

	$('#current_pwd').keyup(function () {
        var current_pwd = $('#current_pwd').val();
        $.ajax({
            type: 'get',
            url: '/admin/check-pwd',
            data: {current_pwd:current_pwd},
            success:function (resp) {
                if (resp=='false') {
                    $('#chkPwd').html('<font color="red">Current Password is Incorrect</font>');
                } else if (resp=='true') {
                    $('#chkPwd').html('<font color="green">Current Password is Correct</font>');
                }
            },error:function () {
                alert('Error');
            }
        })
    })

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();

	$('select').select2();

	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    // Add Category Validation
    $("#add_category").validate({
		rules:{
			category_name:{
				required:true
			},
			description:{
				required:true,
			},
			url:{
				required:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    // Edit Category Validation
    $("#edit_category").validate({
		rules:{
			category_id:{
				required:true
			},
			description:{
				required:true,
			},
			url:{
				required:true,
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    // add article Validation
    $("#add_article").validate({
		rules:{
			article_id:{
				required:true
			},
			title:{
				required:true
			},
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    // edit article Validation
    $("#edit_article").validate({
        rules:{
            article_id:{
                required:true
            },
            title:{
                required:true
            },
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#delCat").click(function () {
        if (confirm('Are you sure you want to delete this Category?')) {
            return true;
        }
        return false;
    })

    $("#delArticle").click(function () {
        if (confirm('Are you sure you want to delete this Article?')) {
            return true;
        }
        return false;
    })

    // $(".deleteRecord").click(function () {
    //     var id = $(this).attr('rel');
    //     var deleteFunction = $(this).attr('rel1');
    //     Swal.fire({
    //         title: "Are you sure?",
    //         text: "You wil not be able to recover this record again!",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonClass: "btn-danger",
    //         confirmButtonText: "Yes, delete it!"
    //     },
    //         function () {
    //            window.location.href="/admin/" + deleteFunction + "/" + id;
    //         });
    // });

    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '' +
            '<div class="controls">' +
            '<textarea type="text" name="content[]" id="description" placeholder="段落文字"></textarea>' +
            '<div class="uploader" id="uniform-cover">' +
            '<div class="uploader" id="uniform-cover">' +
            '<input type="file" name="image[]" id="cover" size="19" style="opacity: 0;">' +
            '<span class="filename">No file selected</span>' +
            '<span class="action">Choose File</span>' +
            '</div>' +
            '<span class="filename">No file selected</span>' +
            '<span class="action">Choose File</span>' +
            '</div>' +
            '<a href="javascript:void(0);" class="remove_button">Remove</a>' +
            '</div>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

});
