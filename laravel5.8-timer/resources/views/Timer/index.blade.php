<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- cssファイルの呼び出し -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jsファイルの呼び出し -->
    <script src="{{ asset('js/JavaScriptファイル') }}"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Font family -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <title>Exercise Timer</title>
  </head>
  <body>
    <div class="container">
      <h1>Exercise Time Set</h1>
      <form name = "btn_start" action="{{ url('/clock')}}" method="post">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                <!-- main Container -->
                    <div class="col-8 col-sm-8">
                        <div class="row">
                        <!-- minutes set box -->
                            <h3>Exercise Time Set</h3>
                            <div class="col-8 col-sm-12 ex-time">
                                <button type="button" class="btn1 btn-m" value="01:00">1</button>
                
                                <script type="text/javascript">
                                $(function () {
                                    $(".btn1 btn-m").click( function() {
                                    // テキストボックスへ値を設定します
                                    $("#time_box1").val();
                                    });
                                });
                                </script>

                                <button type="button" class="btn2 btn-m" value="02:00">2</button>
                                <button type="button" class="btn3 btn-m" value="03:00">3</button>
                                <button type="button" class="btn4 btn-m" value="01:00">4</button>
                                <button type="button" class="btn5 btn-m" value="01:00">5</button>
                                <button type="button" class="btn6 btn-m" value="01:00">6</button>
                                <button type="button" class="btn7 btn-m" value="01:00">7</button>
                                <button type="button" class="btn8 btn-m" value="01:00">8</button>
                                <button type="button" class="btn btn-m" value="01:00">9</button>
                            </div>
                            <div class="col-8 col-sm-12 ex-time">
                                <button type="button" class="btn btn-m" value="01:00">+5</button>
                                <button type="button" class="btn btn-m" value="01:00">+10</button>
                            </div>
                        </div>
                            <div class="row">
                            <!-- break time set box -->
                                <h3>Breask Time Set</h3>
                                <div class="col-8 col-sm-12 br-time">
                                    <button type="button" class="btn btn-s">10</button>
                                    <button type="button" class="btn btn-s">20</button>
                                    <button type="button" class="btn btn-s">30</button>
                                    <button type="button" class="btn btn-s">40</button>
                                    <button type="button" class="btn btn-s">50</button>
                                    <button type="button" class="btn btn-s">60</button>
                                </div>
                                <div class="col-8 col-sm-12 br-time">
                                    <button type="button" class="btn btn-s">+5</button>
                                    <button type="button" class="btn btn-s">+10</button>
                                </div>
                            </div>
                            <div class="row">
                            <!-- Times set box -->
                                <div class="col-8 col-sm-12 set-box">
                                    <h3>Exercise time <span class="space">Break time</span><span class="space">Repeate</span></h3>
                                    <input type="text" id="time_box1" name="exercise_time" value="00:00">
                                    <p class="symbol">+</P>
                                    <div id="time_box2"></div>
                                    <p class="symbol">x</p>
                                    <div id="repeat"></div>
                                </div>
                            </div>
                                <div class="row">
                                <!-- start & clear box -->
                                    <div class="col-8 col-sm-12 start-clear-box">
                                        <input class="btn btn-start" type="submit" value="Start">
                                        <input class="btn btn-clear" type="reset" value="Clear">
                                    </div>
                                </div>
                    </div>
                    <!-- right history container -->
                    <div class="col-4 col-sm-4">
                    <h3>History Records</h3>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div>
</body>
</html>