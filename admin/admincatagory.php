<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Alphaeye</title>
    <link rel="stylesheet" href="stylesheet/admincatagory.css">
</head>
<body>

  <div class="main">
  <?php
  include("component/adminnav.php");
  include("../config/fontfamily.php");
  include("../config/dbconnect.php");
  include("component/authenticate.php");
  ?>  
        <div class="deshbord">
          <div class="top-sec">
            <h1>Categories</h1>
            <a href="addcategory.php"><button>Add</button></a>
          </div>
          <h2 class="cat-heading"><i class="ri-men-line"></i>MEN categories section</h2>
          <div class="boxes">
            <?php
                $result=mysqli_query($con,"SELECT * FROM categories WHERE women IS NULL AND setboth IS NULL");
                $i=1;
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                    <div class="box" id="<?php echo$i; ?>">
                        <div class="image-div">
                          <img src="../assets/images/<?php echo $row['image']; ?>" alt="">
                          <h3 id="clsd<?php echo$i; ?>" onclick="fuwidth(<?php echo $i ?>)">view</h3>
                        </div>
                            <div class="detail-div" id="detail-<?php echo$i; ?>">
                                <h4 class="name-cat"><?php echo $row["men"]; ?></h4>
                                  <button  onclick="closediv('<?php echo$i; ?>')" class="cls-icone">
                                     <i class="ri-close-line"></i>
                                  </button>
                                  <div class="del">
                                    <h4><?php echo $row["status"]; ?></h4>
                                    <h4><a href="editcategory.php?catid=<?php echo $row['catid']; ?>"><i class="ri-edit-2-fill"></i></a></h4>
                                    <a href="deletecategory.php?catid=<?php echo $row['catid']?>"><i class="ri-delete-bin-6-fill"></i></a>
                                  </div>
                            </div>
                         </div>
                  <?php
                  $i=$i+1;
                }
             }
             else{
              echo "No Categories Available";
             }
            ?>
          </div>

          <hr class="hr-line"></hr>


          <!-- here women show boxes -->

          <h2 class="cat-heading"><i class="ri-women-line"></i>WOMEN categories section</h2>
          <div class="boxes">
            <?php
                $result=mysqli_query($con,"SELECT * FROM categories WHERE men IS NULL AND setboth IS NULL");
                $x=$i;
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                    <div class="box" id="<?php echo$x; ?>">
                        <div class="image-div">
                          <img src="../assets/images/<?php echo $row['image']; ?>" alt="">
                          <h3 id="clsd<?php echo$x; ?>" onclick="fuwidth(<?php echo $x ?>)">view</h3>
                        </div>
                            <div class="detail-div" id="detail-<?php echo$x; ?>">
                                <h4 class="name-cat"><?php echo $row["women"]; ?></h4>
                                  <button  onclick="closediv('<?php echo$x; ?>')" class="cls-icone">
                                     <i class="ri-close-line"></i>
                                  </button>
                                  <div class="del">
                                    <h4><?php echo $row["status"]; ?></h4>
                                    <h4><a href="editcategory.php?catid=<?php echo $row['catid']; ?>"><i class="ri-edit-line"></i></a></h4>
                                    <a href="deletecategory.php?catid=<?php echo $row['catid']?>"><i class="ri-delete-bin-line"></i></a>
                                  </div>
                            </div>
                         </div>
                  <?php
                  $x=$x+1;
                }
             }
             else{
              echo "No Categories Available";
             }
            ?>
          </div>

          <hr class="hr-line"></hr>

          <!-- here both show boxes -->


          <h2 class="cat-heading"><i class="ri-travesti-line"></i>BOTH categories section</h2>
          <div class="boxes">
            <?php
                $result=mysqli_query($con,"SELECT * FROM categories WHERE women IS NULL AND men IS NULL");
                $y=$x;
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                    <div class="box" id="<?php echo$y; ?>">
                        <div class="image-div">
                          <img src="../assets/images/<?php echo $row['image']; ?>" alt="">
                          <h3 id="clsd<?php echo$y; ?>" onclick="fuwidth(<?php echo $y ?>)">view</h3>
                        </div>
                            <div class="detail-div" id="detail-<?php echo$y; ?>">
                                <h4 class="name-cat"><?php echo $row["setboth"]; ?></h4>
                                  <button  onclick="closediv('<?php echo$y; ?>')" class="cls-icone">
                                     <i class="ri-close-line"></i>
                                  </button>
                                  <div class="del">
                                    <h4><?php echo $row["status"]; ?></h4>
                                    <h4><a href="editcategory.php?catid=<?php echo $row['catid']; ?>"><i class="ri-edit-line"></i></a></h4>
                                    <a href="deletecategory.php?catid=<?php echo $row['catid']?>"><i class="ri-delete-bin-line"></i></a>
                                  </div>
                            </div>
                         </div>
                  <?php
                  $y=$y+1;
                }
             }
             else{
              echo "No Categories Available";
             }
            ?>
          </div>

          <hr class="hr-line"></hr>











        </div>
  


      <script>
            function fuwidth(id){
              document.getElementById(`detail-${id}`).style.right="0px";
              document.getElementById(`${id}`).style.width="400px";
              document.getElementById(`clsd${id}`).style.display="none";
              return 0;
            }


            function closediv(id){
              document.getElementById(`detail-${id}`).style.right="-300px";
              document.getElementById(`${id}`).style.width="200px";
              document.getElementById(`clsd${id}`).style.display="inline";
              return 0;
            }

      </script>

</body>
</html>