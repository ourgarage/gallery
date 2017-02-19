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
