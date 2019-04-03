<?php 
    include "./Inc/header.php";
?>
<div>
    <ul>
        <li>1 Home Page. <button id="btn1" type="button" class="btn btn-raised bg-info text-white"> Primary </button> </li>
        <li>2 Home Page.</li>
        <li>3 Home Page.</li>
        <li>4 Home Page.</li>
        <li>5 Home Page.</li>
    </ul>
</div>


<script>
      $(document).ready( function () {
   
            var btn = $("#btn1");
            btn.click( function () {
                // alert("click");
                
                var parent = $(btn).parent();
                $(parent).append(
                        $("<div>")
                        .append(
                            $("<button>", {
                                type: "button",
                                class: "btn btn-raised bg-info text-white"
                            }).html(
                                "Button"
                            ).click(function () {
                                btn.click();
                            })
                        )
                );

                // $(parent);
            });
      });
</script>
<?php 
    include "./Inc/footer.php";
?>