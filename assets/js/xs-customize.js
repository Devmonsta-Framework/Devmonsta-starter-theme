jQuery(document).ready(function ($) {
  "use strict";

  let arr = [
    "footer_builder_select",
    "header_builder_select"
  ];
  arr.forEach(element => {
    if ($("#_customize-input-" + element).length > 0) {
      function header_builder(current , type) {
        let id = type === 'change' ? current.val() : current.val(),
            admin_url = admin_url_object.admin_url + id;
          current.parents('.control-section').find(".xs_builder_edit_link").attr("href", admin_url);
      }
      $("#_customize-input-" + element).each(function () {
        header_builder($(this));
        $("#_customize-input-" + element).on("change", function (e) {
          header_builder($(this), e.type)
        }).trigger("change");
      })
    }
  });

});
