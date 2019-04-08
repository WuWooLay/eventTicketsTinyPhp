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
              allClose();
              console.log(container);
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
            document.location.href= "/logout";
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
            'User_Creator_Add_Container'
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
                url: 'http://eventticket.com/user/get?page=' + page,
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


    });

</script>