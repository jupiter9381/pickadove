<script>
    var user_id = "";
    $(".delete").click(function(e){
        user_id = $(this).attr('user-id');
    });

    $(".confirm_del").click(function(e){
        $.ajax({
            url : '/users/delete',
            type : 'post',
            dataType : 'json',
            data: {id: user_id},
            success: function(data){
                window.location.reload();
            }
        });
    });
</script>