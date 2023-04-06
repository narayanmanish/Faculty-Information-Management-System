 <?php 
    
    echo $_SESSION['username'];
 ?>
 <h2>Course Content</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Project Successfully Added !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/ucourse.php" enctype="multipart/form-data">
        

  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Course Name</label>
 
   
    <select name="course" class="form-control">
                           <option value="MCA" >MCA</option>
                           <option value="MSc" >MBA</option>
                          
                  </select> 
  </div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Semester</label>
      <select name="sem" class="form-control">
        <option value="" >Select...</option>
                           <option value="I" >I</option>
                           <option value="II" >II</option>
                            <option value="III" >III</option>
                           <option value="IV" >IV</option>
                          
                  </select> 
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Subject Name</label>
      <input type="text" name="sname" class="form-control" id="sname" placeholder="Subject Name">
    </div>
     <div class="form-group col-md-6">
      <label for="email">Subject Code</label>
      <input type="text" name="scode" class="form-control" id="scode" placeholder="Subject Name">
    </div>
     <div class="form-group col-md-6 mt-auto">
      <label for="name">UNIT</label>
      <select name="nunit" class="form-control">
                           <option value="" >Select...</option>
                           <option value="I" >I</option>
                           <option value="II" >II</option>
                            <option value="III" >III</option>
                           <option value="IV" >IV</option>
                           <option value="IV" >V</option>
                          
                  </select> 
    </div>
     <div class="form-group col-md-6">
  <label>Unit pdf</label>
  <div class="custom-file">
    <input type="file" name="pdffile" class="custom-file-input" id="pdffile">
    <label class="custom-file-label" for="projectpic">Choose Pdf...</label>
  </div></div>
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addpdf" class="btn btn-primary" value="Add Content">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM portfolio";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Project Name</label>
      <input type="name" name="projectname" value="<?php echo $_SESSION['username'];?>" class="form-control" id="name" placeholder="ToDo List Maker">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" value="<?=$data2['projectlink']?>" class="form-control" id="email" placeholder="https://whomonugiri.github.io/todo-list-maker/">
    </div>

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/uportfolio.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  