<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{!! asset('css/layout3.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
</html>
<body>
<div class="myWrapper">

    {{--<div class="mySection-separate"></div>--}}
    <div class="myContainer">
        <button class="myButton-back bt btn-primary btn-lg btn-default"><a href="/fridge"> < wróć </a>

        </button>
        <!------------------------------------------- WSZYSTKIE SKŁADNIKI ------------------------------------------------------------>
        <div class="shape info">
            <table>
                <colgroup>
                    <col style="width: 100%">
                </colgroup>
                <tbody>
                <tr>
                    <h1 class="info-text text-success"><a href="#" class="link-info-success">Gotowe do zrobienia!</a></h1>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="shape mySection">
            @foreach($query as $row)
            <table class="myTable shape">
                <colgroup>
                    <col style="width: 5%">
                    <col style="width: 65%">
                    <col style="width: 30%">
                </colgroup>
                <tbody>
                <tr>
                    <td class="cell-special">
                        <div class="photo"></div>
                    </td>
                    <td class="cell">
                        <table>
                            <colgroup>
                                <col style="width: auto">
                            </colgroup>
                            <tbody>
                            <tr><td class="cellxxS"><h2 class="text-title">{!! $row->name !!}</h2></td></tr>
                            <tr><td class="cellxxS" style="color: forestgreen"><b><h3>Wszystkie składniki masz w domu!</h3></b></td></tr>
                            <tr><td class="cellxxS"><h3 class="text-success">{!! $row->description !!}</h3></td></tr>

                            </tbody>
                        </table>
                    </td>
                    <td class="cell" style="width: 350px">
                        <table>
                            <colgroup>
                                <col style="width: auto">
                            </colgroup>
                            <tbody>
                            <tr><td class="cellxS"></td></tr>
                            <tr><td class="cellxS"><div class="bt btn-success btn-lg btn-block myButton-recipe"><a href={{$row->url}} class="link-regular">przepis ></a></div></td></tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            <br>
            </table>
                @endforeach
        </div>

        <!------------------------------------------- BRAKUJE SKŁADNIKÓW ------------------------------------------------------------>
        {{--<div class="shape info">--}}
            {{--<table>--}}
                {{--<colgroup>--}}
                    {{--<col style="width: 100%">--}}
                {{--</colgroup>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<h1 class="info-text text-warning"><a href="#" class="link-info-warning">Z brakującymi składnikami</a></h1>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
        {{--<div class="shape mySection">--}}
            {{--<table class="myTable">--}}
                {{--<colgroup>--}}
                    {{--<col style="width: 5%">--}}
                    {{--<col style="width: 65%">--}}
                    {{--<col style="width: 30%">--}}
                {{--</colgroup>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td class="cell-special">--}}
                        {{--<div class="photo"></div>--}}
                    {{--</td>--}}
                    {{--<td class="cell">--}}
                        {{--<table>--}}
                            {{--<colgroup>--}}
                                {{--<col style="width: auto">--}}
                            {{--</colgroup>--}}
                            {{--<tbody>--}}
                            {{--<tr><td class="cellxxS"><h2 class="text-title">#value</h2></td></tr>--}}
                            {{--<tr><td class="cellxxS"><h3 class="text-warning">#value</h3></td></tr>--}}
                            {{--<tr><td class="cellxxS"><h3 class="text-info"></h3></td></tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</td>--}}
                    {{--<td class="cell" style="width: 350px">--}}
                        {{--<table>--}}
                            {{--<colgroup>--}}
                                {{--<col style="width: auto">--}}
                            {{--</colgroup>--}}
                            {{--<tbody>--}}
                            {{--<tr><td class="cellxS"></td></tr>--}}
                            {{--<tr><td class="cellxS"><div class="bt btn-warning btn-lg btn-block myButton-recipe"><a href="#" class="link-regular">przepis ></a></div></td></tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="mySection-separate"></div>--}}

    <!------------------------------------------- OPIS ------------------------------------------------------------>
    {{--<div class="myContainer">--}}
        {{--<div class="myButton-back bt btn-primary btn-lg btn-default">--}}
            {{--<a href="#" class="link-regular">< wróć</a>--}}
        {{--</div>--}}
        {{--<div class="shape mySection-lg">--}}
            {{--<table class="myTable">--}}
                {{--<colgroup style="height: inherit;width: inherit">--}}
                    {{--<col style="width: 5%; height: inherit">--}}
                    {{--<col style="width: 95%; height: inherit">--}}
                {{--</colgroup>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td class="cell-special">--}}
                        {{--<div class="photo"></div>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                        {{--<table class="myTable">--}}
                            {{--<colgroup style="height: inherit;width: inherit">--}}
                                {{--<col style="height: inherit;width: inherit">--}}
                            {{--</colgroup>--}}
                            {{--<tbody>--}}
                            {{--<tr><td class="cellSection-lg"><h2 class="text-title text-justify">#value</h2></td></tr>--}}
                            {{--<tr><td class="cellSection-lg"><p class="text-primary">#values-product-list</p></td></tr>--}}
                            {{--<tr><td class="cellxxS"><p class="text-info text-justify">#description</p></td></tr>--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
</div>
{{--<div class="mySection-separate"></div>--}}
</body>