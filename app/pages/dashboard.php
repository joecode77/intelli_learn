<?php
$user = check_authenticated();
include_once("header.php");
?>

<div class="mt-5"></div>

<style>
   
    body{
        background-color: #FAFAFA;
    }

    .hover:hover{
        opacity: 0.8;
    }

</style>

<div class="container-fluid" style="padding: 0;">
    <img src=<?= ROOT . "/resources/images/1663706.jpg"?> alt="" class="img-fluid" style="height:200px; width:100%;object-fit:cover;padding:0;">
</div>

<div class="container">
    <h1>
        Dashboard
    </h1>
</div>

<div class="container">
    <div class="row">

    <div class="card mb-3 shadow col-sm-5 mx-auto" style=" border:none;">
        <div class="card-body">
            <p class="text-muted">Courses Enrolled</p>
            <p class="card-text h1 pb-5 ps-5">0</p>
    
        </div>
    </div>

    <div class="card mb-3 shadow col-sm-5 mx-auto text-white" style=" border:none; background-color:#1E1A22;">
        <div class="card-body">
            <p class="text-white">Certificates Earned</p>
            <p class="card-text h1 pb-5 ps-5">0</p>
    
        </div>
    </div>

    </div>

    <div class="row mt-5">

        <a class="btn p-5 col mx-1 my-2 text-white shadow hover" style=" border:none; background-color:#F04465;" href="courses">
            View Courses
        </a>

        <button class="btn p-5 col mx-1 my-2 text-white shadow hover" style=" border:none; background-color:#46BEC5;" href="courses">
            Study Plan
        </button>

        <button class="btn p-5 col mx-1 my-2 text-white shadow hover" style=" border:none; background-color:#1E1A22;" href="courses">
            View Scores
        </button>
    </div>

    <div class="row mt-5" style="background-color: #FAFAFA;">
        <table class="table table-light mb-5">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Enrolled Courses</th>
                    <th>Status</th>
                    <th></th>
                </tr>

            </thead>

            <tbody>

            </tbody>
        </table>

    </div>
    
</div>





</body>
</html>