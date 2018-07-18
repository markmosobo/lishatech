
$(document).ready(function () {
//            alert('ready');
    $("body").on("click",".attach-pms-btn", function () {
//                alert("clicked");
        var roleId = $(this).attr('r-id');
        $('#id-holder').val(roleId);
        var url = $('#table-url').val()+'/'+ roleId;
        // alert(url);

        var table = $('#permissions-table').DataTable({
            destroy:true,
            processing: true,
            serverSide: true,
            width:"100%",
            ajax: url,
            columns: [
//                    { data: 'id', name: 'id' },
                { data: 'route_name', name: 'route_name' },
                { data: 'id', name: 'id' }
            ]
        });

    }).on('click','.menu-permission',function () {
        var roleId = $('#id-holder').val();
        var routeId = $(this).val();
        var url = $('#attach-route').val();


        if($(this).is(":checked")){
            allocateDissalocateMenu("allocate",roleId,routeId,url)
        }else{
            allocateDissalocateMenu("dissallocate",roleId,routeId,url)
        }
    });

    function allocateDissalocateMenu(action,roleId,routeId, url){
        var data = {
            'action':action,
            'role_id': roleId,
            'route_id':routeId
        };
        console.log(data);
        $.ajax({
           url: url,
            type: "POST",
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('#crf-token').val()
            },
            data: data,
            success: function (data) {

            }
        });
    }
});


