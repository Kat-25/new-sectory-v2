<?php
    include_once 'C:\Users\Aleck Joshua\Desktop\code1\new-sectory\resources\views\header.blade.php';
    include 'C:\xampp\htdocs\sectory\includes\dbh.inc.php';
?>
    
    <div class="sidebar">
        <ul class="nav-links">

                <section class="home-section">
                    <div class="home-content">
                    <i class='bx bx-menu'></i>
                    <span class="link_name">Navigation</span>
                </section>
            <li>
                <a href="adminindex">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Home</span>
                </a>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link_name">People</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="addresident">Add Resident</a></li>
                    <li><a href="adduser">Add User</a></li>
                    <li><a href="viewresident">View Residents</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Households</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="addhousehold">Add Household</a></li>
                    <li><a href="viewhousehold">View Households</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Users</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                
            </li>
        </ul>
    </div>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        
        for (var i =0; i < arrow.length; i++){
            arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });

        
    </script>

    <div class="">
      <!-- page divider start of row -->
            <div class="row">
              <div class="col-2" id="divide1">
              </div>

            <div class="col" id="divide2">
                <br></br>
                <br></br>
                <br>
                <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10 mx-auto shadow bg-dark">
                        <div class="row">
                          <div class="columnhandler">
                            <div class="m-5 text-center">
                              <h1>Residents</h1>
                              <h1>List</h1>
                            </div>
                            <form class="m-5 justif-content-center" action="/sectory/includes/signup.inc.php" method="post">

                                <table class="table table-dark table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Resident ID#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Citizenship</th>
                                        <th scope="col">Resident Status</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @foreach($residents as $res)
                                            <tr>
                                            <td>{{$res->residentID}}</td>
                                            <td>{{$res->firstName}}</td>
                                            <td>{{$res->userGender}}</td>
                                            <td>{{$res->userCitizenship}}</td>
                                            <td>{{$res->residentStatus}}</td>
                                            <td><a href="{{"updateres/".$res['residentID']}}">Update</a></td>
                                            </tr>
                                        @endforeach
                                              
                                    </tbody>
                                    
                                    

                                    <!-- // if($result){
                                    //     while($row = mysqli_fetch_assoc($result)){
                                    //         $residentid = $row['residentID'];
                                    //         $firstnamee = $row['firstName'];
                                    //         $lastnamee = $row['lastName'];
                                    //         $residentage = $row['userAge'];
                                    //         $respresentaddress = $row['presentAddress'];
                                    //     }

                                    //     echo '<tr>
                                    //     <th scope="row">'.$residentid.'</th>
                                    //     <td>'.$firstnamee.'</td>
                                    //     <td>'.$lastnamee.'</td>
                                    //     <td>'.$residentage.'</td>
                                    //     <td>'.$respresentaddress.'</td>
                                    //     </tr>';
                                    // }
                                  
                                    
                                    
                                    ?> -->
                                    <!-- <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                        </tr>
                                    </tbody> -->
                                </table>

                                <br>
                                <br>
                            </form>                
                              <br>
                
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                    <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if($_GET["error"] == "invaliduid"){
                            echo "<p>Please enter a valid username.</p>";
                        }
                        else if($_GET["error"] == "invalidemail"){
                            echo "<p>Please enter a valid email address.</p>";
                        }
                        else if($_GET["error"] == "incorrectmatch"){
                            echo "<p>Passwords doesn't match!</p>";
                        }
                        else if($_GET["error"] == "stmtfailed"){
                            echo "<p>Something went wrong, please try again.</p>";
                        }
                        else if($_GET["error"] == "usernametaken"){
                            echo "<p>Username is already taken!</p>";
                        }
                        else if($_GET["error"] == "none"){
                            echo "<p>Successfuly added.</p>";
                        }
                    }
                    ?>
                  <br></br>
                </section>

            </div>
            </div>
      <!-- page divider end of row -->
    </div>
</body>



</html>