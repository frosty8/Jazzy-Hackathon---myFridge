$(document).ready(function () {
    $(".select2").select2({
        allowClear: false,
        multiple: true,
        language: {
            noResults: function () {
                return "Brak wyników wyszukiwania";
            }
        }
    });
    $('#fridge_select_01').select2({
        theme: "flat"
    });

    $('.js-example-basic-multiple').select2({
        theme: "flat"
    });

    $("#singleSelectExample").select2({
        placeholder: 'Select an option...',
        theme: "flat",
        allowClear: true
    });
    $(".js-example-placeholder-single").select2({
        placeholder: 'Select an option...',
        theme: "flat",
        allowClear: true
    });

    $(".js-example-placeholder-multiple").select2({
        placeholder: "Select a option",
        theme: "flat"
    });

});

function updateSelect(select, arr) {

    var obj = [];
    var data = [];
    data = Object.keys(arr);

    for (var i = 0; i < data.length; i++) {
        obj.push(arr[data[i]]);
    }

    for (var i = 0; i < obj.length; i++) {
        console.log(obj[i].id);
        console.log(obj[i].name);
        data[i] = {
            id: obj[i].id,
            text: obj[i].name
        };
    }
    $(select).select2({
        data: data
    });
    $(select).select2("val", 0);

}

