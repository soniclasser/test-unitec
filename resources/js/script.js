$( "#degree" ).change(function () {
    const value = $(this).val();
    const seletc = $('#interest_leve_id');
    const opt_2 = $('.level_2');
    const opt_3 = $('.level_3');
    seletc.val('')
    opt_2.show();
    opt_3.show();

    if (value == 1) {
        seletc.hide();
    }
    else if (value == 2) {
        seletc.show();
        opt_3.hide();
    } else if(value == 3) {
        seletc.show();
        opt_2.hide();

    }
});
