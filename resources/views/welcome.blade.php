<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <title>Clean My Gaadi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #e6dfdf;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            header {
              background: 
                linear-gradient(
                  rgba(0, 0, 0, 0.5),
                  rgba(0, 0, 0, 0.5)
                ),
                url('images/Ts1.jpg');
              background-size: cover;
              height: 100vh;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:#e6dfdf;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .button {
                      display: inline-block;
                      padding: 15px 25px;
                      font-size: 24px;
                      cursor: pointer;
                      text-align: center;
                      text-decoration: none ;
                      outline: none;
                      color: #fff;
                      background-color: #3e8e41;
                      border: none;
                      border-radius: 15px;
                      box-shadow: 0 9px #999;
                        }
    </style>
    </head>
    <body>
    <header>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    Clean My Gaadi
                </div>
                <div>
                  <a class="button" href="{{ url('login') }}">Login</a>
                </div>
            </div>
        </div>
        </header>
    </body>
</html>
