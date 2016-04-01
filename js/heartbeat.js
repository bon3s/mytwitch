// Global variables

// Checkbox variables

var c1 = $("#c1");
var c2 = $("#c2");
var c3 = $("#c3");
var c4 = $("#c4");
// Game search and default url variables
var api_base_url = "https://api.twitch.tv/kraken/streams";
var api_search_url = "https://api.twitch.tv/kraken/search/streams?q=";
var api_suggest_url_add = "&type=suggest";
var game_filter = '';
var enurl = "https://api.twitch.tv/kraken/streams?broadcaster_language=en";
var deurl = "https://api.twitch.tv/kraken/streams?broadcaster_language=de";
var iturl = "https://api.twitch.tv/kraken/streams?broadcaster_language=it";
var hrurl = "https://api.twitch.tv/kraken/streams?broadcaster_language=hr";



// Language filter variables
var arrdata = '';
var langarr = [];
var en = "en";
var de = "de";
var hr = "hr";
var it = "it";



//Language filters (checkboxes)         
$("#c1").on('click', function() {
    
    if( $("#c1").prop( "checked" )){
        url = enurl;
        $(".stream").remove();
        getstreams();
    }
    else{
        url = api_base_url;
        $(".stream").remove();
        getstreams();
    }
       
});

$("#c2").on('click', function() {
    if( $("#c1").prop( "checked" )){
        url = deurl;
        $(".stream").remove();
        getstreams();
    }
    else{
        url = api_base_url;
        $(".stream").remove();
        getstreams();
    }

   
 
});

$("#c3").on('click', function() {

    if( $("#c1").prop( "checked" )){
        url = hrurl;
        $(".stream").remove();
        getstreams();
    }
    else{
        url = api_base_url;
        $(".stream").remove();
        getstreams();
    }

      
});

$("#c4").on('click', function() {

    if( $("#c1").prop( "checked" )){
        url = iturl;
        getstreams();
    }
    else{
        url = api_base_url;
        $(".stream").remove();
        getstreams();
    }
});

// Search by game

$(".right-menu-item").on('click', function() {
    game_filter = $(this).attr("id");
    $(".stream").remove();
    getstreams();
});

// Return to all streams

$(".headertitle").on('click', function() {
    game_filter = '';
    $(".stream").remove();
    getstreams();
});

//Ajax call as a function

function getstreams() {
  
  if (game_filter == '') {
    url = api_base_url;
  } 
  else if (game_filter == call){
    url = api_search_url + game_filter + api_suggest_url_add;
  }
  else {
    url = api_search_url + game_filter;
  }


//Ajax call, start render on success

  $.ajax({
    method: 'GET',
    url: url,
    data: {
      
      limit: 100
    },
    success: render,
    timeout: 10000

  });
  

};

function render(data) {
    console.log(data);

    //Store array 
    arrdata = data;

    // Generate containers
    $.each(data.streams, function(index,item) {
        var element="<div class=\"stream\"> <!--Stream row1element1--> <div class=\"stream-header\"> <!--Stream header--> <div class=\"avatar\" style=\"background-image: url('" + item.channel.logo + "')\" ></div> <div class=\"player-name\">" + item.channel.name + "</div> </div> <!--End Stream header--> <div class=\"stream-preview\"> <img src=" + item.preview.medium + "></img> <!--Stream preview--> </div> <!--End Stream preview--> <div class=\"stream-info\"> <!--Stream info--> <div class=\"gamename\">"+item.channel.game+"</div> <!--Game name--> <div class=\"viewdaterow\"> <!--ViewDateRow--> <div class=\"viewcount\"><i class=\"fa fa-eye\"></i>"+ item.viewers +" </div><i class=\"fa fa-circle\"></i> <!--ViewCount--> <div class=\"date\">" + item.created_at + "</div> <!--Date and time--> </div> <!--End ViewDateRow--> </div> <!--End Stream info--> </div>";
        var num = $(".stream").length;
        $('.streams-wrapper').append(element);         
        

    });
    
      $('.date').each(function() {
           var formatted = moment($(this).text(), 'YYYY-MM-DDThh:mm:ss').format('MMM DD, YYYY'); 
           $(this).text(formatted);
      });  
};
// Display streams on load
getstreams(); 

// Load and render more streams
$("#loadbutton").on('click', function() {getstreams()});  // Display streams by clicking on Load more button








    $(".streams-wrapper").on('click','.stream', function(){

            
            var streamurl = $(this).find('.player-name').text();
            var videogamename = $(this).find('.gamename').text();
            var videoviews = parseInt($(this).find('.viewcount').text(),10);
            var videodate = $(this).find('.date').text();
            var videoplayername = streamurl;
            var videoavatar = $(this).find('.avatar').attr('background-image','url').text;
            console.log(videoavatar);
            console.log(streamurl);
            var player = "<iframe src=\"http://player.twitch.tv/?channel=" + streamurl + "\" height=\"530\"width=\"930\"frameborder=\"0\"scrolling=\"no\"allowfullscreen=\"true\"> </iframe>"

        
        
       
            $(".stream").hide();
            $("#loadbutton").hide();
            $(".left-button-column").hide();
            $(".right-button-column").hide();
            $(".video").css('display','flex');
            $(".streams-wrapper").css('justify-content','center');
            $(".streams-wrapper").append("<div class=\"videopopup\"><div class=\"videoplayer\"><div class=\"video-container\"><div class=\"player\">" + player + "</div></div><div class=\"ion-android-close id=\"playerclose\"></div></div><div class=\"videoinfo\"><div class=\"videoinfoleft\"><div class=\"videogamename\">" + videogamename + "</div><div class=\"viewsanddate\"><div class=\"videoviews\"><i class=\"fa fa-eye\"></i><span>" + videoviews + "</span><i class=\"fa fa-circle\"></i><div class=\"videodate\"><span>"+ videodate +"</span></div></div></div></div></div>");

           
        });

        $(".streams-wrapper").on('click','.ion-android-close',function(){
            $('.videopopup').remove();

            $("#loadbutton").show();
            $(".left-button-column").show();
            $(".right-button-column").show();
            $(".streams-wrapper").css('justify-content','flex-start');
            getstreams();
        });
