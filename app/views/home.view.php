<?php 
    include "./Inc/header.php";
    // NavBar Include
    include "./Inc/home/navbar.php";
?>
   

  <!-- Home Container -->
  <div class="Home_Container fadeIn" id="Home_Container">
    <!-- Home WallPaper -->
    <div class="HomeWallpaper">
        <div class="ButtonContainer">
          <h3 class="text-white"> Let's Have Fun Together </h3>
          <button type="button" class="btn btn-raised btn-primary" id="getStartBtn"> Get Start </button>
        </div>
    </div>
    <!-- Home WallPaper End -->
    
    <!-- Sample Cards -->
    <div class="container mt-4 mb-5">
        <div class="header text-center mb-4">
          <h3> Latest Show </h4>
        </div>

        <div class="row" id="user_show_ticket_container">
          
        </div>
          
    </div>
    <!-- Sample Cards End -->

    <!-- Events Banner -->
    <div class="event_banner">

    </div>
    <!-- Events Banner -->

    <!-- Icon Container -->
    <div class="container mt-5">
      <h3 class="text-center mb-5"> Our Services </h3>


        <div class="row">


          <div class="col-md-4 mb-4 text-center">
            <img class="Service_Icon" src="<?= URL ?>/assets/images/logo/twentyfourhour.svg" alt="">
            <h4 class="mt-4"> 24/7 </h4>
          </div>

          <div class="col-md-4 mb-4 text-center">
            <img class="Service_Icon" src="<?= URL ?>/assets/images/logo/firstdelivery.svg" alt="">
            <h4 class="mt-4"> Fastest </h4>
          </div>


          <div class="col-md-4 mb-4 text-center">
            <img class="Service_Icon" src="<?= URL ?>/assets/images/logo/oneclick.svg" alt="">
            <h4 class="mt-4"> OneClick </h4>
          </div>

        </div>
          
    </div>
    <!-- Icon Container End -->

    <!-- FOoter -->
    
    <!-- FOoter End-->

  </div>
  <!-- Home Container End-->

  <!-- Login Container -->
  <div class="Login_Container mt-5 fadeIn d-none" id="Login_Container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
         
          <div class="card">
            <div class="card-header ">
              <h4> Login </h4>
            </div>

            <!-- Form Start -->
            <div class="card-body">
            
              <!-- Form -->
              <form class="mb-4" method="post" id="Login_Form" data-action="<?= URL ?>/login">

                <div class="form-group">
                  <label for="login_email" class="bmd-label-floating">Email address</label>
                  <input name="email" type="email" class="form-control" id="login_email">
                  <span class="bmd-help">We'll never share your email with anyone else.</span>
                </div>

                <div class="form-group">
                  <label for="login_password" class="bmd-label-floating">Password</label>
                  <input name="password" type="password" class="form-control" id="login_password">
                </div>
                
                <div>
                  <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                  <a href="#" class="card-link toRegister"> Register ?</a>
                  <div id="Login_Form_Loading" class="lds-dual-ring d-none"></div>
                  <div id="Login_Form_Error" class="mt-2">
                  </div>

                </div>

              </form>
              <!-- Form End -->

              <!-- Error -->
              <div>

              </div>
              <!-- Error End-->

            </div>
            <!-- Form End -->
          </div>

        </div>
      </div>
      
    </div>
  </div>
  <!-- Login Container End-->

  <!-- Register Container -->
  <div class="Register_Container mt-5 fadeIn d-none" id="Register_Container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
         
          <div class="card">
            <div class="card-header ">
              <h4> Register </h4>
            </div>

            <!-- Form Start -->
            <div class="card-body">
            
              <!-- Form -->
              <form class="mb-4" method="post" id="Register_Form" data-action="<?= URL ?>/user/insert">
               
                <div class="form-group">
                  <label for="register_name" class="bmd-label-floating">Name</label>
                  <input name="name" type="text" class="form-control" id="register_name">
                </div>

                <div class="form-group">
                  <label for="register_email" class="bmd-label-floating">Email address</label>
                  <input name="email" type="email" class="form-control" id="register_email">
                </div>

                <div class="form-group">
                  <label for="register_password" class="bmd-label-floating">Password</label>
                  <input name="password" type="password" class="form-control" id="register_password">
                </div>

                <div class="form-group">
                  <label for="register_phone" class="bmd-label-floating">Phone</label>
                  <input name="phone" type="text" class="form-control" id="register_phone">
                </div>
                
                
                <div>
                  <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                  <a href="#" class="card-link toLogin"> AlreadyAccount ?</a>
                  <div id="Register_Form_Loading" class="lds-dual-ring d-none"></div>
                  <div id="Register_Form_Error" class="mt-2">
                  </div>

                </div>

              </form>
              <!-- Form End -->

            </div>
            <!-- Form End -->
          </div>

        </div>
      </div>
      
    </div>
  </div>
  <!-- Register Container End-->

  <!-- About Container -->
  <div class="About_Container mt-5 fadeIn d-none" id="About_Container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
         
          <div class="card">
            <div class="card-header ">
              <h4> About </h4>
            </div>

            <!-- Form Start -->
            <div class="card-body">
              <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius nisi veniam, doloremque at ipsum cum a! Quae in molestias ullam vero, nisi consequuntur amet deleniti. Commodi doloribus deserunt laudantium obcaecati!</p>
            </div>
            <!-- Form End -->
          </div>

        </div>
      </div>
      
    </div>
  </div>
  <!-- Contact Us Container End-->

  <!-- Contact Container -->
  <div class="Contact_Container mt-5 fadeIn d-none" id="Contact_Container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
         
          <div class="card">
            <div class="card-header ">
              <h4> Contact Us </h4>
            </div>

            <!-- Form Start -->
            <div class="card-body">
                <p> What Ups .</p>
      
                <p> Out Ph : <a href="tel:+95945456456"> 0945456456 </a> </p>

                <p> <button class="btn btn-raised btn-danger btn-sm toHome"> Back</button></p>
            </div>
            <!-- Form End -->
          </div>

        </div>
      </div>
      
    </div>
  </div>
  <!-- Contact Us Container End-->


   
