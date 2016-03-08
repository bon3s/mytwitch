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




  <!-- Include jQuery -->
  <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>
  <script src="js/scotchPanels.js"></script>
 









</head>


<body>

  <div class="container scotch-panel" id="super-container">

    <div class="left-menu-wrapper">
      <div class="left-menu-container">

        <div class="left-menu-item"><span class="language">English</span>
          <div class="checkboxes">

            <input type="checkbox" id="c1" />
            <label for="c1"><div></div></label>
          </div>
        </div>

        <div class="left-menu-item"><span class="language">German</span>
          <div class="checkboxes">

            <input type="checkbox" id="c2" />
            <label for="c2"><div></div></label>
          </div>
        </div>

        <div class="left-menu-item"><span class="language">Croatian</span>
          <div class="checkboxes">

            <input type="checkbox" id="c3" />
            <label for="c3"><div></div></label>
          </div>
        </div>

        <div class="left-menu-item"><span class="language">Italian</span>
          <div class="checkboxes">

            <input type="checkbox" id="c4" />
            <label for="c4"><div></div></label>
          </div>
        </div>

      </div>
    </div>

    <div class="content-wrapper">

      <div class="button-wrapper">

        <i class="fa fa-filter toggle-left" id="buttonleft"></i>
        <i class="glyphicon glyphicon-menu-hamburger toggle-right" id="buttonright"></i>

      </div>

      <div class="header-wrapper">
        <div class="header">
          <div class="whitetitle">TWITCH</div><i class="glyphtitle fa fa-play-circle"></i>
          <div class="bluetitle">TV</div>
        </div>
      </div>



      <div class="streams-wrapper">
        <!--Stream wrapper-->

        <div class="streams-row">
          <!--Stream row-->

          <div class="stream" id="r1s1">
            <!--Stream row1element1-->

            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">c9neaky</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <!--Stream video-->

              <iframe class="videoplayer" src="https://www.youtube.com/embed/DPlvOZtzl6Q" autoplay=false; frameborder="0" ; scrolling="no" ; height=100%; width=100%;></iframe>



            </div>
            <!--End Stream video-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename">League of Legends</div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i>23469</div><i class="fa fa-circle"></i>
                <!--ViewCount-->
                <div class="date">Feb 11,2016</div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->

          </div>
          <!--End Stream row1element1-->

          <div class="stream" id="r1s2">
            <!--Stream row1element2-->

            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">Voyboy solo Q Guru @ Work</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <iframe class="videoplayer" src="https://www.youtube.com/embed/CnqxgsJLOeA" autoplay=false; frameborder="0" ; scrolling="no" ; height=100%; width=100%;></iframe>
              <!--Stream video-->
            </div>
            <!--End Stream video-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename">Hearthstone</div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i>10553</div><i class="fa fa-circle"></i>

                <!--ViewCount-->
                <div class="date">Feb 11,2016</div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->
          </div>
          <!--End Stream row1element2-->

          <div class="stream" id="r1s3">
            <!--Stream row1element3-->

            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">SirchEz</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <!--Stream video-->
            </div>
            <!--End Stream video-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename"></div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i>
                </div><i class="fa fa-circle"></i>
                <!--ViewCount-->
                <div class="date"></div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->

          </div>
          <!--End Stream row1element3-->



        </div>
        <!--End Stream row-->

        <div class="streams-row">
          <!--Stream row-->

          <div class="stream" id="r1s1">
            <!--Stream row1element1-->
            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">c9neaky</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <!--Stream video-->
            </div>
            <!--End Stream header-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename"></div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i>
                </div><i class="fa fa-circle"></i>
                <!--ViewCount-->
                <div class="date"></div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->


          </div>
          <!--End Stream row1element1-->

          <div class="stream" id="r1s2">
            <!--Stream row1element2-->

            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">Voyboy solo Q Guru @ Work</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <!--Stream video-->
            </div>
            <!--End Stream video-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename">League of Legends</div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i>23554
                </div><i class="fa fa-circle"></i>
                <!--ViewCount-->
                <div class="date">Feb 11, 2016</div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->

          </div>
          <!--End Stream row1element2-->

          <div class="stream" id="r1s3">
            <!--Stream row1element3-->

            <div class="stream-header">
              <!--Stream header-->
              <div class="avatar"></div>
              <div class="player-name">SirchEz</div>
            </div>
            <!--End Stream header-->
            <div class="stream-video">
              <!--Stream video-->
            </div>
            <!--End Stream video-->
            <div class="stream-info">
              <!--Stream info-->
              <div class="gamename"></div>
              <!--Game name-->
              <div class="viewdaterow">
                <!--ViewDateRow-->

                <div class="viewcount"><i class="fa fa-eye"></i></div>
                <!--ViewCount-->
                <div class="date"></div>
                <!--Date and time-->

              </div>
              <!--End ViewDateRow-->
            </div>
            <!--End Stream info-->

          </div>
          <!--End Stream row1element3-->



        </div>
        <!--End Stream row-->
        <div class="loadmore">
          <div id="loadbutton">
            <div id="buttontext">Load<br>More
              </div>
          </div>
        </div>


      </div>
      <!--End Stream-wrapper-->


    </div>
    <!--End Content wrapper-->







    <div class="right-menu-wrapper">

      <div class="right-menu-container">

        <div class="right-menu-item">League of legends</div>
        <div class="right-menu-item">Dota 2</div>
        <div class="right-menu-item">Hearthstone</div>
        <div class="right-menu-item">Counter<span id="minus"> - </span>Strike</div>
        <div class="right-menu-item">Call of Duty</div>
        <div class="right-menu-item">Minecraft</div>
        <div class="right-menu-item">Overwatch</div>
        <div class="right-menu-item">XCOM 2</div>
        <div class="right-menu-item">Starcraft II</div>



      </div>

    </div>




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
