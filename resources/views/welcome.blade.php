<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SyS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
        </style>

            <!-- Random Code -->
    <?php
    $random_string = rand(1,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . chr(rand(65,90))
    . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90) . chr(rand(65,90)) . rand(65,90);
    ?>
<!-- Random Code -->
    </head>
    <body>

    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SyS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav nav-tabs">
        <li class="nav-item active">
            <a class="nav-link"    >Principal</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">Trabajos</a>
            <div class="dropdown-menu">
                @foreach($listaOfertas as $miembro)
                <a class="dropdown-item" href="{{route('/',$miembro)}}">{{$miembro}}</a>
                @endforeach
        </li>
    </ul>
    <!-- Navigation Bar -->
  </div>
</nav>
    </header>

    <!-- Each Offer-->
    @if(!empty($nombre))
    <!-- Offer One -->

    @switch($nombre)
    @case($nombre=='Tabla Multiplicar')
    <?php
                echo '<table class="table table-bordered table-hover table-striped text-center">';

                for ($x = 1; $x <= 9; $x++) {

                    echo '<td class="table-info">Tabla del '.$x.'</td>';
                    for($y = 1; $y <= 10; $y++){

                        echo '<th class="table-warning">'.$x*$y.'</th>';

                    }
                    echo '</tr>';
                }

                echo '</table>';
                ?>
        @break
        <!-- Offer Two -->
        @case($nombre=='Bubble Sort')
                    <?php
            $lista = array(30,50,20,70,25,32);

            // Printing array size

            for ($i = 0; $i < sizeof($lista); $i++)
            {

                for ($j =1; $j < sizeof($lista); $j++){

                    if($lista[$j] < $lista[$j-1]){

                        $aux_elem = $lista[$j];
                        $lista[$j] = $lista[$j-1];
                        $lista[$j-1] = $aux_elem;
                    }

                }


            }
            ?>
            <pre>
            <?php
            print_r($lista);
            ?>
                @break
                @endswitch
                <!-- Welcome Offers-->
                @else

                @endif


        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
