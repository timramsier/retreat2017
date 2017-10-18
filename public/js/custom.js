// $('.required').prop('required', true );
$('.form-panel .error-message').hide();
$('.success-message').hide();

// prepares divs used for crossfading background images
$("#matte").hide();
$(".overlay").hide();

//add the data-index property for each panel and activate the first one
var panels = $(".form-panel"); 
for (var i = 0; i < panels.length; i++){
    panels[i].setAttribute("data-index",i);
}
$(".form-panel[data-index=0]").addClass("active").show()


//Sets the panel show/hide state to page load value
if ($(".form-toggle .form-toggle-control").val() !== '1') {
    $($(".form-toggle .form-toggle-control").attr('data-target')).hide();
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('input').prop( "disabled", true );
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('textarea').prop( "disabled", true );
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('button').prop( "disabled", true );
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('input.required').prop( "required", false );
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('textarea.required').prop( "required", false );
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('input').val('');
    $($(".form-toggle .form-toggle-control").attr('data-target')).find('textarea').val('');
}
//Event listener for state change of form-toggle-control
$('.form-toggle .form-toggle-control').on('change',function(){
    if ($(this).val() === '1') {
        $($(this).attr('data-target')).show();
        $($(this).attr('data-target')).find('input').prop( "disabled", false );
        $($(this).attr('data-target')).find('textarea').prop( "disabled", false );
        $($(this).attr('data-target')).find('button').prop( "disabled", false );
        $($(this).attr('data-target')).find('input.required').prop( "required", true );
        $($(this).attr('data-target')).find('textarea.required').prop( "required", true );
    } else {
        $($(this).attr('data-target')).hide();
        $($(this).attr('data-target')).find('input').prop( "disabled", true );
        $($(this).attr('data-target')).find('textarea').prop( "disabled", true );
        $($(this).attr('data-target')).find('button').prop( "disabled", true );
        $($(this).attr('data-target')).find('input.required').prop( "required", false );
        $($(this).attr('data-target')).find('textarea.required').prop( "required", false );
        $($(this).attr('data-target')).find('input').val('');
        $($(this).attr('data-target')).find('textarea').val('');
    }
})

// initializes active form panel
$('.form-panel').hide();
$('.form-panel.active').show();

var selectedPanel = $('.form-panel.active').attr('data-index');
var progressPercent = $('.form-panel.active').attr('data-index') / $(".multi-form .form-panel").length * 100;
$('.multi-form-progress-bar').attr('aria-valuenow', progressPercent);
$('.multi-form-progress-bar').css('width', progressPercent + "%");
// $('.multi-form-progress-bar').find('span.sr-only').text($(Math.round(progressPercent) + '% Complete'));

//disables buttons, shows submit button depending on current panel location
if ($('.form-panel.active').attr('data-index') <= 0){
    $('button[data-toggle=back].form-panel-button').prop('disabled', true)
} else {
    $('button[data-toggle=back].form-panel-button').prop('disabled', false)
}
if($('.form-panel.active').attr('data-index') < $(".multi-form .form-panel").length - 1){
    $('button[data-toggle=next].form-panel-button').prop('disabled', false);
    $('button[type=submit].form-panel-button').hide();
    $('button[data-toggle=next].form-panel-button').show();
} else {
    $('button[data-toggle=next].form-panel-button').prop('disabled', true);
    $('button[type=submit].form-panel-button').show();
    $('button[data-toggle=next].form-panel-button').hide();
}

//adds validation on the submit button
$('.multi-form').attr('onsubmit','return validateForm()');

//Sets form section at start if .form-panels exist
$(window).on('load',function(){
    if ($('.form-panel').length !== 0) {
        $("#form-section").text(Number($('.form-panel.active').attr('data-index') + 1) + "/" + $(".form-panel").length);
    } else {
        $("#form-section").text("");
    }
});




