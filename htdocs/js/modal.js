$(document).ready(function(){
    $(".title,.linkimg").live("click", function(e){
        e.preventDefault();
        // get param
        var imgsrc = $(this).attr("src");
        var imglink = $(this).parent("a").attr("href");
        if(typeof imgsrc === "undefined"){
            imgsrc = $(this).parent("a").parent("h5").next("span").children("a").children("img").attr("src");
            imglink = $(this).parent("a").attr("href");
        }
        var modalpos = function(p){
            var pos = {};
            var mtop =  $(document).scrollTop();
            var owidth = p.outerWidth();
            var oheight = p.outerHeight();
            var wwidth = $(window).width();
            var wheight = $(window).height();
            pos.top = (function(){
                var t = (wheight / 2 - oheight /2) + mtop;
                if(t > mtop){
                    return t;
                }else{
                    return mtop;
                }
            })();
            pos.left = (function(){
                var t = (wwidth / 2 - owidth / 2);
                if(t > 0){
                    return t;
                }else{
                    return 0;
                }
            })();
            return pos;
        };

        var toppos = "";
        var leftpos = "";

        // show modal
        $("#modal").css({
            //display : "block",
            width : "500px",
            height : "800px",
            top : "80px",
            left : "20px",
            position : "absolute",
            backgroundColor : "white",
            zIndex : "9999"
        });
        $("#modalmain").append(' <div id="bigimg"> <a href="' + imglink + '" target="_blank"> <img src="' + imgsrc + '" alt="" style="width:95%; height:auto; margin:2%; border:solid #000 1px;" id="bigimgsrc"> </a> </div> ');
        $("#bigimgsrc").hover(function(){
            $(this).css("border", "solid orange 2px");
        },function(){
            $(this).css("border", "solid whitesmoke 2px");
        });
        var pos = modalpos($("#modal"));
        $("#modal").css("top", pos.top);
        $("#modal").css("left", pos.left);
        $("#modal").fadeTo(50, 1);

        var hei = $("#bigimg").height() + 200;
        $("#modal").css("height", hei);

        // modalmask
        var modalmask = "";
        var modalcss = {
            position: "absolute",
            left: "0",
            top: "0",
            width : "100%",
            height : "100%",
            zIndex: "9000",
            backgroundColor: "black",
            position : "fixed",
            display: "none"
        };
        if (!($(".ModalMask").size() > 0)) {
            modalmask = $('<div></div>');
            modalmask.css(modalcss);
            modalmask.addClass("ModalMask");
            if (!jQuery.support.style && typeof document.documentElement.style.maxHeight === "undefined") {
                modalmask.append('<span style="display:block;height:100%">&nbsp;</span>')
            }
            $("body").append(modalmask);
        }
        $(".ModalMask").fadeTo(50, 0.3);

    });

    // close modal
    $(".ModalMask:not(.modal)").live("click", function(){
        $(this).hide();
        $("#modalmain").html("");
        $("#modal").css("position", "static");
        $("#modal").css("display", "none");
    });
    /*$("#bigimg > a").live("click", function(){
        $(".ModalMask").hide();
        $("#modalmain").html("");
        $("#modal").css("position", "static");
        $("#modal").css("display", "none");
    });
    */
});
