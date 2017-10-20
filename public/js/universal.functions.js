function validateForm(){

    var requiredFormElements    = $(".multi-form .required"),
        phoneInput              = $("div[data-index=" + selectedPanel + "].form-panel .bfh-phone.required"),
        checkBoxes              = $("div[data-index=" + selectedPanel + "].form-panel .checkbox-group.required"),
        dependentInputs         = $("[dependentOn]");
        pairedInputs            = $("[pairWith]");
        
    for (var i = requiredFormElements.length -1; i >= 0; i--){
        if ((requiredFormElements[i].value === '' || requiredFormElements[i].value === "null") && $(requiredFormElements[i]).is(":visible")) {
            $("input[name=" + requiredFormElements[i].name + "]").parent().addClass("has-error");
            $("select[name=" + requiredFormElements[i].name + "]").addClass("has-error")
        } 
    }

    for (var i = phoneInput.length -1; i >= 0; i--){
        if (phoneInput[i].value === '+1 ') {
            $("input[name=" + phoneInput[i].name + "]").parent().addClass("has-error")
        } 
    }

    for (var i = requiredFormElements.length; i > 0; i--){
        if ((requiredFormElements[i - 1].value === '' || requiredFormElements[i -1].value === "null") && $(requiredFormElements[i - 1]).is(":visible")) {
            return false;
        }
    }

    for (var i = phoneInput.length; i > 0; i--){
        if (phoneInput[i - 1].value === '+1 ') {
            return false;
        }
    }

    for (var i = checkBoxes.length - 1; i >= 0; i--) {
        if ($(checkBoxes[i]).find("[type=checkbox]:checked").length <= 0){
            $(checkBoxes[i]).find("[type=checkbox]").parent().parent().addClass("has-error")
            return false;
        }
    };


    //validate dependant forms
    for (var i = dependentInputs.length - 1; i >= 0; i--) {
        var controlInput = $("[name=" + $(dependentInputs[i]).attr("dependentOn") + "]:checked");
        if (controlInput.attr("dependentValue") === "true") { 
            // validate 
            if (dependentInputs[i].value === '' || dependentInputs[i].value === "null") {
                $("[name=" + dependentInputs[i].name + "]").parent().addClass("has-error")
                $("[name=" + dependentInputs[i].name + "]").addClass("has-error")
                $("[name=" + $("[name=" + dependentInputs[i].name + "]").attr("dependentOn") + "]").parent().parent().addClass("has-error")
            return false;
            } 
        } 
    };

    // validate pair inputs (one must be true) only works with text
    pairedInputs.each(function() {
        var pairInput = document.getElementById($(this).attr('pairWith'));
        if (pairInput.value.length < 1 && this.value.length < 1) {
        $(pairInput)
            .parent()
            .addClass('has-error');
        formContinue = false;
        }
    });

    return true;
}

function crossFadeBG(selectedPanel,panelAdj){
    var nextPanel = Number(selectedPanel) + Number(panelAdj);
    //update background image if .updateBackground is present
    var imgURL = $("div[data-index=" + nextPanel + "] .updateBackground").attr("href");

    if (imgURL != null) {
        $("#matte").show()
        $(".overlay").fadeOut();
        $(".overlay[img-index=" + nextPanel + "]").css({backgroundImage: 'url(' + imgURL + ')'})          
        $(".overlay[img-index=" + nextPanel + "]").fadeIn();         
    } 
    else
    {
        $(".overlay").fadeOut();
        $("#matte").fadeOut();
    }
}

function preloadImage(url)
{
    var img=new Image();
    img.src=url;
}

function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}