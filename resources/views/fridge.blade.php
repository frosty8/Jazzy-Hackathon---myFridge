<!doctype HTML>
<html>
<head>
    <title>My fridge</title>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/documentReady.js') !!}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>

    <link href="{!! asset('css/reset.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/fridge.css') !!}" media="all" rel="stylesheet" type="text/css"/>

</head>
<body>
<form id="fridgeForm" method="POST" action="/posts">
    {{csrf_field()}}
<div id="wrapper">
    <div id="headline">
        <h1> Wybierz produkty, które masz w lodówce </h1>
    </div>

    <div id="other">
        <select class="select2"
                data-placeholder="Inne"
                id="fridge_select_07"
                name="fridge_select_07[]"
                tabindex=""
        multiple>
        </select>
    </div>


        <div id="fridge_wrapper">
            <div id="fridge_contents">
                <div id="meats" class="fridge_content">
                    <select class="select2"
                            data-placeholder="Mięso"
                            style="width: 100%;"
                            id="fridge_select_00"
                            name="fridge_select_00[]"
                            tabindex=""
                    multiple>
                    </select>
                </div>
                <div id="vegetables" class="fridge_content">
                    <select class="select2"
                            data-placeholder="Warzywa"
                            style="width: 100%"
                            id="fridge_select_02"
                            name="fridge_select_02[]"
                            tabindex=""
                    multiple>
                    </select>
                </div>
                <div id="fish" class="fridge_content">
                    <select class="select2"
                            data-placeholder="Ryby"
                            style="width: 100%"
                            id="fridge_select_03"
                            name="fridge_select_03[]"
                            tabindex=""
                    multiple>
                    </select>
                </div>
                <div id="dairy" class="fridge_content">
                    <select class="select2"
                            data-placeholder="Nabiał"
                            style="width: 100%"
                            id="fridge_select_04"
                            name="fridge_select_04[]"
                            tabindex=""
                    multiple>
                    </select>
                </div>

            <div id="liquids" class="fridge_content">
                <select class="select2"
                        data-placeholder="Płyny"
                        style="width: 100%"
                        id="fridge_select_05"
                        name="fridge_select_05[]]"
                        tabindex=""
                multiple>
                </select>
            </div>

            <div id="fruits" class="fridge_content">
                <select class="select2"
                        data-placeholder="Owoce"
                        style="width: 100%"
                        id="fridge_select_06"
                        name="fridge_select_06[]"
                        tabindex=""
                multiple>
                </select>
            </div>

            </div>
        </div>

        <div id="search">
            <button type="submit">S Z U K A J</button>
        </div>
</div>
</form>
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


    updateSelect('#fridge_select_00', meats);
    updateSelect('#fridge_select_02', vegetables);
    updateSelect('#fridge_select_03', fishs);
    updateSelect('#fridge_select_04', dairy);
    updateSelect('#fridge_select_06', fruits);
    updateSelect('#fridge_select_05', liquids);
    updateSelect('#fridge_select_07', others);

</script>