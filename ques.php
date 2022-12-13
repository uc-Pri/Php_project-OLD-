<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

</head>
<style>
    #exp seq:before {
        content: attr(no);
    }
</style>

<body>


    <nav class="navbar  bg-light border border-dark ">
        <a href="#" class="col-1 col-xs-4 navbar-brand"> <img
                src="https://www.ucertify.com/layout/themes/bootstrap4/images/logo/ucertify_logo.png"
                alt="uCertify Logo"></a>
        <h1 class=" col-xs-4 navbar-nav mx-auto">


            uCertify Prep Test</h1>

        </h1>

    </nav>

    <div class="box  float-left overflow-auto position-absolute w-25" style="height: calc(100vh - 72px); display: none
        ;">
        <div class="box-inner px-3 border bg-white border-dark ">

            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item" id="unatt">
                        <a class="page-link border border-dark text-dark" href="#">Unattempted</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link  text-light" href="#">All</a>
                    </li>
                    <li class="page-item ">
                        <a class="page-link border border-dark px-3 text-dark" href="#" id="att">Attempted</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>


    <div class="container mt-4">

        <p id="ques">
        </p>
        <form class="rad">

        </form>

        <div class="modal " id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Do you want to end the test?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row m-0">
                            <div class="col-md-4 col-3 border-0  text-center ">
                                <div class="font16 result_tab item-middle">
                                    <div class="float-left">
                                        <i class="icomoon-toc-sm s4 position-relative top-10 stpln-clr mr-sm"></i>
                                    </div>
                                    <div class="float-left text-nowrap result_head size-font " aria-hidden="true">
                                        11
                                    </div>
                                </div>
                                <div class="height50 ml-4"><span class="d-none d-sm-inline-block">Items</span></div>
                            </div>
                            <div class="col-md-4 col-3 text-center border-0">
                                <div class="font16 result_tab item-middle">
                                    <div class="float-left">
                                        <i class="icomoon-eye-6 s4 position-relative top-10 stpln-clr mr-sm"></i>
                                    </div>
                                    <div class="float-left text-nowrap result_head size-font " aria-hidden="true">
                                        0
                                    </div>
                                </div>
                                <div class="height50">
                                    <span class="d-none d-sm-inline-block">
                                        Attempted
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-3 text-center border-0">
                                <div class="font16 result_tab item-middle">
                                    <div class="float-left">
                                        <i class="icomoon-eye-5 s4 position-relative top-10 stpln-clr mr-sm"></i>
                                    </div>
                                    <div class="float-left text-nowrap result_head size-font " aria-hidden="true">
                                        11
                                    </div>
                                </div>
                                <div class="height50">
                                    <span class="d-none d-sm-inline-block">
                                        Unattempted
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary slide-toggle " data-bs-dismiss="modal">Go
                            to
                            item list</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <a
                                href="/PHP_PROJECT/result.php" class="text-decoration-none text-white">End
                                Test</a></button>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal" id="timeout">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Timeout!!!
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <a
                                href="/PHP_PROJECT/result.php" class="text-decoration-none text-white">End
                                Test</a></button>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (empty($_GET['test']) || $_GET['test'] = 0) {

            echo '<div class="mt-3 bg-light p-3">
            <h3 class="text-dark">Explanation</h3>
            <small class="review text-wrap text-dark" id="exp"></small>
            </div>';
        }
        ?>



        <footer class=" fixed-bottom mb-2 ">
            <div class=" d-flex justify-content-end ">
                <button class="btn" id="timer"></button>
                <button type="button" class="  btn btn-md-3 btn-outline-primary px-4 slide-toggle me-2">
                    List
                </button>
                <button type="button" class=" btn btn-md-3 btn-outline-dark  px-3 me-2" id="prev">Previous</button>
                <button class="btn " id="page"></button>
                <button type="button" class=" btn btn-md-3 btn-outline-dark px-4 me-2" id="next">Next</button>
                <button type="button" class="  btn btn-md-3 btn-danger px-3 me-2" data-bs-toggle="modal"
                    data-bs-target="#myModal">
                    End Test
                </button>

            </div>
        </footer>









        <script>

            function getFirstQues(first_quest, data) {
                var val = first_quest + 1;
                var n = JSON.parse(data[first_quest]['content_text']);
                $('#ques').html(n['question']);
                $('#ques').prepend(`<b>Q${val}: </b>`);
                $("#page").text("0" + val).append(" of 11");
                $("#prev").prop("disabled", true);
                for (i = 0; i < 4; i++) {
                    let ans_val = JSON.parse(data[first_quest]["content_text"]).answers[i].answer;
                    $('.rad').append(`
                                <div class="d-flex">
                                    <input id="ans${i}" type="radio" class="form-check-input " onclick="checkAnswer(0,'${i}')" name="radios">
                                    <label class="form-check-label ms-1" id="opt${i}">${ans_val}</label>
                                </div>`);
                }
            }
            function next(data) {
                var url = new URL(window.location.href);
                var no = url.searchParams.get("no");
                var k = parseInt(no);
                k++;
                clickNextPrev(data, k);
                if (k == data.length) {
                    $("#next").prop("disabled", true);
                }
                if (k > 0) {
                    $("#prev").prop("disabled", false);
                }

            }
            function prev(data) {
                var url = new URL(window.location.href);
                var no = url.searchParams.get("no");
                var k = parseInt(no);
                k--;
                clickNextPrev(data, k)
                if (k != data.length) {
                    $("#next").prop("disabled", false);
                }
                if (k == 1) {
                    $("#prev").prop("disabled", true);
                }

            }
            function clickNextPrev(data, k) {

                if (k <= data.length) {

                    if (k > data.length) {
                        k = data.length;
                    }
                    var new_url = `/PHP_PROJECT/ques.php/?test=1&no=${k}`;
                    window.history.pushState("data ", "Title ", new_url);
                    document.title = new_url;
                    $('#ques').text(JSON.parse(data[k - 1]['content_text'])['question']);
                    $('#ques').prepend(`<b>Q${k}: </b>`);


                    for (i = 0; i < 4; i++) {
                        $("input[type = radio][name = radios]").prop('checked', false);
                        $("#opt" + i).html(JSON.parse(data[k - 1]["content_text"]).answers[i].answer);
                        // $("#ans"+i).attr('onClick', `checkAnswer(${k}, ${i}, "${ans_val}")`);
                    }

                    $(".review").html(JSON.parse(data[k - 1]["content_text"]).explanation);

                    if (k < 10) {
                        $("#page").text("0" + k).append(" of 11 ");
                    }
                    else {
                        $("#page").text(k).append(" of 11 ");
                    }

                }
            }
        </script>
        <script>
            $(document).ready(function () {
                //Jquery here...
                var url = new URL(window.location.href);
                var no = url.searchParams.get("no");
                let first_quest = parseInt(no) - 1;
                $.ajax(
                    {
                        url: " http://localhost/PHP_PROJECT/file.json",
                        type: "GET",
                        success: function (data) {

                            getFirstQues(first_quest, data);

                            // getting list 
                            for (j = 0; j < 11; j++) {
                                $('.box-inner').append(`<a href="/PHP_PROJECT/ques.php/?test=1&no=${j + 1}" id=${" list " + j} class="snipps text-decoration-none text-dark " ><b> Ques ${j + 1} </b> ${data[j]['snippet']}</a><br><span class="badge text-bg-success mb-3 ">Attempted</span><br>`);
                            }

                            $(".review").html(JSON.parse(data[first_quest]["content_text"]).explanation);


                            $('#next').click(function () {
                                next(data);
                            });

                            $('#prev').click(function () {
                                prev(data);
                            });

                            $(".slide-toggle ").click(function () {
                                $(".box ").toggle();
                            });
                        }
                    });
            });
        </script>

        <script>
            function checkAnswer(ques, ans, ans_val) {
                console.log('HII', ans)
                console.log('ans_val', ans_val)
            }


            function startTimer(duration, display) {
                var time = duration;
                setInterval(function () {
                    minutes = parseInt(time / 60, 10);
                    seconds = parseInt(time % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.text(minutes + "m" + ":" + seconds + "s");

                    if (time <= 0) {
                        $('#timeout').modal('show');
                        // window.location.replace("result.html");

                    }
                    else {
                        time--;
                    }
                }, 1000);
            }

            jQuery(function () {
                var thirtymins = 60 * 30; // set timer
                display = $('#timer');
                startTimer(thirtymins, display);
            });
        </script>





</body>