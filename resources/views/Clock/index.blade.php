<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- cssの呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px|Slabo+27px&display=swap" rel="stylesheet"> 
    <title>Exercise Timer</title>
  </head>
  <body>
    <div class="timer-group">
    <div class="timer hour">
        <div class="hand"><span></span></div>
        <div class="hand"><span></span></div>
    </div>
    <div class="timer minute">
        <div class="hand"><span></span></div>
        <div class="hand"><span></span></div>
    </div>
    <div class="timer second">
        <div class="hand"><span></span></div>
        <div class="hand"><span></span></div>
    </div>
    <div class="face">
        <h2>A CSS Chronograph</h2>
        <p id="lazy">00:00:00</p>  
    </div>
    </div>
  <!-- jsファイルの呼び出し -->
  <script src="public/js/timer.js" type="text/javascript"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>