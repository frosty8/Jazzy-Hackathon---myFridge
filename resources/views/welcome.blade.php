<html>
<head>
    <title>My fridge</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="{!! asset('css/reset.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/welcome.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

</head>
<body>

<div id="wrapper">
    <div id="title">
    </div>

    <div id="quote">
        <h1>Pokaż mi co masz w lodówce, a powiem Ci co zjesz :)</h1>
    </div>

    <div id="button">
        <a href="/fridge"><button>S T A R T</button></a>
    </div>

    <div id="steps">
        <h1>Trzy proste kroki!</h1>

        <div class="step">
            <img src="{!! asset('icons/carrot-32.png') !!}"/>
            <!-- <h2>1</h2> -->
            <p>Wybierz składniki jakie masz w lodówce</p>
        </div>
        <div class="step">
            <!--<h2>2</h2>-->
            <img src="{!! asset('icons/paper-32.png') !!}"/>
            <p>Wybierz przepis jaki Ci odpowiada</p>
        </div>
        <div class="step">
            <!--<h2>3</h2>-->
            <img src="{!! asset('icons/cook-32.png') !!}"/>
            <p>Gotuj!</p>
        </div>
        <div style="clear:both;"></div>
    </div>


</div>
</body>
</html>