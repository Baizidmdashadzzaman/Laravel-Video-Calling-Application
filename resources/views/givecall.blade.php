<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Calling Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <style>
          body {
             font-family: 'Montserrat';
          }
        </style>
    </head>
    <body>
        <div class="header">
            <nav>
                <a href="{{route('videocall.index')}}"><img src="/logo.png" class="logo"></a>
                <ul>
                    <li>
                        <a href="{{route('videocall.index')}}">
                            <img src="/live.png" class="active">
                        </a>    
                    </li>
                    <li><img src="/video.png"></li>
                    <li><img src="/message.png"></li>
                    <li><img src="/notification.png"></li>
                    <li><img src="/users.png"></li>
                    <li><img src="/setting.png"></li>
                </ul>
            </nav>
            <div class="container">
                <div class="top-icons">
                    <img src="/search.png">
                    <img src="/menu.png">
                </div>
                <div class="row" style="margin-left: 20px;">
                    <div class="col-1">
                        <center>
                        <h2 style="color:white">Giving call</h2>
                        <br>
                        </center>        
                        <div id="jitsi-container" class="host-img"></div>
                        <div class="contarols">
                            <img src="/chat.png">
                            <img src="/disconnect.png">
                            <a href="{{route('videocall.index')}}"><img src="/call.png" class="call-icon"></a>
                            <img src="/mic.png">
                            <img src="/cast.png">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="joined">
                            <p>People Joined</p>
                            <div>
                                <img src="/people-1.png">
                                <img src="/people-2.png">
                                <img src="/people-3.png">
                                <img src="/people-4.png">
                                <img src="/people-5.png">
                            </div>
                        </div>
                        <div class="invite">
                            <p>Invite More People</p>
                            <div>
                                <img src="/user-1.png">
                                <img src="/user-2.png">
                                <img src="/user-3.png">
                                <img src="/user-4.png">
                                <img src="/user-5.png">
                            </div>
                        </div>
                        <button id="start" type="button" ></button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='https://meet.jit.si/external_api.js'></script>
        <script>
           var button = document.querySelector('#start');
           var container = document.querySelector('#jitsi-container');
           var api = null;
           button.addEventListener('click', () => {
               var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
               var stringLength = 30;
           function pickRandom() {
               return possible[Math.floor(Math.random() * possible.length)];
           }
           var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');
           var domain = "meet.jit.si";
           var options = {
               "roomName": randomString,
               "parentNode": container,
               "height": 600,
           };
           api = new JitsiMeetExternalAPI(domain, options);
           });
           //wait for DOM ready...
           document.addEventListener('DOMContentLoaded', () => {
             button.click();
           }, false);
        </script>
        

    </body>
</html>