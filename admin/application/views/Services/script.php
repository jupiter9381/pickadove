<script>
    var service_id = "";
    $(".delete").click(function(e){
        service_id = $(this).attr('service-id');
    });

    $(".confirm_del").click(function(e){
        console.log(service_id);
        $.ajax({
            url : '/services/delete',
            type : 'post',
            dataType : 'json',
            data: {id: service_id},
            success: function(data){
                window.location.reload();
            }
        });
    });
</script>