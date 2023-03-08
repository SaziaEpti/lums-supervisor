


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                        
                        <h1 class="h4 mb-0 text-success">Add Buses Category</h1>
                         
                    </div>

                   

                    <!-- Content Row -->

                <div class="container addBox">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            
                            <form action="category_action.php" method="POST" enctype="multipart/form-data">
                                <div class="add_category_group">
                                    <div class="form-group">
                                        
                                        <select name="category_name" class="form-control">
                                            <option value="active"> Select category </option>
                                            <option value="teachers"> Teachers </option>
                                            <option value="students"> Students </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="category_status" class="form-control">
                                            <option value="active"> Select category Status </option>
                                            <option value="active"> Active </option>
                                            <option value="deactive"> Deactive </option>
                                        </select>
                                    </div>
                                        
                                            
                                </div>
                                <div class="save_feild text-center">
                                    <button type="submit" class="btn btn-primary " name='add_category'>
                                        <span> <i class="fa-solid fa-bookmark"> Add Category </i></span>
                                    </button>
                                </div>
                            </form>
                        
                        </div>
                    </div>
                </div>



 

<!--
    Add Category Page Css
 -->
  
   <style>
    .addBox {
        background-color: #36b9cc;
        padding: 25px 5px;
        border-radius: 25px 75px 25px 75px;
        border: none;
    }
    .save_feild button {
        width: calc(100% / 2);
        height: 46px;
        font-weight: 600;
    }
    
   </style>
