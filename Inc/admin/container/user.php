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
                            Add
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
                    
                        <input type="text" class="form-control" value=1 aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        <div class="input-group-prepend">
                            <button class="btn btn-sm btn-outline-primary" type="button">/<span>2</span></button>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <button type="button" class="btn btn-success">
                                        <i class="material-icons medium">edit</i>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <i class="material-icons medium">delete</i>
                                    </button>
                                </td>
                            </tr>
                           
                        </tbody>

                    </table>
            </div>
            <!-- Table COntainer End-->

        </div>
        <!-- User List Container End -->

        <!-- User Add Container -->
        <div class="fadeIn d-none" id="User_Add_Container">
            <h3> User Add </h3>
        </div>
        <!-- User Add Container End -->
    </div>


</div>