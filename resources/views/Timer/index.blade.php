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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jsファイルの呼び出し -->
    <script src="{{ asset('js/timer.js') }}"></script>
    <!-- Font family -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px|Slabo+27px&display=swap" rel="stylesheet">
    <title>Exercise Timer</title>
  </head>
  <body>
    <div class="container">
    <div class="title-box"><h1>Exercise Time Set</h1></div>
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
                                <button type="button" id="btn-1" class="btn-m" value="01:00">1</button>                              
                                <button type="button" id="btn-2" class="btn-m" value="02:00">2</button>
                                <button type="button" id="btn-3" class="btn-m" value="03:00">3</button>
                                <button type="button" id="btn-4" class="btn-m" value="04:00">4</button>
                                <button type="button" id="btn-5" class="btn-m" value="05:00">5</button>
                                <button type="button" id="btn-6" class="btn-m" value="06:00">6</button>
                                <button type="button" id="btn-7" class="btn-m" value="07:00">7</button>
                                <button type="button" id="btn-8" class="btn-m" value="08:00">8</button>
                                <button type="button" id="btn-9" class="btn-m" value="09:00">9</button>
                            </div>
                            <div class="col-8 col-sm-12 ex-time">
                                <button type="button" id="btn-5m-plus" class="btn-m" value="05:00">+5</button>
                                <button type="button" id="btn-10m-plus" class="btn-m" value="10:00">+10</button>
                            </div>
                        </div>
                            <div class="row">
                            <!-- break time set box -->
                                <h3>Breask Time Set</h3>
                                <div class="col-8 col-sm-12 br-time">
                                    <button type="button" id="btn-10" class="btn-s" value="00:10">10</button>
                                    <button type="button" id="btn-20" class="btn-s" value="00:20">20</button>
                                    <button type="button" id="btn-30" class="btn-s" value="00:30">30</button>
                                    <button type="button" id="btn-40" class="btn-s" value="00:40">40</button>
                                    <button type="button" id="btn-50" class="btn-s" value="00:50">50</button>
                                    <button type="button" id="btn-60" class="btn-s" value="01:00">60</button>
                                </div>
                                <div class="col-8 col-sm-12 br-time">
                                    <button type="button" id="btn-5s-plus"class="btn-s" value="00:05">+5</button>
                                    <button type="button" id="btn-10s-plus"class="btn-s" value="00:10">+10</button>
                                </div>
                            </div>
                            <div class="row">
                            <!-- Times set box -->
                                <div class="col-8 col-sm-12 set-box">
                                    <div class="row">
                                        <div class="col-sm">
                                          <h3>Exercise time</h3>
                                        </div>
                                        <div class="col-sm">
                                          <h3>Break time</h3>
                                        </div>
                                        <div class="col-sm">
                                          <h3>Repeate</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm"> 
                                            <input type="text" id="time_box" name="exercise_time" value="00:00">
                                        </div>
                                            <p class="symbol">+</P>
                                        <div class="col-sm"> 
                                            <input type="text" id="second_box" name="exercise_second" value="00:00">
                                        </div>                                   
                                            <p class="symbol">x</p>
                                        <div class="col-sm">
                                            <div class="spinner_area">
                                                <input type="button" class="btnspinner up" data-cal="1" data-target=".counter1">
                                                <input type="text" value="0" class="counter1" data-max="99" data-min="0">
                                                <input type="button" class="btnspinner down" data-cal="-1" data-target=".counter1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <!-- start & clear box -->
                                    <div class="col-sm-8 col-sm-12 start-clear-box">
                                        <div class="row">
                                            <div class="col-6 col-sm-6">
                                                <input class="btn btn-start" type="submit" value="Start">
                                            </div>
                                            <div class="col-6 col-sm-6">
                                                <input class="btn btn-clear" type="reset" value="Clear">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- right history container -->
                    </div>
                    <div class="col-4 col-sm-4">
                       <h3>History Records</h3>
                    </div>
                </div>
            </div>
      </form>
    </div>
</body>
</html>