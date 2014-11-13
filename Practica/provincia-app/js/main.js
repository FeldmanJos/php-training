$(function(){
    $("#searchbox").keyup(function(){
        var search = $(this).val();
        if (search.length>=2){
            $.ajax({
                url: 'filter_province.php',
                data: {"data": search},
                success: function(response) {
                    alert (response);
                }
            });
        }
    });
})();