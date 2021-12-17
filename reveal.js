$(document).ready(function(){
    $(".header").click(function () {

        if($(".content").height() === 0){
             $(".content").animate({height: "20px"}, 500);
        }else{
            $(".content").animate({height: "0px"}, 500);
        }

    });
})