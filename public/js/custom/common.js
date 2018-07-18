$(document).on("click",".delete-common",function () {
    var action = $(this).attr("action");
    $(document).find("form#delete-form").removeAttr("action").attr("action",action);
});

$(document).on("click",".edit-common",function () {
    var action = $(this).attr("hint");
    var id = $(this).attr('e-id');
    // alert(id);
    var editRoute  = $("#edit-form").find("#editDetails").val()+ "/"+id;
    // alert(editRoute);
    $(document).find("form#edit-form").removeAttr("action").attr("action",action);

    $.ajax({
        url:editRoute,
        type:"GET",
        dataType:"json",
        success: function (data) {
            if(data) {
                $('form#edit-form').find('input.form-control,select.form-control,textarea.form-control').each(function (index, element) {
                    // console.log();
                    var attrId = $(element).attr('id');
                    // alert(attrId);
                    var e = data[attrId];
                    if(data[attrId] === true){
                        e= 1;
                    }else if(data[attrId] === false){
                        e=0;
                    }
                    // alert(e);
                    $(element).val(e).trigger('change');
                })
            }
        }
    });
});
