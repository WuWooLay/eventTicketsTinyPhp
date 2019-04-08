<div class="row">

    <!-- User Functions -->
    <div class="col-3">
        <div class="card">
                <div class="card-body">
                    <ul class="list-group">

                        <a
                            data-container="Ticket_List_Container"
                            class="list-group-item side_hover ticket_container_change_click"
                        >
                            <i class="material-icons text-primary">list</i>
                            List
                        </a>

                        <a
                            data-container="Ticket_Add_Container"
                            class="list-group-item side_hover ticket_container_change_click"
                        >
                            <i class="material-icons text-primary">person_add</i>
                            TicketAdd
                        </a>

                    </ul>
                </div>
        </div>
                
    </div>
    <!-- User Functions End -->

    
    <div class="col-9">
    
        <!-- Ticket_List_Container Container -->
        <div class="fadeIn" id="Ticket_List_Container">
            <h1> Ticket List Container</h1>
        </div>
        <!-- Ticket_List_Container Container End -->

        <!-- Ticket_Add_Container Container   -->
        <div class="fadeIn d-none" id="Ticket_Add_Container">
            <div class="card">
                    
                    <div class="card-header ">
                        <h4> Add Ticket </h4>
                    </div>

                    <!-- Form Start -->
                    <div class="card-body">
                    
                        <!-- Form -->
                            <form class="mb-3" method="post" id="Ticket_Add_Form" data-action="<?= URL ?>/user/insert">
                            
                                <div class="form-group">
                                    <label for="ticket_title" class="bmd-label-floating">Title</label>
                                    <input name="title" type="text" class="form-control" id="ticket_title">
                                </div>

                                <div class="form-group">
                                    <label for="ticket_description" class="bmd-label-floating">description</label>
                                    <input name="description" type="text" class="form-control" id="ticket_description">
                                </div>

                                <div class="form-group">
                                    <label for="ticket_address" class="bmd-label-floating">address</label>
                                    <input name="address" type="text" class="form-control" id="ticket_address">
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

                                    <div id="Ticket_Add_Form_Loading" class="lds-dual-ring d-none"></div>
                                    <div id="Ticket_Add_Form_Error" class="mt-2">
                                </div>

                                </div>

                            </form>
                        <!-- Form End -->

                    </div>
                    <!-- Form End -->

                </div>
        </div>
        <!-- Ticket_Add_Container Container End  -->
    </div>


</div>