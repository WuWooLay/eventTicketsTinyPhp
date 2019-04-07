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
            
            <div class="row">
                <div class="col-md-3 col-lg-2">
                    <form action="">
                        <div class="form-group">
                            <label for="user_page">PageNumber</label>
                            <input type="number" class="form-control" id="user_page">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Table COntainer -->
            <div class="table-responsive">
                    <table class="table table-hover " id="User_List_Table">

                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
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