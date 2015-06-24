jQuery(document).ready(function () {
    jQuery("#slide_link_image").attr("readonly", "readonly");
    jQuery("#slide_text_color_text").change(function () {
        var value = $("#current_url").val();
        var current_dealer = $(this).val();
        if (current_dealer != '') {
            jQuery("#slide_link_image").val(value + "" + current_dealer);
        }
    });
});