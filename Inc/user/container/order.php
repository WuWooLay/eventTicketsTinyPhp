<div class="row">

    <!-- User Functions -->
    <div class="col-sm-6 mb-3 col-md-3">
        <div class="card">
                <div class="card-body">
                    <ul class="list-group">

                        <a
                            data-container="Order_List_Container"
                            class="list-group-item side_hover order_container_change_click"
                        >
                            <i class="material-icons text-primary">list</i>
                            OrderList
                        </a>

                        <!-- <a
                            data-container="Ticket_Add_Container"
                            class="list-group-item side_hover ticket_container_change_click"
                        >
                            <i class="material-icons text-primary">person_add</i>
                            TicketAdd
                        </a> -->
                        

                    </ul>
                </div>
        </div>
                
    </div>
    <!-- User Functions End -->

    
    <div class="col-sm-6 mb-3 col-md-9">
    
        <!-- Order_List_Container Container -->
        <div class="fadeIn" id="Order_List_Container">
            
            <div class="row justify-content-end">
                <div class="col-md-3 col-lg-2">
                    <div class="input-group mb-3">
                    
                        <input
                            type="text"
                            class="form-control" 
                            value="1" 
                            aria-label="Default" 
                            aria-describedby="inputGroup-sizing-default"
                            id="ticket_list_get_input"
                         >
                        <div class="input-group-prepend">
                            <button class="btn btn-sm btn-outline-primary" type="button" id="ticket_list_get">
                                /<span id="ticket_list_get_total_page"> 0 </span>
                            </button>
                        </div>  
                    </div>
                </div>
            </div>

            <!-- Table COntainer -->
            <div class="table-responsive">
                    <table class="table table-hover " id="Ticket_List_Table">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>

                        <tbody id="ticket_table_body">
                           
                        </tbody>

                    </table>
            </div>
            <!-- Table COntainer End-->

        </div>
        <!-- Order_List_Container Container End -->

    </div>


</div>