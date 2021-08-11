@extends('kendoVersion.master')

@section('page')

    <div id="registerLayout">
        <form id="registerForm">
            <br>
            <br>
            <br>
            <h1><i class="material-icons">
                    person_add</i></h1>
            <h1>Register in our platform</h1>
        </form>

        <script>
            $(document).ready(function() {

                $("#registerForm").kendoForm({
                    validatable: {
                        errorTemplate: "<span><strong>#=message#</strong></span>"
                    },
                    formData: {
                        email: "",
                        name: "",
                        lastname: "",
                        password: "",
                    },
                    items: [{
                            field: "email",
                            label: "email",
                            editor: function(container, options) {
                                container.append($(
                                    "<input type='email' class='k-textbox k-valid' id='email' name='email' title='email' required='required'>"
                                ));
                            },
                            validation: {
                                required: true
                            }
                        }, {
                            field: "name",
                            label: "name",
                            validation: {
                                required: true,
                            }
                        },
                        {
                            field: "lastname",
                            label: "lastname",
                            validation: {
                                required: true,
                            }
                        },
                        {
                            field: "password",
                            label: "password",
                            editor: function(container, options) {
                                container.append($(
                                    "<input type='password' class='k-textbox k-valid' id='password' name='password' title='password' required='required'>"
                                ));
                            },
                            validation: {
                                required: true,
                                message: "Password must have at least 6 characters",

                                length: function(input) {
                                    if (input.is("[name='password']") && input.val() != "") {
                                        input.attr("data-length-msg",
                                            "Password must have at least 6 characters");
                                        return input.val().length >= 6;
                                    }

                                    return true;
                                },
                            }
                        }
                    ],
                    submit: function(e) {
                        e.preventDefault();
                        let email = $("input[name=email]").val();
                        let name = $("input[name=name]").val();
                        let lastname = $("input[name=lastname]").val();
                        let password = $("input[name=password]").val();
                        let token = "{{ csrf_token() }}";
                        data = {
                            email: email,
                            name: name,
                            lastname: lastname,
                            password: password,
                            _token: token,
                        };
                        console.log(data);

                        $.ajax({
                            url: "ajaxRegister",
                            data: data,
                            method: "post",
                            success: function(response) {
                                if (response["status"] == "success") {
                                    alert("User registered");
                                } else {
                                    alert("Email already in use ):");
                                }
                            }
                        });


                    },
                });

                $(".k-form-submit").html('Register');


            });
        </script>
    </div>
@endsection
