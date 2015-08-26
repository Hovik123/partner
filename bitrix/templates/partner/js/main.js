$(document).ready(function () {
    $("#filter_god li").each(function () {
        $(this).click(function () {
            var param = $(this).text();
            $("#arrFilter_DATE_ACTIVE_FROM_1").val("01.01." + param);
            $("#arrFilter_DATE_ACTIVE_FROM_2").val("31.12." + param);
            $("input[name=set_filter]").trigger('click');
        });
    });
    var isClicked=false;
    var isClickDown=true;
    $("#up").click(function () {
    if(isClicked){
        $(this).addClass('active');
        $('#down').removeClass('active');
        var astrolog_content=$('.up').html();
        var viz_content=$('.down').html();
        console.log(astrolog_content);
        $(".up").html(viz_content);
        $(".down").html(astrolog_content);
        isClicked=false;
        isClickDown=true;
    }
    });

        $("#down").click(function () {
            if(isClickDown){
                $(this).addClass('active');
                $('#up').removeClass('active');
                var astrolog_content=$('.up').html();
                var viz_content=$('.down').html();
                console.log(astrolog_content);
                $(".up").html(viz_content);
                $(".down").html(astrolog_content);
                isClicked=true;
                isClickDown=false;
            }


    });
});