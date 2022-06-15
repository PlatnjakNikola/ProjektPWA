$(function() {
    $("form[name='registracija']").validate({
        rules: {
            ime:{
                required: true,
                minlength: 5,
            },
            prezime:{
                required: true,
                minlength: 5,
            },
            username: {
                required: true,
                minlength: 5,
            },
            password : {
                required: true,
                minlength: 8,
            },
            passwordRepeat:{
                required: true,
                equalTo: "#password",
            }
        },
        messages: {
            ime:{
                required: "Potrebno je upisati ime",
                minlength: "Korisničko ime ne smije biti manje od 5 znakova",
            },
            prezime:{
                required: "Potrebno je upisati prezime",
                minlength: "Korisničko ime ne smije biti manje od 5 znakova",
            },
            username: {
                required: "Potrebno je upisati korisničko ime",
                minlength: "Korisničko ime ne smije biti manje od 5 znakova",
            },
            password:{
                required: "Potrebno je upisati lozinku",
                minlength: "Korisničko ime ne smije biti manje od 8 znakova",
            },
            passwordRepeat:{
                required: "Potrebno je upisati ponovljenu lozinku",
                equalTo: "Lozinke trebaju biti iste"
            },
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
});