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
    <div class="container-fluid">
      <h1>Exercise Time Set</h1>
      <div class="main_container">
        <div class="Exercise_box">
          <h3>Exercise time - Minutes -</h3>
          <form name="minutes_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"> 
            <button class="but_m" type="button">1</button>
            <button class="but_m" type="button">2</button> 
            <button class="but_m" type="button">3</button>
            <button class="but_m" type="button">4</button>
            <button class="but_m" type="button">5</button>
            <button class="but_m" type="button">6</button>
            <button class="but_m" type="button">7</button>
            <button class="but_m" type="button">8</button>
            <button class="but_m" type="button">9</button>
            <button class="but_m" type="button">10</button></br>
            <button class="but_m" type="button">+5</button>
            <button class="but_m" type="button">+10</button>
            <button class="but_m" type="button"onclick="OnButtonClick();"/>example<br />
      </form>
        </div>
        <div class="break_box">
          <h3>Break time - Seconds -</h3>
          <form name="seconds_form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>">
            <button class="but_s" type="button" >10</button>
            <button class="but_s" type="button" >20</button>
            <button class="but_s" type="button" >30</button>
            <button class="but_s" type="button" >40</button>
            <button class="but_s" type="button" >50</button>
            <button class="but_s" type="button" >60</button></br>
            <button class="but_s" type="button" >+5</button>
            <button class="but_s" type="button" >+10</button>
      </form>
        </div>
        <div class="timeSet_box">
          <h3>Exercise time <span class="space">Break time</span><span class="space">Repeate</span></h3>
          <div id="timebox1">クリックされた分数を表示</div>
          <p class="symbol">+</P>
          <div id="timebox2">クリックされた秒数を表示</div>
          <p class="symbol">x</p>
          <div id="repeat">回数</div>
        </div>
        <div class="sc_box">
          <form name = "btu_start" method="post" action="Clock/index.blade.php">
            <input class="btu_sub" type="submit" value="Start">
          </form>
          <form name = "btu_clear" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>">
            <input class="btu_cle" type="reset" value="Clear">
          </form>
        </div>
      </div>
      <div class="right_container">
        <h3>Exercise history</h3>
        <div class="logbox"></div>
      </div>
    </div>

    
  <!-- jsファイルの呼び出し -->
  <script src="js/common.js" type="text/javascript"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>