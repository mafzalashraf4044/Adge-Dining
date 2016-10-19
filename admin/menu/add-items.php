  <?php
    include('../admin-header.php');
    include('../../includes/db.php');
  ?>

  <div class="panel-body add-items">
    <h2 class="left-margin">Add New Category</h2>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == 'Add'){
    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["img_url"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img_url"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["img_url"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["img_url"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["img_url"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }

      }
    ?>

    <?php
      $conn = open_db_conn();
      $input_values = array();

      if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] == "Add"){

        foreach ($_POST as $key => $value) {

          if($key != "submit"){
            $input_values += [$key => sanitize_input($value)];
          }
        }

        $input_values['img_url'] = basename($_FILES["img_url"]["name"]);

        $keys = implode(', ', array_keys($input_values));
        $values = implode("','", array_values($input_values));

        $sql = "INSERT INTO menu ($keys) VALUES ('$values')";

        if ($conn->query($sql)) {
          echo "added successfully!";
        }else {
          echo "Error: " . $sql . "<br>" . $conn->error;

        }


        $conn->close();


      }

      ?>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" class="col s12">

        <div class="row form-area">

          <div class="input-field col s6">
            <select name="category">
              <option value="" disabled selected>Select Category</option>
          <?php
            $conn = open_db_conn();

            $sql = "SELECT menu_id, category FROM menu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
              echo "<option value='" .$row['menu_id']. "'>" .$row['category']. "</option>";
            }

             }else {
              echo "<h5>There are no Categories Avaliable</h5>";
             }
            $conn->close();

            ?>
            </select>
            <label>Select Category</label>
          </div>


          <div class="input-field col s6">
            <input placeholder="" id="item_name" name="item_name" required value="" type="text" class="validate">
            <label for="item_name">Item Title</label>
            <i class="hidden fa fa-warning"> <span>Item Title is Required!</span></i>
          </div>



          <div class="file-field input-field col s6">
            <div class="btn">
              <span>Image</span>
              <input type="file" name="img_url" id="img_url">
            </div>

            <div class="file-path-wrapper">
              <input placeholder="Upload Image" id="upload_img" class="file-path validate" type="text">

            </div>
          </div>

          <div class="input-field col s6">
            <input placeholder="" id="price" name="price" required type="text" class="validate">
            <label for="price">Price</label>
            <i class="hidden fa fa-warning"> <span>Price is Required!</span></i>
          </div>
          <div class="col s12 button-area">
            <input type="submit" class="waves-effect waves-light btn" name="submit" value="Add">
          </div>

        </div>

      </form>


  </div>


    <?php
      include('../admin-footer.php');
    ?>
