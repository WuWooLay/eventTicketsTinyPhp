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
            document.location.href= "/";
        }

        

        // For User Vision
        var All_User_Container = [
            'User_List_Container',
            'User_Add_Container'
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


        function userGet() {
            console.log('userGet');
            $.ajax({
                url: 'http://eventticket.com/user/get',
                type: 'GET',
                data:'',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                   if(data) {
                       console.log(data);
                       $('#user_table_body > tr').remove();
                       data.data.map( function (user)  {
                        userListTable(user).appendTo("#user_table_body");
                       } );
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
                        $('<button>', {class: 'btn btn-success'})
                        .html('<i class="material-icons medium">edit</i>')
                        .click( function () {
                            console.log('edit');
                        })
                    )
            )
            .append(
                $('<td>')
                    .append(
                        $('<button>', {class: 'btn btn-danger'})
                        .html('<i class="material-icons medium">delete</i>')
                        .click( function () {
                            console.log('delete');
                        })
                    )
            );
                             
        }


    });

</script>