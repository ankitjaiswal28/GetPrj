<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        .box {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;

            transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
            opacity: 1;
        }

        .parsley-type,
        .parsley-required,
        .parsley-equalto,
        .parsley-pattern,
        .parsley-length {
            color: #ff0000;
        }
    </style>
    {{-- <script src="{{asset('public/js/app.js')}}"></script>
    <script src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script> --}}
    {{-- <script src="public/js/app.js"></script> --}}
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>
    <title>Employe Login Portal</title>

</head>

<body>
    <div class="container">
        <h3>Welcome Here</h3>
        <?php
        echo $timaestamp = date("Y-m-d H:i:s");
        ?>
    </div>
    <div class="container">
        <div class="container">
            <div class="main">
                <form action="#" method="get" name="form_name" id="form_id" class="form_class">
                    <h2>Login Portal</h2>
                    <label>Email :</label>

                    <input type="text" name="email" id="email" placeholder="Valid Email" required data-parsley-type="email" data-parsley-trigger="keyup" />
                    <label>Password :</label>

                    <input type="password" name="passwords" id="passwords" placeholder="Password" />
                    <button type="button" name="submit_id" id="btn_id">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#form_id').parsley();
            $('#btn_id').click(function() {
                if ($('#form_id').parsley().isValid()) {
                    var createForm = $("#form_id");
                    var formData = createForm.serialize();
                    // var base_url = {!!json_encode(url('/')) !!};
                    $.ajax({
                        url: '/checkLogin',
                        type: 'POST',
                        data: formData,
                        success: function(data) {
                            var response = data.trim();
                            if(response === 'NotFound') {
                                alert('Email Id Not Found')                                
                            } else if(response === 'PassNotFound') {
                               alert('PassWord Does Not Match')
                            } else{
                                   //console.log(data);
                               //  alert('Succesfuly Login')
                                  window.location.href = 'admindashboard';
                            }
                        },
                    })
                }
                // console.log($('#form_id').parsley().isValid());

            })
        });
    </script>
</body>

</html>
