if($('#defaultValue').val() && (typeof changeCompanyConfig !== "undefined" && changeCompanyConfig == false)) { //not change field if exists bid
    $(".select2-company").prop("disabled", true);
}

function formatResult(myResult) {
    if(typeof showCompanyId != "undefined" && showCompanyId) {
        return $('<option>' + myResult.text + ' | #' + myResult.id + '</option>');
    } else {
        var inn = myResult.inn != null ? ' | ИНН ' + myResult.inn : '';

        return $('<option>' + myResult.text + inn + '</option>');
    }
}

function resultSelection(selectData) {
    if(typeof showCompanyId != "undefined" && showCompanyId) {
        return selectData.text + ' | #' + selectData.id;
    } else {
        return selectData.text;
    }
}

$('.select2-company').select2({
    placeholder: "Начните вводить название....",
    allowClear: false,
    language: "ru",
    multiple: true,
    maximumSelectionLength: 1,
    ajax: {
        url: routeSearch,
        dataType: 'json',
        delay: 250,
        type: "POST",
        data: function (params) {
            return {
                myQuery: params.term,
                page: params.page,
                _token: $("meta[name='csrf-token']").attr('content')
            };
        },
        processResults: function (data, params) {
            params.page = params.page || 1;
            return {
                results: data,
                pagination: {
                    more: (params.page * 10) < data.total_count
                }
            };
        },
        cache: true
    },
    escapeMarkup: function (markup) {return markup;},
    minimumInputLength: 0,
    templateResult: formatResult,
    templateSelection: resultSelection
});