<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="<?= URL ?>/assets/css/bootstrap-material-design.css">
    <link rel="stylesheet" href="<?= URL ?>/assets/css/eventticket.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
    <script src="<?= URL ?>/assets/js/arrive.js"></script>
    <script>
    $(document).ready(function() {
                $('body').bootstrapMaterialDesign();
                $(document).arrive(".btn", function() {
                    // 'this' refers to the newly created element
                    var $newElem = $(this);
                }); 

                setTimeout(function () {
                    $("#First_Loader").fadeOut();
                }, 500);
    });
    </script>

</head>
<body>

<!-- Loader -->
<div class="FirstLoader" id="First_Loader">
        <div class="imgContainer">
            <img src="<?= URL ?>/assets/images/loader/loader.svg" alt="">
            <h3 class="text-center text-primary bounceIn"> Event Ticket </h3>
        </div>
</div>
<!-- Loader End -->
    
