$('#select2-categories').select2({
    placeholder: "Начните вводить название....",
    allowClear: false,
    language: "ru",
    multiple: true,
    maximumSelectionLength: 1,
    // ajax: {
    //     url: routeSearch,
    //     dataType: 'json',
    //     delay: 250,
    //     type: "POST",
    //     data: function (params) {
    //         return {
    //             myQuery: params.term,
    //             page: params.page,
    //             _token: $("meta[name='csrf-token']").attr('content')
    //         };
    //     },
    //     processResults: function (data, params) {
    //         params.page = params.page || 1;
    //         return {
    //             results: data,
    //             pagination: {
    //                 more: (params.page * 10) < data.total_count
    //             }
    //         };
    //     },
    //     cache: true
    // },
    escapeMarkup: function (markup) {return markup;},
    minimumInputLength: 0,
    templateResult: formatResult,
    templateSelection: resultSelection
});