<script>
      $(document).ready( function () {
            var All_Container = [
                'Home_Container',
                'Login_Container',
                'Register_Container',
                'About_Container',
                'Contact_Container'
            ];

            var All_Form = [
              'Login_Form',
              'Register_Form'
            ];

            // Nav Bar Link 
            // @desc Each Link Eg Home/ Login/ Register
            $(".home_page_click").click( function () {
              // get Container
              var container = $(this).data('container');
              allClose();
              console.log(container);
              $('#'+container).removeClass('d-none');
            });

            $(".buyticket").click( function () {
              // get Container
              toLoginPage();
            });

            $(".toRegister").click( function () {
              toRegisterPage();
            });


            $(".toHome").click( function () {
              allClose();
              $("#Home_Container").removeClass('d-none');
            });

            // All Close Container
            function allClose() {
              All_Container.map( function (value) {
                $('#' + value).addClass('d-none');
              });
            }

            // To Sugger Login Page
            function toLoginPage() {
              allClose();
              $('#Login_Container').removeClass('d-none');
            }

            // To Sugger Login Register
            function toRegisterPage() {
              allClose();
              $('#Register_Container').removeClass('d-none');
            }

            $('#getStartBtn').click(function () {
              toLoginPage();
            });

            $('.toLogin').click(function () {
              toLoginPage();
            });


            // All Login_Form Submit 
            $('#Login_Form').on('submit', function(e) {
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
                    $("#Login_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Login_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.isValid) {
                        document.location.href = "<?= URL ?>" + "/";
                      }
                      
                    }
                    $("#Login_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Login_Form_Loading").addClass('d-none');
                  }
                });
            });

            // All Login_Form Submit 
            $('#Register_Form').on('submit', function(e) {
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
                    $("#Register_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Register_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'You Can Login Now' + '</div>';
                        ['name', 'email', 'password', 'phone'].map( function (value) {
                          $('#register_'+value).val('');
                        });
                        $("#Register_Form_Error").html(success);
                      }
                    }
                    $("#Register_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Register_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#Register_Form_Error").html(err);
                    }
                  }
                });
            });


            // 

            function makeTicketCard(obj) {
                  var str = ( obj.ticket_list.ga_quantity == 0 && 
                              obj.ticket_list.vip_quantity == 0 && 
                              obj.ticket_list.vvip_quantity == 0)  ? 'SoldOut' : '';
                           
            return $('<div>', {class: 'col-sm-6 col-md-3 mb-3 fadeIn'})
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
                          $("<button>", {type: "button", href: "#!", 
                            class: "btn btn-raised btn-"
                            + (obj.free_ticket == 1 ? "success" : obj.free_ticket == 0 && str == '' ? 'info' : 'danger') 
                            +" buyticket" 
                          })
                          .append(
                            obj.free_ticket == 1 ? "FreeTicket" : obj.free_ticket == 0 && str == '' ? 'Buy Now' : str
                          )
                          .data("id", obj.id)
                          .click( function () {
                            console.log(obj);
                            toLoginPage();
                          })
                        )
                      )
                    )
            }

            function getByUserTicket(page = 1) {
             $.get('<?= URL ?>/ticket/getByUserTicket?page='+page, function (data) {
                if(data.errors) {
                  console.log(data.errors);
                } else if (data.data) {
                        $('#ticket_list_get_total_page').html(data.total_page);
                        $('#ticket_table_body > tr').remove();
                        if(data.data.length > 0 ) {
                            $("#user_show_ticket_container> div").remove();
                            data.data.map( function (user, index)  {
                              console.log(index);
                              if(index > 3 ) return;
                              // console.log(user);
                              makeTicketCard(user).appendTo("#user_show_ticket_container");
                            } );
                        }  
                  // console.log('Get Data');
                }
             } );
          }

          setTimeout( function () {
            getByUserTicket();
          }, (500));


            
      });
</script>
<?php 
    include "./Inc/footer.php";
?>