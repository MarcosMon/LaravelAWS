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
        <link rel="stylesheet" href="css/style.css">


    </head>
    <body>

    <header>

        	<nav class="menu">
                    <a href="{{route('/')}}">Principal</a>
                    <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Trabajos</a>
                            <div class="dropdown-menu">
                                @foreach($listaOfertas as $miembro)
                                <a class="dropdown-item" href="{{route('/',$miembro)}}">{{$miembro}}</a>
                                @endforeach
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

                <div align="center" style="margin:28px;" ><img src="img/tablaMultiplicar.png" alt=""> </div>


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
            for ($i = 0; $i < sizeof($lista); $i++)
            {
                echo '<table class="table table-bordered table-hover table-striped text-center">';
                echo '<th class="table-warning">'.$lista[$i].'</th>';
                echo '</table>';
            }
            //  '<div style="text-center">'.print_r($lista).'</div>';
            ?>
                <div align="center" style="margin:28px;" ><img src="img/bubble.png" alt=""> </div>

                @break
                @endswitch
                <!-- Welcome Offers-->
                @else
                <div align="center" style="margin:10%;" ><img src="img/logodual.png" alt=""> </div>
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




    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

<section class="container-fluid sec-footer">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9 mb-4">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/89xlH_49kHo"
                              allowfullscreen></iframe>
                          </div>
                        </div>

            <div class="col text-center">
                <img src="../img/syscompany.png" alt="" class="mb-3">
                <br class="clearfix">
                <a href="#" class="snip1472"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="snip1472"><i class="fab fa-instagram"></i></a>
                <a href="#" class="snip1472"><i class="fab fa-telegram-plane"></i></a>
                <a href="#" class="snip1472"><i class="fab fa-google-plus-g"></i></a>
            </div><!--.col-->
        </div><!--.row-->
    </div>
</section>
<section class="container-fluid sec-sub-footer">
    <div class="container">
        <div class="row">
            <div class="col text-center" >
                <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                        <a href="https://curiosidadesdelmundo.es/principal">curiosidadesdelmundo.es</a>.
                           </p>
                         </div>
            </div><!--.col-->
        </div><!--.row-->
    </div>
</section>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
