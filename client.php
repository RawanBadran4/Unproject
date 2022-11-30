<?php
$title = 'Client Page';

include('layout/header.php');
?>

<main id="main" class="main ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="card">
        <div class="card-body">
           <h2>Client  </h2>
            <br/> <br/>

            <!-- modal button  (Add new client) -->
            <div class="row">
                <div class="col-4">
                    <button class="btn bg-primary" data-bs-toggle="modal" data-bs-target="#add" >
                        <span> <i class="fa-solid fa-user-plus"></i>  </span> Add new client 
                    </button>
                </div>

            <!-- modal button  (delete) -->
                <div class="col-4" >
                    <button class="btn bg-primary" data-bs-toggle="modal" data-bs-target="#del"> 
                        <span> <i class="fa-solid fa-user-slash"></i> </span> Delete client 
                    </button>
                </div>
                <div class="col-4"> 
                    <button class="btn bg-primary">
                        <span class="glyphicon glyphicon-download-alt"> </span> Export to Excel
                    </button>
                </div>
            </div>
            <br/> <br/>

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col-3"  ><input type="checkbox" id="checkAll" data-flag="false"> </th>
                        <th class="col-3" scope="col-3">Name</th>
                        <th class="col-3" scope="col-3">Email</th>
                        <th class="col-3" scope="col-3">Phone</th>
                        <th class="col-3" scope="col-3">Action</th>
                    </tr>
                    <tr >
                        <td > </td>
                        <td class="col-3"><input class="form-control  my-3"  ></td>
                        <td class="col-3"><input class="form-control  my-3" type="Email"  ></td>
                        <td class="col-2"><input class="form-control  my-3" type="text"  ></td>
                        <td class="col-3">
                            <button class="btn btn-success">Apply </button>
                            <button class="btn btn-warning">Clear </button> 
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col-3"><input  type="checkbox" class="client-check" > </td>
                        <td class="col-3" scope="col-3"><a href="#"  data-bs-toggle="modal" data-bs-target="#sel-name">sally</a></td>
                        <td class="col-3" scope="col-3"><a href="mailto:s@email.com">s@email.com</a></td>
                        <th class="col-3" scope="col-3"><a href="callto:+970595128300">+970595128300</a></td>
                        <td class="col-3" scope="col-3">
                            <a href="#"> <span class="glyphicon glyphicon-pencil"> </span> <span class="action_title"> edit</span> </a> 
                            <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#del"> <span class="glyphicon glyphicon-remove"> </span> <span class="action_title"> delete</span> </a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col-3"><input  type="checkbox" class="client-check" > </td>
                        <td class="col-3" scope="col-3"><a href="#"  data-bs-toggle="modal" data-bs-target="#sel-name">sara</a></td>
                        <td class="col-3" scope="col-3"><a href="mailto:sara@email.com">sara@email.com</a></td>
                        <th class="col-3" scope="col-3"><a href="callto:+9705951283">+9705951283</a></td>
                        <td class="col-3" scope="col-3">
                            <a href="#"> <span class="glyphicon glyphicon-pencil"> </span> <span class="action_title"> edit</span> </a> 
                            <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#del"> <span class="glyphicon glyphicon-remove"> </span> <span class="action_title"> delete</span> </a>
                        </td>
                    </tr>
                </tbody>
            </table>                

<!-- modal for(add new client) -->
            <!-- <div class="modal " id="add" tabindex="-1" data-bs-backdrop="false" > 
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title"> Add client </h5>
                            <button  type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div> 

                        <div class="modal-body--scroll-box ">
                        <div class="modal-body">
                            <div class="form-container">
                                <div class="message-container"> 
                                    <div class="form-horizontal" methode="post" action > 
                            <ul class="nav nav-tabs custom-tabs" role="tablist">
                                <li role="presentation">
                                    <a class="active show  text-light"    href="#client-details" aria-controls="details" role="tab" data-toggle="tab" aria-selected="true">Details</a>
			                    </li> 
			                    <li role="presentation">
			                     	<a href="#address" aria-controls="client" role="tab " class="text-light" data-toggle="tab" class="" aria-selected="false">Address</a>
		                    	</li>
            			    </ul>
                                </div>
                                </div> 
                            </div> 
                        </div>        
                        </div> 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary " class="btn btn-link save-btn"  data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn bg-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>  -->

            
            <!--modal for (delete button) -->
            <div class="modal " id="del" tabindex="-1" data-bs-backdrop="false" > 
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div  class="modal-body">
                            <p> username.secure.booking says</p>
                            <p> Are you sure you want to delete this data?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-primary">OK</button>
                            <button type="button" class="btn btn-outline-primary " class="btn btn-link save-btn"  data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

             <!-- modal for select name  -->
            <div class="modal " id="sel-name" tabindex="-1" data-bs-backdrop="false" >
                <div class="modal-dialog modal-x1  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title"> Clients </h5>
                            <button  type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"> </button>
                        </div>
                        <div  class="modal-body--scroll-box">
                            <div  class="modal-body">
                                <div class="form-container">
                                    <div class="messages-container">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-advance table-hover report-table">
                                                <thead  class="table-header">
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Created	</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Service</th>
                                                        <th>Service provider</th>
                                                        <th>Comment</th>
                                                        <th>Is cancelled</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-outline-primary" class="btn btn-link save-btn"  data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-primary ">Expert to excel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal   -->



<?php
include('layout/footer.html');
?>

<script>
    $(document).ready(() => {
       $('#checkAll').on('click', () => {
           let flag = $(this).attr('data-flag');
          let checkEle = $('.client-check').toArray();
          checkEle.forEach((ele) => ele.checked = !flag);
           $(this).attr('data-flag', !flag);
       });
    });
</script>