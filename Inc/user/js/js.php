<script>

    $(document).ready(function () {



        var All_Container = [
            'Ticket_Container',
            'Ticket_Detail_Container',
            'Order_Container',
            'Profile_Container',
            'Coming_Soon_Container'
        ];

        // Nav Bar Link 
        // @desc Each Link Eg Dashboard/ Login/ Register
        $(".container_change_click").click( function () {
              // get Container
              var container = $(this).data('container');
              // console.log(container);
              allClose();
              if(container == 'Profile_Container') {
                checkProfile();
              }
              $('#'+container).removeClass('d-none');
        });


        $(".toLogout").click( function () {
            toLogout();
        });
        
        // All Close Function
        function allClose() {
              All_Container.map( function (value) {
                $('#' + value).addClass('d-none');
              });
        };
        // To Sugger Login Page
        function toLogout() {
            document.location.href= "<?= URL ?>/logout";
        }

        // Check Profile 
        function checkProfile() {
          $.get('<?=URL?>/login/check', function (data) {
                  console.log(data);
                  var url = "<?=URL?>/user/get/" + data.data.id ;
                  $.get(url, function (getData) {
                            console.log('Get Editi Profile Data=>', getData);
                            profileFormSet(getData.data);
                  });
          });
        }

        // Set Profile Form Set
        function profileFormSet(obj) {

          $("#profile_image_input_id").val(obj.id);
          $('#profile_id').val(obj.id);
          $('#profile_card_name').html(obj.name);
          $('#profile_name').val(obj.name);
          $('#profile_email').val(obj.email);
          $('#profile_phone').val(obj.phone);

          $('#profile_image').css({
            backgroundImage: 'url('+obj.image+')'
          })

          console.log($('#profile_image'));
        }
        
        // All Login_Form Submit 
        $('#Profile_Form').on('submit', function(e) {
                e.preventDefault();

                console.log($(this).data('action'));

                var url = $(this).data('action');

                $.ajax({
                  url: url,
                  type: 'POST',
                  data: new FormData(this),
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                    $("#Profile_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Profile_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Updated' + '</div>';
                        [ 'name', 'email', 'phone'].map( function (value) {
                          $('#profile'+value).val('');
                        });
                        checkProfile();
                        $("#Profile_Form_Error").html(success);
                      }
                    }
                    $("#Profile_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Profile_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#Profile_Form_Error").html(err);
                    }
                  }
                });
        });

        // All Login_Form Submit 
        $('#Profile_Image_Form').on('submit', function(e) {
                e.preventDefault();

                console.log($(this).data('action'));

                var url = $(this).data('action');

                $.ajax({
                  url: url,
                  type: 'POST',
                  data: new FormData(this),
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                    $("#Profile_Image_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Profile_Image_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Updated' + '</div>';
                        // [ 'name', 'email', 'phone'].map( function (value) {
                        //   $('#profile'+value).val('');
                        // });
                        checkProfile();
                        $("#Profile_Image_Form_Error").html(success);
                      }
                    }
                    $("#Profile_Image_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Profile_Image_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#Profile_Image_Form_Error").html(err);
                    }
                  }
                });
        });


        /**
         *
         *  Ticket Form Submit
         *
         */

         $("#submit").click( function () {
          $("#"+"ga"+"_quantity").data("quantity", 50).html(50);
           var user_id = <?= $_SESSION['auth']['id'] ?>;
          //  Check All is Zero ?
          if(
            $("#ga_user_input_quantity").val() <= 0 &&
            $("#vip_user_input_quantity").val() <= 0 &&
            $("#vvip_user_input_quantity").val() <= 0 
          ) {

            alert("Plz Fill Something?")
            return;
          }
          var total = 0;
          // Check User Input Quantity
          if($("#ga").data("ga") == 1 ) {
            console.log("Ga Exist");
            var ga_qty = $("#ga_user_input_quantity").val();
            var ga_price = $("#ga_price").data("price");
            if(ga_qty > 0 ) {
              console.log("Total Ga Price => "+ga_qty+" Qty x "+ga_price+" Kyats = "+ (ga_qty * ga_price)+" Kyats ");
              total += (ga_qty * ga_price);
            }

          }

          if($("#vip").data("vip") == 1 ) {
            console.log("vip Exist");
            var vip_qty = $("#vip_user_input_quantity").val();
            var vip_price = $("#vip_price").data("price");
            if(vip_qty > 0 ) {
              console.log("Total vip Price => "+vip_qty+" Qty x "+vip_price+" Kyats = "+ (vip_qty * vip_price)+" Kyats ");
              total += (vip_qty * vip_price);
            }

          }

          if($("#vvip").data("vvip") == 1 ) {
            console.log("vvip Exist");
            var vvip_qty = $("#vvip_user_input_quantity").val();
            var vvip_price = $("#vvip_price").data("price");
            if(vvip_qty > 0 ) {
              console.log("Total vvip Price => "+vvip_qty+" Qty x "+vvip_price+" Kyats = "+ (vvip_qty * vvip_price)+" Kyats ");
              total += (vvip_qty * vvip_price);
            }

          }

          console.log("All Total => ", total);

          console.log("Submit");

         });

         var ticketTypeArr = [
           'ga',
           'vip',
           'vvip'
         ];

         ticketTypeArr.map(function (value) {
           $("#" + value + "_user_input_quantity").on("keyup", function (e) {
             var val = $(this).val();
             var thi = $(this);

            //  var check_quantity =;
             console.log(val);

             if(val == '') {
                alert("Not Number");
                $(thi).val(0);
                return ;
             }

             if(val >  $("#"+value+"_quantity").data("quantity")) {
               alert("Check Limt");
               $(thi).val( $("#"+value+"_quantity").data("quantity"));
             }

           });
         });

        /**
         *  Initial Get
         */ 
         // Get Initial Cretor Ticket List
          $("#ticket_list_get").click( function () {
                var page = $('#ticket_list_get_input').val();
                if(page > $('#ticket_list_get_total_page').html()) {
                    alert(' More than Count');
                    return false;
                }
                getByUserTicket(page);
          });

          function getByUserTicket(page = 1) {
             $.get('<?= URL ?>/ticket/getByUserTicket?page='+page, function (data) {
                if(data.errors) {
                  console.log(data.errors);
                } else if (data.data) {
                        $('#ticket_list_get_total_page').html(data.total_page);
                        $('#ticket_table_body > tr').remove();
                        if(data.data.length > 0 ) {
                            $("#user_show_ticket_container> div").remove();
                            data.data.map( function (user)  {
                              console.log(user);
                              makeTicketCard(user).appendTo("#user_show_ticket_container");
                            } );
                        }  
                  console.log('Get Data');
                }
             } );
          }
          getByUserTicket();

          
        /**
         * Make Card Container
         */

         function makeTicketCard(obj) {
           return $('<div>', {class: 'col-sm-6 col-md-4 mb-3'})
                  .append(
                    $('<div>', {class: 'card'})
                    .append(
                      $('<div>', {class: 'image-container', style: 'background-image:url('+obj.image+')'})
                    )
                    .append(
                      $('<div>', {class: 'card-body'})
                      .append("<h5 class='card-title card-fade-title'>"+obj.title+"</h5>")
                      .append("<p>"+obj.event_category_name+" in "+obj.location_name+"</p>")
                      .append("<p class='card-text card-description'>"+obj.description+"</p>")
                      .append(
                        $("<button>", {type: "button", href: "#!", class: "btn btn-raised btn-"+(obj.free_ticket == 1 ? "success" : "info")+" buyticket" })
                        .append(
                          obj.free_ticket == 1 ? "FreeTicket" : "Buy Now"
                        )
                        .data("id", obj.id)
                        .click( function () {
                          console.log("CLICK DIVVVV");
                          var id = $(this).data("id");
                          console.log("TicketId => ", id);
                          console.log($("#Ticket_Detail_Container"));
                          allClose();
                          $("#Ticket_Detail_Container").removeClass("d-none");
                        })
                      )
                    )
                  )

         }

        /**
         *
         * Order Start
         *
         */
        var All_Order_Container = [
            'Order_List_Container'
        ];

        function allOrderContainerClose() {
            All_Order_Container.map( function (value) {
                $('#' + value).addClass('d-none');
            });
        }

        // Order Container Link 
        $(".order_container_change_click").click( function () {
              // get Container
              var container = $(this).data('container');
              allOrderContainerClose();
              console.log(container);
              $('#'+container).removeClass('d-none');
        });
        
    });

</script>