//advances through the form via control buttons
$('.multi-form .form-panel-button').on('click',function(){
    var selectedPanel           = $('.form-panel.active').attr('data-index'),
        requiredFormElements    = $("div[data-index=" + selectedPanel + "].form-panel .required"),
        formContinue            = true,
        phoneInput              = $("div[data-index=" + selectedPanel + "].form-panel .bfh-phone.required"),
        checkBoxes              = $("div[data-index=" + selectedPanel + "].form-panel .checkbox-group.required"),
        clickEvent              = $(this),
        dependentInputs         = $("[dependentOn]"),
        defaultIMG              = "./public/img/aspen_01.jpg";
    $('.success-message').hide();
    $('.error-message').hide();

    if ($(this).attr('data-toggle') === 'next' || $(this).attr('data-toggle') === 'submit') {
        $('.has-error').removeClass('has-error')

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
                formContinue = false;
            }
        }

        for (var i = phoneInput.length; i > 0; i--){
            if (phoneInput[i - 1].value === '+1 ') {
                formContinue = false;
            }
        }

        for (var i = checkBoxes.length - 1; i >= 0; i--) {
            if ($(checkBoxes[i]).find("[type=checkbox]:checked").length <= 0){
                $(checkBoxes[i]).find("[type=checkbox]").parent().parent().addClass("has-error")
                formContinue = false;
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
                formContinue = false;
                } 
            } 
        };

        
        if (formContinue !== false) {       
            if ($(this).attr('data-toggle') === 'next' ) {
                $("div[data-index=" + selectedPanel + "].form-panel .error-message").hide()
                selectedPanel++
                $('.form-panel').removeClass('active');
                $('div[data-index='+ selectedPanel +'].form-panel').addClass('active');
                crossFadeBG(selectedPanel, 0)
            }
            
        } else {
            $("div[data-index=" + selectedPanel + "].form-panel .error-message").show()
        }
    }
    if ($(this).attr('data-toggle') === 'back') {
        selectedPanel--
        $('.form-panel').removeClass('active');
        $('div[data-index='+ selectedPanel +'].form-panel').addClass('active');
        crossFadeBG(selectedPanel, 0)
    }
    



    //fadeIn/fadeOut panels
    $('.form-panel').hide();
    $('.form-panel.active').show();
    
    //enables/disables form buttons when at limit
    if(selectedPanel <= 0){
        $('button[data-toggle=back].form-panel-button').prop('disabled', true);
    } else {
        $('button[data-toggle=back].form-panel-button').prop('disabled', false);
    }
    if(selectedPanel < $(".multi-form .form-panel").length - 1){
        $('button[data-toggle=next].form-panel-button').prop('disabled', false);
        $('button[type=submit].form-panel-button').hide();
        $('button[data-toggle=next].form-panel-button').show();
    } else {
        $('button[data-toggle=next].form-panel-button').prop('disabled', true);
        $('button[type=submit].form-panel-button').show();
        $('button[data-toggle=next].form-panel-button').hide();
    }

    //advance form section text
    if ($('.form-panel').length !== 0) {
        $("#form-section").text((Number(selectedPanel) + 1) + "/" + $(".form-panel").length); 
    } else {
        $("#form-section").text("");
    }
    $('html,body').scrollTop(0);
});




// Form interaction
// $(window).on('load',function(){
//     $('.origin-toggle').hide();
//     // $('#flightType').val('Corporate Jet');
//     // $('option[value="Corporate Jet"]').prop('disabled',false);
//     // $('option[value="Corporate Jet"]').show();
//     // $('#originNY').val("Yes");
//     $('.origin-toggle').find('input').val('null');
//     $('.origin-toggle').find('textarea').val('null');

// })


// $('#originNY').change(function(){
//     if ($(this).val() === "No") {
//         $('.origin-toggle').show();
//         $('.origin-toggle').find('input').val('');
//         $('.origin-toggle').find('textarea').val('');
//         $('#flightType').val('Commerical');
//         $('option[value="Corporate Jet"]').prop('disabled',true);
//         $('option[value="Corporate Jet"]').hide();
//     }
//     if ($(this).val() === "Yes") {
//         $('.origin-toggle').hide();
//         $('.origin-toggle').find('input').val('null');
//         $('.origin-toggle').find('textarea').val('null');
//         $('#flightType').val('Corporate Jet');
//         $('option[value="Corporate Jet"]').prop('disabled',false);
//         $('option[value="Corporate Jet"]').show();
//     }
// })


// $("#private-note").hide();

// $('#flightType').change(function(){
//     if ($(this).val() === "Commerical") {
//         $("#private-note").hide();
//     }
//     if ($(this).val() === "Private") {
//         $("#private-note").show();
//     }
// })


// $('#originNY').change(function(){
//     if ($(this).val() === "No") {
//         $("#origin-note").hide();
//     }
//     if ($(this).val() === "Yes") {
//         $("#origin-note").show();
//         $("#private-note").hide();
//     }
// })


