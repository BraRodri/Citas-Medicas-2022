<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago After</title>

    <style type="text/css">
        *, ::after, ::before {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        .container {
            max-width: 960px;
        }

        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .text-center {
            text-align: center!important;
        }
/*
        .pb-5, .py-5 {
            padding-bottom: 3rem!important;
        }*/

        .card {
           /* position: relative;
            display: -ms-flexbox;*/
            display: flex;
            /*-ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;*/
            background-color: rgba(0,0,0,.03);
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: .25rem;
            justify-content: center;
        }

        .card-body {
            /*-ms-flex: 1 1 auto;
            flex: 1 1 auto;*/
            min-height: 1px;
            padding: 1.25rem;
            margin: auto !important;
            justify-content: center;
            text-align: center;
        }

        .textoColor{
            color: #5eebe3;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="py-5 text-center">
            <h2 style="font-size: 30px;"><span style="font-family: 'Fredoka One', cursive; font-size: 30px; color: #5a5958;">Recordatorio de tu Cita</span></h2>
            <img src="cid:img-pay-after" class="img-fluid" style="max-width: 580px; margin-botom: -10px" alt="img-pay-after">
        </div>
        <div class="py-5 text-center">
            <div class="card">
                <div class="card-body d-flex align-items-center text-center" style="text-align: center; justify-content: center;">
                    <h4 style="font-weight: 400; text-align: center; line-height: 1.6; word-wrap: normal; font-size: 20px; caret-color: rgb(62, 62, 86); color: #3e3e56; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; margin: 0px 0px 10px; padding: 0px" align="center">
                        Saludos {{$namePacient}}, tienes 12 horas para realizar el pago de tu cita con {{$nameMedic}}, de lo contrario el estado de la fecha y hora agendada cambiarán a disponible.
                    </h4>
                    <h5 style="font-weight: 400; text-align: center; line-height: 1.6; word-wrap: normal; font-size: 17px; caret-color: rgb(81, 81, 97); color: #74747c; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; margin: 0px 0px 10px; padding: 0px">
                        Puedes realizar el pago en el siguiente enlace {{$urlServer}}/login, para mayor información, comunicarse al teléfono <strong>{{$telephoneMedic}}</strong>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
