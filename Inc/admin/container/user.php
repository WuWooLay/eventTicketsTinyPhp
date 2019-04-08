<h5 class="mb-4"> User </h5>

<div class="row">

    <!-- User Functions -->
    <div class="col-3">
        <div class="card">
                <div class="card-body">
                    <ul class="list-group">

                        <a
                            data-container="User_List_Container"
                            class="list-group-item side_hover user_container_change_click"
                        >
                            <i class="material-icons text-primary">list</i>
                            List
                        </a>

                        <a
                            data-container="User_Add_Container"
                            class="list-group-item side_hover user_container_change_click"
                        >
                            <i class="material-icons text-primary">person_add</i>
                            UserAdd
                        </a>

                        <a
                            data-container="User_Creator_Add_Container"
                            class="list-group-item side_hover user_container_change_click"
                        >
                            <i class="material-icons text-primary">person_add</i>
                            CreatorAdd
                        </a>

                    </ul>
                </div>
        </div>
                
    </div>
    <!-- User Functions End -->

    
    <div class="col-9">
        <!-- User List Container -->
        <div class="fadeIn" id="User_List_Container">
            
            <div class="row justify-content-end">
                <div class="col-md-3 col-lg-2">
                    <div class="input-group mb-3">
                    
                        <input
                            type="text"
                            class="form-control" 
                            value=1 
                            aria-label="Default" 
                            aria-describedby="inputGroup-sizing-default"
                            id="user_list_get_input"
                         >
                        <div class="input-group-prepend">
                            <button class="btn btn-sm btn-outline-primary" type="button" id="user_list_get">
                                /<span id="user_list_get_total_page">2</span>
                            </button>
                        </div>  
                    </div>
                </div>
            </div>

            <!-- Table COntainer -->
            <div class="table-responsive">
                    <table class="table table-hover " id="User_List_Table">

                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nmae</th>
                            <th scope="col">Role</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Ban</th>
                            </tr>
                        </thead>

                        <tbody id="user_table_body">
                           
                        </tbody>

                    </table>
            </div>
            <!-- Table COntainer End-->

        </div>
        <!-- User List Container End -->

        <!-- User Add Container -->
        <div class="fadeIn d-none" id="User_Add_Container">
            <div class="card">
                
                <div class="card-header ">
                <h4> Add User </h4>
                </div>

                <!-- Form Start -->
                <div class="card-body">
                
                <!-- Form -->
                <form class="mb-3" method="post" id="Register_Form" data-action="http://eventticket.com/user/insert">
                
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
        <!-- User Add Container End -->

        <!-- User_Creator Add Container -->
        <div class="fadeIn d-none" id="User_Creator_Add_Container">
            <div class="card">
                
                <div class="card-header ">
                <h4> Add Creator </h4>
                </div>

                <!-- Form Start -->
                <div class="card-body">
                
                <!-- Form -->
                <form class="mb-3" method="post" id="Creator_Register_Form" data-action="http://eventticket.com/user/insertcreator">
                
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
                    <div id="Creator_Register_Form_Loading" class="lds-dual-ring d-none"></div>
                    <div id="Creator_Register_Form_Error" class="mt-2">
                    </div>

                    </div>

                </form>
                <!-- Form End -->

                </div>
                <!-- Form End -->
            </div>
        </div>
        <!-- User Add Container End -->

        <!-- User Edit Container -->
        <div class="fadeIn d-none" id="User_Edit_Container">
            <h3> User Edit </h3>
        </div>
        <!-- User Edit Container End-->

    </div>


</div>