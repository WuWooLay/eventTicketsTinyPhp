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


    });

</script>