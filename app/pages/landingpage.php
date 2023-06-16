<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The AI-powered application revolutionizes education by offering a structured and engaging virtual school experience">


    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;800&family=Poppins:wght@100;300;400;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href=<?= ROOT . "/resources/css/style.css"?>>
    <style>
      * {
        font-family: Poppins;
      }

      .typewriting-text {
        display: inline-block;
      }

      .type {
        border-right: 0.15em solid;
        width: 0;
        overflow: hidden;
        animation: typewrite steps(60) 7s infinite, blink 0.8s infinite;
      }

      @keyframes typewrite {
        0% {
          width: 0;
        }

        40% {
          width: 100%;
        }
        60% {
          width: 100%;
        }
        100% {
          width: 0;
        }
      }

      /* @keyframes typewrite-reverse {
        from {
          width: 100%;
        }

        to {
          width: 0;
        }
      } */

      @keyframes blink {
        from {
          border-color: transparent;
        }

        to {
          border-color: grey;
        }
      }
    </style>
  
    <title>Intelli Learn</title>
  </head>
  <body>
    <div
      class="container align-items-center ps-5 mt-0 mt-sm-5"
      style="display: flex; align-items: center; height: 100vh"
    >
      <!-- style="position: absolute; top: 45%" -->
      <div class="row my-auto">
        <div class="col-md-6">
          <h1 class="text-dark">Intelli Learn can</h1>
          <div class="typewriting-text text-center">
            <h1 class="text-muted text-nowrap type">
              Deliver interactive lectures
            </h1>
          </div>

          <p>
            The AI-powered application revolutionizes education by offering a
            structured and engaging virtual school experience. Students sign up,
            select their class/level, and desired subjects, generating a
            customized curriculum with relevant learning materials. The
            application delivers interactive lectures all generated on the fly
            by AI, ensuring informative and enjoyable learning. Regular
            assignments and quizzes are graded, with scores accessible on the
            dashboard. Students must achieve a threshold score to progress, and
            personalized study materials are provided for improvement.
          </p>

          <p>
            Additionally, the application fosters collaboration through
            discussion rooms, connecting students studying the same courses,
            promoting knowledge sharing and community. A dedicated section
            focuses on skill development, aiding professionals with new skills,
            CV creation, and interview preparation, leading to certificates.
            Exam preparation is prioritized with access to past questions and
            practice materials, instilling confidence in students. By
            integrating personalized learning, collaboration, skill development,
            and exam preparation, this AI-powered application provides a
            comprehensive educational approach.
          </p>

          <a class="btn" style="background-color: #4f46e5; color: #fff" href="dashboard">
            Get Started
          </a>
        </div>

        <div class="col-md-6">
          <img
            src=<?= ROOT . "/resources/images/landing_page_image.jpg"?>
            class="img-fluid"
            alt="e-learning image"
            style="margin-top: auto; height: 100%; object-fit: cover"
          />
          <!-- <div class="blockquote-footer">
            <a
              class="text-decoration-none"
              href="https://www.freepik.com/free-vector/online-certification-illustration_8703118.htm#query=learning%20illustration&position=4&from_view=keyword&track=ais"
              >Freepik</a
            >
          </div> -->
        </div>
      </div>
    </div>

    <script src=<?= ROOT . "/resources/js/script.js"?>></script>
  </body>
</html>
