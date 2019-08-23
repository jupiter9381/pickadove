<script>
    $(".select2").select2();

    $("#fieldType").change(function(e){
        $(".dropdown-section").css('display', 'none');
        if($(this).val() == "2") {
            $(".dropdown-section").css('display', 'block');
            $(".select2").select2();
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
</script>