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
    $(select).select2("val", '');

}
