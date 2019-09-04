<script type="text/javascript">
    var review_id = "";
    $(".delete").click(function(e){
        review_id = $(this).attr('review-id');
    });

    $(".confirm_del").click(function(e){
        $.ajax({
            url : '/review/delete',
            type : 'post',
            dataType : 'json',
            data: {id: review_id},
            success: function(data){
                window.location.reload();
            }
        });
    });
</script>