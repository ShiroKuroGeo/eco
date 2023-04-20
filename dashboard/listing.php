
<?php
include("header.php");
include("../includes/db_con.php");
   ?>    
   <div class="w3-card-5"> 
          <div class="box-8">       
    <form action="../functions/postListingImages.php" method="post" enctype = "multipart/form-data" >
      <div class="create_listing text-center ">   
      <h2>Create new Listing</h2>
      <input type="file" name="fileToUpload" id="fileToUpload" class="files"placeholder="file" multiple><br>
      <input type="text"  class="w3-input" class="form-control"  name="title" id="name" placeholder="Title"><br>
      <input type="number"  class="w3-input" class="form-control"  name="price" id="price" placeholder="Price"><br>
      <input type="number"  class="w3-input" class="form-control"  name="Quantity" id="Quantity" placeholder="Quantity"><br>
      <select  class="w3-input" class="form-control" name="cat" id="category">
        <option value="0"id="pick">Choose Categories</option>
        <?php
          $select = "SELECT * FROM `category`"; 
          $result_query = mysqli_query($conn, $select);
            while($row=mysqli_fetch_assoc($result_query)){
              $category_title=$row['category_title'];
              $id=$row['id'];
              echo " <option value='$id'>$category_title</option>";
            }
        ?>
      </select><br>
        <textarea  class="w3-input" class="form-control" name="description" id="text" cols="30" rows="3" placeholder="Description"></textarea><br>
        <button type="submit" id="btnPostListing" name="submit" >Post</button>
      </div>
    </form>
    </div>
    </div>
    <script src="../javaScript/jquery.js"></script>
    <script src="../javaScript/listing.js"></script>