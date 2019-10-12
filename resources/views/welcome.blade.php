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
            .menu {
	background-color: var(--purple-medium);
	width: 100%;
	position: sticky;
	top: 0;
	padding: 5px;
	z-index: 999;
	text-align: center;
	display: flex;
	justify-content: center;
	font-family: 'Noto Serif', serif;
	font-style: italic;
	margin-bottom: 60px;
}

.menu a {
	display: inline-block;
	padding: 10px 30px;
	font-size: 26px;
	background-color: var(--purple-medium);
	margin: 0 10px;
	transition: .5s ease all;
	color: var(--gray-light);
	text-decoration: none;
}

.menu a:hover {
	transform: translateY(18px);
	background-color: var(--purple-light);
}
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

        	<nav class="menu">
                    <a href="#">Principal</a>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <style>



.sec-footer{
    background: #433d7b;
    direction: rtl;
    text-align: right;
    color: #fff;
    padding-top: 2.5rem;
    padding-bottom: 2rem;
}
.sec-footer .desc-box{
    background: transparent;
    border: 0;
}
.sec-footer .desc-box .card-title::after{
    content: ' ';
    background: #ffffff;
    display: block;
    width: 95%;
    height: 0.2rem;
    margin-top:0.3rem;
}
.sec-footer .desc-box .card-text{
    font-family:iranyekan_light;
    text-align: justify;
}
.sec-sub-footer{
    background: #f2f2f4;
    direction: rtl;
    text-align: right;
    color: #000;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    font-size:0.8rem;
}
.sec-sub-footer a{
    font-size:0.8rem;
}



/*------------------*/
.snip1472 {
    position: relative;
    font-size: 20px;
    color: #e6e6e6;
    width: 45px;
    margin: 4px;
    height: 45px;
    line-height: 45px;
    display: inline-block;
    text-align: center;
    -webkit-perspective: 50em;
    perspective: 50em;
    text-decoration: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.snip1472:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border: 2px solid #e6e6e6;
    content: '';
    z-index: -1;
    border-radius: 50%;
}
.snip1472:before {
    color: #fff;
}
.snip1472:before,
.snip1472:after {
    -webkit-transition: all 0.45s ease-in-out;
    transition: all 0.45s ease-in-out;
}
.snip1472:hover,
.snip1472:active,
.snip1472.hover {
    color: #c0392b;
}
.snip1472:hover:after,
.snip1472:active:after,
.snip1472.hover:after {
    border-color: #c0392b transparent #c0392b transparent;
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}


</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



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
                <br><br>
                <img src="../img/imageedit_1_3259124409.png" alt="مدرسه شهدای رهپویان" class="mb-3">
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
