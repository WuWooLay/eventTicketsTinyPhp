<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
    <script src="http://localhost/eventticket/assets/js/arrive.js"></script>
    <script>
    $(document).ready(function() {
                $('body').bootstrapMaterialDesign();
                $(document).arrive(".btn", function() {
                    // 'this' refers to the newly created element
                    var $newElem = $(this);
                }); 
    });
    </script>


</head>
<body>
    
<h1> HEader </h1>
<!-- <button type="button" class="btn btn-raised btn-primary">Primary</button> -->
