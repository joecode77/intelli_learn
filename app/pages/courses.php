<?php
$user = check_authenticated();
include_once("header.php");
?>

<div class="mt-5"></div>

<style>
   
    body{
        background-color: #FAFAFA;
    }

</style>

<div class="container-fluid" style="padding: 0;">
    <img src=<?= ROOT . "/resources/images/1663706.jpg"?> alt="" class="img-fluid" style="height:200px; width:100%;object-fit:cover;padding:0;">
</div>

<div class="container">
    <h1>
        Courses
    </h1>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <?php
        $courses = query("SELECT * FROM subject_overview", []);
        ?>

        <?php if(is_array($courses)) : ?>
            <?php foreach($courses as $course) : ?>
                <div class="card mb-3 shadow mx-3 col-md-6 col-sm-12 bg-dark text-white" style=" border:none;">
                    <img src="<?=ROOT?>/<?= $course["picture"] ?>" alt="" class="img-fluid" style="object-fit:cover;padding:0;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $course["name"] ?> <span class="badge bg-secondary"><?= $course["category"] ?></span></h5>
                        <p class="card-text ps-5">
                            <?= $course["description"] ?>
                        </p>
                        <a href="<?=ROOT?>/courses/enroll/?course=<?=$course["id"]?>" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>



         
        

        

        

        <!-- <div class="card mb-3 shadow col-sm-5 mx-auto bg-dark text-white" style=" border:none;">
            <div class="card-body">
                <h5 class="card-title">Biology</h5>
                <p class="card-text pb-5 ps-5">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                     Accusamus, corrupti dolores nobis rem molestiae eos autem
                      dignissimos officia unde repudiandae esse molestias itaque
                       eveniet voluptatem, sed tempore? Asperiores, alias possimus?
                </p>
                <a href="" class="btn btn-primary">Enroll</a>
            </div>
        </div> -->
    </div> 
</div>

</body>
</html>