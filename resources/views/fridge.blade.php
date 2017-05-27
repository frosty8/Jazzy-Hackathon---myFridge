<!doctype HTML>
<html>
<head>
    <title>My fridge</title>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/documentReady.js') !!}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="{!! asset('css/reset.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/960.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/text.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/fridge.css') !!}" media="all" rel="stylesheet" type="text/css"/>


</head>
<body>
<div id="wrapper">
    <div id="headline">
        <h1> Wybierz produkty, które masz w lodówce </h1>
    </div>
    <div id="fridge_wrapper">
        <div id="fridge_contents">

            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_01"
                        name="fridge_select_01"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_02"
                        name="fridge_select_02"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_03"
                        name="fridge_select_03"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_04"
                        name="fridge_select_04"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_05"
                        name="fridge_select_05"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_06"
                        name="fridge_select_06"
                        tabindex="">
                </select>
            </div>
            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_07"
                        name="fridge_select_07"
                        tabindex="">
                </select>
            </div>
        </div>
    </div>
    <div id="search">
        <button>S Z U K A J</button>
    </div>
</div>
</body>
</html>

<script>

    $('select').select2();

    var meats = {!! $meats !!};
    var vegetables = {!! $vegetables !!};
    var fruits = {!! $fruits !!};
    var fishs = {!! $fishs !!};
    var dairy = {!! $dairy !!};
    var liquids = {!! $liquids !!};
    var others = {!! $others !!};



updateSelect('#fridge_select_01', meats);
updateSelect('#fridge_select_02', fishs);
updateSelect('#fridge_select_03', dairy);
updateSelect('#fridge_select_04', vegetables);
updateSelect('#fridge_select_05', fruits);
updateSelect('#fridge_select_06', liquids);
updateSelect('#fridge_select_07', others);




</script>