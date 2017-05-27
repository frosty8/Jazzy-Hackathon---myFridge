<!doctype HTML>
<html>

<head>
    <title>My fridge</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="{!! asset('css/reset.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/960.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/text.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/fridge.css') !!}" media="all" rel="stylesheet" type="text/css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</head>
<body>

<div id="wrapper">

    <div id="headline">
        <h1> Wybierz produkty, które masz w lodówce </h1>
    </div>


    <div id="fridge_wrapper">

        <div id="fridge_contents">

            <script type="text/javascript">
                $(".js-example-basic-multiple").select2();
            </script>

            <div class="fridge_content">
                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_01"
                        name="fridge_select_01"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>

            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_02"
                        name="fridge_select_02"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>
            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_03"
                        name="fridge_select_03"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>

            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_04"
                        name="fridge_select_04"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>

            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_05"
                        name="fridge_select_05"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>

            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_06"
                        name="fridge_select_06"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
                </select>
            </div>

            <div class="fridge_content">

                <select class="select2"
                        data-placeholder=""
                        style="width: 100%"
                        id="fridge_select_07"
                        name="fridge_select_07"
                        tabindex="">
                    <option value="">value1</option>
                    <option value="">value2</option>
                    <option value="">value3</option>
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