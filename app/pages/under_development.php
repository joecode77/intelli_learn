<?php
$user = check_authenticated();
include_once("header.php");
?>

<div class="mt-5"></div>
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

<h1">

</h1>

<div class="typewriting-text text-center" style="top:50%;position:absolute;">
            <h1 class="text-muted text-nowrap type" style="display: flex;align-items:center;">
              This application is still under development.
            </h1>
</div>

</body>
</html>
