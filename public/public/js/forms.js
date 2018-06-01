//SOURCE CODES FROM: https://mdbootstrap.com/components/bootstrap-steps-stepper/#!
$(document).ready(function () {
    var current = 1,
        navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn'),
        allPrevBtn = $('.prevBtn'),
        steps = $('.steps-step').length;

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('.disabled')) {
            $item.addClass('btn-info');
            allWells.hide();
            $target.addClass('animated fadeIn');
            $target.show();
        }
    });

    allPrevBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
            currStepSteps = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().children("a");

        currStepSteps.removeClass('btn-info animated pulse infinite').addClass('disabled btn-grey').trigger('click');
        prevStepSteps.removeClass('disabled').addClass('animated pulse infinite').trigger('click');
        $('')
        setProgressBar(--current);
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            currStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().children("a"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type=number],input[type=password],input[type=email],textarea,select.option"),
            isValid = true;

        $(".form-group").removeClass("invalid");

        currStepWizard.removeClass('animated pulse infinite').trigger('click');
        nextStepWizard.removeClass('disabled btn-grey').addClass('animated pulse infinite btn-info').trigger('click');
        setProgressBar(++current);

        // for (var i = 0; i < curInputs.length; i++) {
        //     if (!curInputs[i].validity.valid) {
        //         isValid = false;
        //         $(curInputs[i]).closest(".form-group").addClass("invalid");
        //     }
        // }
        // validateForm();
        //
        // if (isValid) {
        //     currStepWizard.removeClass('animated pulse infinite').trigger('click');
        //     nextStepWizard.removeClass('disabled btn-grey').addClass('animated pulse infinite btn-info').trigger('click');
        //     setProgressBar(++current);
        // }
    });

    $('div.setup-panel div a.btn-info').trigger('click');
    setProgressBar(current);

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");

        if (percent == 100) {
            $(".progress-bar").removeClass('bg-info').addClass('bg-success');
            $(".steps-step a").removeClass('bg-info').addClass('bg-success');
        } else {
            $(".progress-bar").removeClass('bg-success').addClass('bg-info');
            $(".steps-step a").removeClass('bg-success');
        }
    }
});


function validateForm() {
    var formInvalid = false;
    $('input').each(function () {
        if ($(this).val() === '') {
            formInvalid = true;
        }
    });

    if (formInvalid) {
        $('div.setup-content input[type=text],input[type=number],input[type=password],input[type=email],textarea,select').removeClass('valid').addClass('invalid');
    } else {
        $('div.setup-content input[type=text],input[type=number],input[type=password],input[type=email],textarea,select').removeClass('invalid').addClass('valid');
    }
}


//SOURCE CODES FROM: https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#uploadBtn").change(function() {
    readURL(this);
});