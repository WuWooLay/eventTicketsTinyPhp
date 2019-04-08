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
        <div class="fadeIn d-none" id="Ticket_List_Container">
            <h1> Ticket List Container</h1>
        </div>
        <!-- Ticket_List_Container Container End -->

        <!-- Ticket_Add_Container Container   -->
        <div class="fadeIn" id="Ticket_Add_Container">
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
                                    <label for="ticket_description" class="bmd-label-floating">Description</label>
                                    <input name="description" type="text" class="form-control" id="ticket_description">
                                </div>

                                <div class="form-group">
                                    <label for="ticket_address" class="bmd-label-floating">Address</label>
                                    <input name="address" type="text" class="form-control" id="ticket_address">
                                </div>


                                <div class="form-group">
                                    <label for="ticket_location" class="bmd-label-floating"> Location </label>
                                    <select class="form-control" id="ticket_location">

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ticket_category" class="bmd-label-floating"> Category </label>
                                    <select class="form-control" id="ticket_category">

                                    </select>
                                </div>

                                <div class="switch">
                                    <label>
                                    <input name="freely_ticket" type="checkbox" checked>
                                        Free Ticket
                                    </label>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-raised">Reset</button>

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