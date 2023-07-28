"use strict";
var KTSigninGeneral = (function () {
    var e, t, i;
    return {
        init: function () {
            (e = document.querySelector("#kt_sign_in_form")),
                (t = document.querySelector("#kt_sign_in_submit")),
                (i = FormValidation.formValidation(e, {
                    fields: {
                        email: { validators: { regexp: { regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: "Geçerli bir e-posta adresi değil" }, notEmpty: { message: "E-posta adresi girmek zorunlu!" } } },
                        password: { validators: { notEmpty: { message: "Şifre girmek zorunlu!" }, stringLength : { min:5,max:15,  message: 'Şifre, 5 ila 15 karakter uzunluğunda olmalıdır',} } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),
                t.addEventListener("click", function (n) {
                    n.preventDefault(),
                        i.validate().then(function (i) {
                           if( "Valid" == i) {
                               t.setAttribute("data-kt-indicator", "on");
                               t.disabled = !0
                               var formData = {
                                   email: $('input[name="email"]').val(),
                                   password: $('input[name="password"]').val()
                               };

                               $.ajaxSetup({
                                   headers: {
                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                   }
                               });

                               $.ajax({
                                   type: $(e).attr('method'),
                                   url: $(e).attr('action'),
                                   data: formData,
                                   dataType: "json",
                                   encode: true,
                               }).done(function (data) {
                                   if(data.message === 'success') {
                                       window.location = data.redirectUrl;
                                   } else {
                                       Swal.fire({
                                           text: "Kullanı adı yada şifre yanlış",
                                           icon: "error",
                                           buttonsStyling: !1,
                                           confirmButtonText: "Tamam",
                                           customClass: { confirmButton: "btn btn-primary" },
                                       }).then(function() {
                                           window.location.reload();
                                       });
                                   }
                               });
                           } else {
                                Swal.fire({
                                   text: "Hatalar tespit edildi, lütfen tekrar deneyin.",
                                   icon: "error",
                                   buttonsStyling: !1,
                                   confirmButtonText: "Tamam",
                                   customClass: { confirmButton: "btn btn-primary" },
                               });
                           }
                        });
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
