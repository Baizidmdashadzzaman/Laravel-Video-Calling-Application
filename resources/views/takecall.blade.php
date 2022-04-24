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
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                    <li><a href="{{route('videocall.index')}}"><img src="/live.png" class="active"></a></li>
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
                        <div class="host-img">
                            <center>
                                <h2 style="color:white">Joining call</h2>
                                <br>
                                <iframe allow="camera; microphone; fullscreen; display-capture" src="{{$video}}" style="height: 600px; width: 100%; border: 0px;"></iframe>
                            </center>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>