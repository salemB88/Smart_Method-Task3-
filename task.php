<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Control panel</title>

</head>
<style>
    body {
        background-color: #0250c5;
    }

    .button-super {
        position: relative;
    }

    .btn-1 {
        position: absolute;
        left: 10px;
        top: 65px;
    }

    .btn-2 {
        position: absolute;
        left: 40px;
        top: 65px;
    }

    .btn-3 {
        position: absolute;

        left: -50px;
        top: 125px
    }

    .btn-4 {
        position: absolute;
        left: -135px;
        top: 5px;
    }

    .btn-5 {
        position: absolute;
        left: -110px;
        top: 65px;
    }

    .container {
        height: 600px;
    }

    .button-super>.btn {
        border-radius: 40px;
    }



    .input-range {

        border: 1px solid;
        border-radius: 20px;
        text-align: center;

    }
</style>
<script>

    function change_range(value, range_id) {
        document.getElementById(range_id).value = value;
    }

    function change_input(value, input_id) {
        document.getElementById(input_id).value = value;
    }
</script>

<body>
    <!-- first container -->
    <div class="container">
        <div class="row justify-content-between pt-5 ">
            <div class="col-lg-5 col-sm-12 bg-white mb-5" style="border-radius: 20px;">
                <form action="connection.php" method="POST">


                    <div class="container">
                        <h1 class="text-center pt-2">Arm Panel</h1>


                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 1</label>

                                <input type="number" class="input-range" name="motor1" id="motor_text1" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range1')" ;>

                                <input type="range" class="form-range" id="motor_range1" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text1')" ;>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 2</label>

                                <input type="number" class="input-range" name="motor2" id="motor_text2" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range2')" ;>

                                <input type="range" class="form-range" id="motor_range2" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text2')" ;>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 3</label>

                                <input type="number" class="input-range" name="motor3" id="motor_text3" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range3')" ;>

                                <input type="range" class="form-range" id="motor_range3" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text3')" ;>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 4</label>

                                <input type="number" class="input-range" name="motor4" id="motor_text4" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range4')" ;>

                                <input type="range" class="form-range" id="motor_range4" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text4')" ;>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 5</label>

                                <input type="number" class="input-range" name="motor5" id="motor_text5" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range5')" ;>

                                <input type="range" class="form-range" id="motor_range5" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text5')" ;>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col col-12">

                                <label class="form-label">Motor 6</label>

                                <input type="number" class="input-range" name="motor6" id="motor_text6" max="180"
                                    min="0" value="90" oninput="change_range(this.value , 'motor_range6')" ;>

                                <input type="range" class="form-range" id="motor_range6" max="180" min="0" value="90"
                                    oninput="change_input(this.value, 'motor_text6')" ;>
                            </div>
                        </div>





                        <div class="row">
                            <div class="col col-12   text-center pt-5">

                                <button type="submit" name="Save" class="btn btn-primary">Save</button>
                                <button type="submit" name="Run" class="btn btn-secondary">Run</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



            <div class=" col-lg-5  col-sm-12  bg-white mb-5" style="border-radius: 20px;">
                <form action="connection.php" method="POST">
                    <h1 class="text-center">Base Panel</h1>
                    <div class="container">
                        <div class="row">
                            <div class=" col-12 text-center ">
                                <form action="" method="post">
                                    <div class="btn-group button-super" role="group" aria-label="Basic example">
                                        <button type="submit" name="left" class="btn btn-1 btn-secondary">Left</button>

                                        <button type="submit" name="stop" class="btn btn-2 btn-secondary "
                                            style="border-radius: 10px; width: 90px;">Stop</button>
                                        <button type="submit" name="backward" class="btn btn-3 btn-secondary"
                                            style="border-radius: 10px; width: 90px;">Backward</button>
                                        <button type="submit" name="forward" class="btn btn-4 btn-secondary"
                                            style="border-radius: 10px; width: 90px;">Forward</button>
                                        <button type="submit" name="right" class="btn btn-5 btn-secondary">
                                            Right</button>
                                    </div>


                            </div>
                </form>
            </div>






        </div>


    </div>
    </div>
    </div>

    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "e5f96f8c-3d32-4ede-827c-ed3abc7df0eb", // The ID of this integration.
            region: "eu-gb", // The region your integration is hosted in.
            serviceInstanceID: "7b10e2ca-33ff-419b-865f-400a8d8951a4", // The ID of your service instance.
            onLoad: function(instance) { instance.render(); }
          };
        setTimeout(function(){
          const t=document.createElement('script');
          t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
          document.head.appendChild(t);
        });
      </script>
</body>

</html>