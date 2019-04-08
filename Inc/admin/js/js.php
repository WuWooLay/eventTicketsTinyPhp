<script>

    $(document).ready(function () {

        var All_Container = [
            'Dashboard_Container',
            'User_Container',
            'Ticket_Container',
            'Profile_Container'
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

        

        /**
         * 
         * For User Vision
         * 
         *  */ 
        var All_User_Container = [
            'User_List_Container',
            'User_Add_Container',
            'User_Edit_Container',
            'User_Creator_Add_Container',
            'User_Admin_Add_Container'
        ];

        function allUserContainerClose() {
            All_User_Container.map( function (value) {
                $('#' + value).addClass('d-none');
            });
        }

        // User Container Link 
        $(".user_container_change_click").click( function () {
              // get Container
              var container = $(this).data('container');
              allUserContainerClose();
              console.log(container);
              $('#'+container).removeClass('d-none');
        });

        userGet();

        $("#user_list_get").click( function () {
            var page = $('#user_list_get_input').val();
            if(page > $('#user_list_get_total_page').html()) {
                alert(' More than Count');
                return false;
            }
            userGet(page);
        });

        function userGet(page = 1) {
            console.log('userGet');
            $.ajax({
                url: '<?=URL?>/user/get?page=' + page,
                type: 'GET',
                data:'',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                   if(data) {
                       console.log(data);
                       $('#user_list_get_total_page').html(data.total_page);
                       $('#user_table_body > tr').remove();
                       if(data.data.length > 0 ) {
                           data.data.map( function (user)  {
                            userListTable(user).appendTo("#user_table_body");
                           } );
                       }
                   }
                },
                error: function(e) {
                   console.log(e);
                }
            });
        }

        function userListTable(data) {
            return $('<tr>')
            .append(
                $('<th>').html(data.id)
            )
            .append(
                $('<td>').html(data.name)
            )
            .append(
                $('<td>').html(data.role_name)
            )
            .append(
                $('<td>')
                    .append(
                        $('<button>', {type: 'button', class: 'btn btn-success  bmd-btn-icon'})
                        .html('<i class="material-icons medium text-success">edit</i>')
                        .data('data', data)
                        .click( function () {
                            console.log('edit');
                            var data = $(this).data('data');
                            console.log(data);

                            if(data.id == 1) {
                                // Admin
                                // $.get('/user/check').done();
                                $.ajax({
                                    url: '<?= URL ?>/login/check',
                                    type: 'GET',
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    beforeSend: function() {
                                        // $("#Register_Form_Loading").removeClass('d-none');
                                    },
                                    success: function(data2) {
                                        console.log('Get Self Data=>', data2);

                                        if(data2.data.id == data.id ) {
                                          // Get User Edit Profile
                                          var url = "<?=URL?>/user/get/" + data.id ;
                                          $.get(url, function (getData) {
                                                    console.log('Get Editi Profile Data=>', getData);
                                                    userEditFormSet(getData.data);
                                          });
                                        } else {
                                         
                                          alert("You Are Not Super Admin");
                                        }
                                    },
                                    error: function(e) {
                                        console.log('Error=>', e);
                                    }
                                });
                            } else {
                                 // Get User Edit Profile
                                  var url = "<?=URL?>/user/get/" + data.id ;
                                  $.get(url, function (getData) {
                                            console.log('Get Editi Profile Data=>', getData);
                                            userEditFormSet(getData.data);
                                  });
                            }
                        })
                    )
            )
            .append(
                $('<td>')
                    .append(
                        $('<button>', {type: 'button', class: 'btn btn-danger bmd-btn-icon ' +  (data.id == 1 ? 'disabled' : '')})
                        .data('data', data)
                        .html(
                            '<i class="material-icons medium text-danger '
                            +
                            '">delete</i>'
                        )
                        .click( function () {
                            console.log('delete');
                            console.log($(this).data('data'));
                            var user = $(this).data('data');
                            if(user.id == 1 ) {
                                alert(' This is Super Admin Cant Delete ');
                                return false;
                            }
                        })
                    )
            );
                             
        }

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
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Added' + '</div>';
                        userGet();
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

        // All Login_Form Submit 
        $('#Creator_Register_Form').on('submit', function(e) {
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
                    $("#Creator_Register_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Creator_Register_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Added' + '</div>';
                        userGet();
                        ['name', 'email', 'password', 'phone'].map( function (value) {
                          $('#register_creator_'+value).val('');
                        });
                        $("#Creator_Register_Form_Error").html(success);
                      }
                    }
                    $("#Creator_Register_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Creator_Register_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#Creator_Register_Form_Error").html(err);
                    }
                  }
                });
        });

        // All Login_Form Submit 
        $('#Admin_Register_Form').on('submit', function(e) {
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
                    $("#Admin_Register_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#Admin_Register_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Added' + '</div>';
                        userGet();
                        ['name', 'email', 'password', 'phone'].map( function (value) {
                          $('#register_admin_'+value).val('');
                        });
                        $("#Admin_Register_Form_Error").html(success);
                      }
                    }
                    $("#Admin_Register_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#Admin_Register_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#Admin_Register_Form_Error").html(err);
                    }
                  }
                });
        });

        // All Login_Form Submit 
        $('#User_Edit_Form').on('submit', function(e) {
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
                    $("#User_Edit_Form_Loading").removeClass('d-none');
                  },
                  success: function(data) {

                    if(data.errors) {
                      console.log("Errors", data.errors);
                      
                      var err = "";
                      data.errors.map(function ( error ) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      
                      $("#User_Edit_Form_Error").html(err);

                    } else {
                      console.log("SUccess =>", data);
                      if(data.status) {
                        var success =  '<div class="alert alert-success" role="alert">' + 'Successfull Updated' + '</div>';
                        userGet();
                        ['id', 'name', 'email', 'password', 'phone'].map( function (value) {
                          $('#user_edit_'+value).val('');
                        });
                        $("#User_Edit_Form_Error").html(success);
                      }
                    }
                    $("#User_Edit_Form_Loading").addClass('d-none');
                  },
                  error: function(e) {
                    $("#User_Edit_Form_Loading").addClass('d-none');
                    if(e) {
                      console.log(e.responseJSON);
                      var err = "";
                      e.responseJSON.errors.map(function (error) {
                        err += '<div class="alert alert-danger" role="alert">' + error + '</div>';
                      });
                      $("#User_Edit_Form_Error").html(err);
                    }
                  }
                });
        });

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


        // User Edit Back 
        $('#user_edit_back').click( function () {
          allUserContainerClose();
          $("#User_List_Container").removeClass('d-none');
        });

        function userEditFormSet(obj) {
          console.log('userEditFormSet =>', obj);
          $("#User_Edit_Form_Error").html('');
          $("#user_edit_id").val(obj.id);
          $("#user_edit_name").val(obj.name);
          $("#user_edit_email").val(obj.email);
          $("#user_edit_phone").val(obj.phone);
          allUserContainerClose();
          $("#User_Edit_Container").removeClass('d-none');
        }

    });

</script>