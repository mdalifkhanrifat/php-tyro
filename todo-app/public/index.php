<?php 

require_once __DIR__ . DIRECTORY_SEPARATOR . './../config/dbconnection.php';

?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="add.php">Add New Record</a></p>
        <div class="panel panel-default">

          <div class="panel-heading">
            <!-- <h3 class="panel-title"></h3> </div> -->
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Sr.No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact-No</th>
                  <th>Gender</th>
                  <th>Qualification</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                      $sql ="SELECT id,name,email,contact_no,gender,qualification,address from student_details";
                      $query= $dbconnection -> prepare($sql);
                      $query-> execute();
                      $results = $query -> fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query -> rowCount() > 0)
                      {
                      foreach($results as $result)
                      {
                      ?>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->name);?></td>
                    <td><?php echo htmlentities($result->email);?></td>
                    <td><?php echo htmlentities($result->contact_no);?></td>
                    <td><?php echo htmlentities($result->gender);?></td>
                    <td><?php echo htmlentities($result->qualification);?></td>
                    <td><?php echo htmlentities($result->address);?></td>
                    <td>&nbsp;&nbsp;<a href="edit.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs">Edit Data</button></a>&nbsp;&nbsp;<a href="delete.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete Data</button></a></td>

                  </tr>
                  <?php  $cnt=$cnt+1; } } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>