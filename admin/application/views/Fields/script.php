<script>
    $(".select2").select2();

    $("#fieldType").change(function(e){
        $(".dropdown-section").css('display', 'none');
        $(".contact-section").css('display', 'none');
        if($(this).val() == "2") {
            $(".dropdown-section").css('display', 'block');
            $(".select2").select2();
        }
        if($(this).val() == "3") {
            $(".contact-section").css('display', 'block');
        }
    });
    var dropdownValues = [];
    $(".doAddValue").click(function(e){
        dropdownValues.push($(".dropdown-value").val());
        var html = "";
        for(var i = 0; i < dropdownValues.length; i++) {
            html += "<option>"+dropdownValues[i]+"</option>";
        }
        $(".select2").html(html);
        $(".select2").select2();
        $("#dropdownModal").modal("hide");
        $(".dropdown-value").val("");
    });

    $('.custom-file input').change(function (e) {
        $(this).next('.custom-file-label').html(e.target.files[0].name);
    });

    var field_id = "";
    $(".delete").click(function(e){
        field_id = $(this).attr('field-id');
        console.log(field_id);
    });

    $(".confirm_del").click(function(e){
        console.log(field_id);
        $.ajax({
            url : '/fields/delete',
            type : 'post',
            dataType : 'json',
            data: {id: field_id},
            success: function(data){
                window.location.reload();
            }
        });
    });
</script>