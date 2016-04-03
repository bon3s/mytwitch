<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>myTwitch</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>

</head>


<body>

  <div class="container scotch-panel" id="super-container">


    <div class="left-menu-wrapper">
      <div class="left-menu-container">

        <div class="left-menu-item" id="english"><span class="language">English</span>
          <div class="checkboxes">

            <input type="checkbox" id="c1" />
            <label for="c1">
              <div></div>
            </label>
          </div>
        </div>

        <div class="left-menu-item" id="german"><span class="language">German</span>
          <div class="checkboxes">

            <input type="checkbox" id="c2" />
            <label for="c2">
              <div></div>
            </label>
          </div>
        </div>

        <div class="left-menu-item" id="croatian"><span class="language">Croatian</span>
          <div class="checkboxes">

            <input type="checkbox" id="c3" />
            <label for="c3">
              <div></div>
            </label>
          </div>
        </div>

        <div class="left-menu-item" id="italian"><span class="language">Italian</span>
          <div class="checkboxes">

            <input type="checkbox" id="c4" />
            <label for="c4">
              <div></div>
            </label>
          </div>
        </div>

      </div>
    </div>

    <div class="left-button-column"><i class="fa fa-filter toggle-left" id="buttonleft"></i></div>

    <div class="content-wrapper">
      <div class="overlay"></div>



      <div class="header-wrapper">

        <div class="header">
          <div class="headertitle">
            <div class="whitetitle">TWITCH</div><i class="glyphtitle fa fa-play-circle"></i>
            <div class="bluetitle">TV</div>
          </div>
        </div>
      </div>



      <div class="streams-wrapper">


      </div>
      <!--End Stream-wrapper-->

      <div class="loadmore">
        <div id="loadbutton">
          <div id="buttontext">Load
            <br>More
          </div>
        </div>
      </div>


    </div>
    <!--End Content wrapper-->

    <div class="right-button-column">
      <i class="glyphicon glyphicon-menu-hamburger toggle-right" id="buttonright"></i>

    </div>







    <div class="right-menu-wrapper">

      <div class="right-menu-container">

        <div class="right-menu-item" id="leagueoflegends">League of legends</div>
        <div class="right-menu-item" id="dota2">Dota 2</div>
        <div class="right-menu-item" id="hearthstone">Hearthstone</div>
        <div class="right-menu-item" id="counterstrike">Counter<span id="minus"> - </span>Strike</div>
        <div class="right-menu-item" id="call">Call of Duty</div>
        <div class="right-menu-item" id="minecraft">Minecraft</div>
        <div class="right-menu-item" id="overwatch">Overwatch</div>
        <div class="right-menu-item" id="xcom">XCOM 2</div>
        <div class="right-menu-item" id="starcraft">Starcraft II</div>



      </div>

    </div>

    <!-- Include jQuery -->

    <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/scotchPanels.js"></script>
    <script src="js/heartbeat.js"></script>
    <script src="http://momentjs.com/downloads/moment.min.js" async></script>

    <script type="text/javascript">
      $('.left-menu-wrapper').scotchPanel({
        containerSelector: 'body', // As a jQuery Selector
        direction: 'left', // Make it toggle in from the left
        duration: 200, // Speed in ms how fast you want it to be
        transition: 'ease', // CSS3 transition type: linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier(P1x,P1y,P2x,P2y)
        clickSelector: '.toggle-left', // Enables toggling when clicking elements of this class
        distanceX: '400px', // Size fo the toggle
        enableEscapeKey: true // Clicking Esc will close the panel
      });

      $('.right-menu-wrapper').scotchPanel({
        containerSelector: 'body', // As a jQuery Selector
        direction: 'right', // Make it toggle in from the right
        duration: 200, // Speed in ms how fast you want it to be
        transition: 'ease', // CSS3 transition type: linear, ease, ease-in, ease-out, ease-in-out, cubic-bezier(P1x,P1y,P2x,P2y)
        clickSelector: '.toggle-right', // Enables toggling when clicking elements of this class
        distanceX: '400px', // Size fo the toggle
        enableEscapeKey: true // Clicking Esc will close the panel
      });

    </script>

    <script type="text/javascript">
      $('#buttonleft').on('click', function() {
        $(this)
          .toggleClass('fa fa-filter')
          .toggleClass('ion-close');



      });

    </script>

    <script type="text/javascript">
      $('#buttonright').on('click', function() {
        $(this)
          .toggleClass('glyphicon-menu-hamburger')
          .toggleClass('ion-close');


      });

    </script>





</body>

</html>
