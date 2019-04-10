<script>

    $(document).ready(function () {



        var All_Container = [
            'Dashboard_Container',
            'Order_Container',
            'Profile_Container',
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