<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}
if ( $_SESSION['role'] != 'admin' ) {
    header("Location: ../index.php");
    exit();
}
include '../db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="main.css">
    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
<div class="sidebar" style="background-color: #f9ac54;">
    <div style="margin-top:50px;" class="logo_details">
        <i class='bx bx-home'></i>
        <div style="margin-left:10px;" class="logo_name">
            Fit club
        </div>
    </div>
    <ul style="margin-top:50px;">
    <li >
        <a href="dashboard.php" <?php if(basename($_SERVER['PHP_SELF']) == 'dashboard.php') echo 'class="active"'; ?>>
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
        </a>
    </li>
    <li style="margin-top:20px;">
        <a href="admin.php" <?php if(basename($_SERVER['PHP_SELF']) == 'admin.php') echo 'class="active"'; ?>>
            <i class='bx bx-user'></i>
            <span class="links_name">Admin</span>
        </a>
    </li>
    <li style="margin-top:20px;">
        <a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>
            <i class='bx bx-message'></i>
            <span class="links_name">Messages</span>
        </a>
    </li>
</ul>
</div>
<!-- End Sideber -->
<section class="home_section">
    <div class="topbar">
        <div class="toggle">
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <div>
            <a style="text-decoration:none; color:black;" href="../user.php" class="number"> <i style="font-size:28px; font-weight:bold;" class='bx bx-arrow-back'></i></a>
            <a style="text-decoration:none; color:black;" href="../logout.php" class="number"> <i style="margin-left:25px;font-size:28px; font-weight:bold;" class='bx bx-log-out'></i></a>
        </div>
    </div>
    <!-- End Top Bar -->
    <div  class="details" >
        <div class="recent_project">
            <div class="card_header">
                <h2>Messages</h2>
            </div>
            <table >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
                    <td></td>
                  
                </tr>
            </thead>
            <tbody >
                <?php
              
                $sql = "SELECT * FROM contacts";
                $result = $conn->query($sql);

                // Check if there are any results
                if ($result->num_rows > 0) {
                    // Initialize a counter variable
                    $i = 1;
                    // Fetch each row as an associative array
                    while ($row = $result->fetch_assoc()) {
                        // Output  information in the table rows
                        ?>
                       <tr id="row_<?php echo $row['id']; ?>">
    <td><?php echo $i; ?></td>
    <td>
        
                <?php echo $row['name']; ?>
           
    </td>
    <td>
       
            <?php echo $row['email']; ?>
        
    </td>
    
    <td>
            <?php echo $row['message']; ?>
        
    </td>
   
        <td class="btn-action">
    <form>
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <button type="button" onclick="markAsViewed('<?php echo $row['id']; ?>')">
    <i style="color:green;font-size: 30px;" class='bx bx-check'></i>
  </button>
  </form>
               
                <form  method="post">
    <input type="hidden" name="table" value="contacts">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="link" value="contacts">
    <button type="submit" name="delete"><i style="color:red;" class="bx bx-trash"></i></button>
</form>
            
        </td>
</tr>
                        <?php
                        // Increment the counter variable
                        $i++;
                    }
                } else {
                    // If there are no message in the database
                    echo "<tr><td colspan='7'><p style='text-align:center;'>No Messages found</p></td></tr>";

                }
                
                  
                ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="details form-add1"> 
        <div class="recent_project">
        
            <table class="form-add">
            <tbody>
               
                <?php 
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
           if (isset($_POST["delete"])) {
            $id = $_POST["id"];
            $link = $_POST["link"];
        
            
            $sql = "DELETE FROM contacts WHERE id = ?";
        
            if ($stmt = $conn->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("i", $id);
        
                // Attempt to execute the prepared statement
                if ($stmt->execute()) {
                    // Redirect to the appropriate page after deletion
                    echo "<script>window.location.pathname = 'gym/dashboard/contact.php';</script>";
                    exit;
                } else {
                    // If deletion fails, display an error message
                    echo "Error deleting record: " . $conn->error;
                }
        
                // Close statement
                $stmt->close();
            }
        }
           
        }
                $conn->close();
                ?>
            </tbody>
        </table>
         </div>
    </div>
 
 

</section>
<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
  

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        // call function
        changeBtn();
    });

    function changeBtn() {
        if(sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    };
    function markAsViewed(id) {
    let trElement = document.getElementById("row_" + id);
    let check = document.getElementByClass("bx-check");

    if (trElement) {
        
        if (trElement.style.color === "lightgrey") {
            trElement.style.color = ""; 
            check.style.color = "green"; 
        } else {
            trElement.style.color = "lightgrey";
            check.style.color = "grey";  
        }
    }
}


</script>
</body>
</html>
