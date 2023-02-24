<?php
  include_once 'C:\Users\Aleck Joshua\Desktop\code1\new-sectory\resources\views\header.blade.php';
?>
    
    <div class="sidebar">
        <ul class="nav-links">

                <section class="home-section">
                    <div class="home-content">
                    <i class='bx bx-menu'></i>
                    <span class="link_name">Navigation</span>
                </section>
            <li>
                <a href="../adminindex">
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
                    <li><a href="../addresident">Add Resident</a></li>
                    <li><a href="../adduser">Add User</a></li>
                    <li><a href="../viewresident">View Residents</a></li>
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
                    <li><a href="../addhousehold">Add Household</a></li>
                    <li><a href="../viewhousehold">View Households</a></li>
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
                          <div class="col-md-6">
                            <div class="m-5 text-center">
                              <h1>Update</h1>
                              <h1>Household</h1>
                            </div>
                            <form class="m-5 justif-content-center" action="/update1" method="post">
                                @csrf
                                <div class="mb-2">
                                    {{-- <label class="form-label" for="householdidh">Household ID:</label> --}}
                                    <input class='form-control' type="hidden" name="householdidh" id='householdidh' value="{{$householdtable['householdID']}}">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="householdno">Household No:</label>
                                    <input class='form-control' type="text" name="householdno" id='householdno' value="{{$householdtable['householdNo']}}">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="addressh">Address:</label>
                                    <input class="form-control" type="text" id="addressh" name="addressh" value="{{$householdtable['householdAddress']}}">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="purokleaderh">Purok Leader:</label>
                                    <input class="form-control" type="text" id="purokleaderh" name="purokleaderh" value="{{$householdtable['purokLeader']}}">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label" for="householdstatush">Civil Status:</label>
                                    <select id="householdstatush" name="householdstatush" class="form-select" aria-label="Default select civil status">
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <div class="me-6">
                                    <button type="submit" name="submit" class="form-control btn btn-primary">Update Household</button>
                                </div>
                            </form>                
                              <br>
                              <!-- <div class="m-1 text-center">
                                <a href="signin.php">Already have an account? Sign in</a>
                              </div> -->         
                          </div>
                          <!-- start of 2nd col-md-6 divider -->
                        <div class="col-md-6">
                            <div>
                                
                                <br></br>
                                <br></br>
                                <br>

                                <div>
                                <img src="/sectory/img/authenticatetransparent.png" alt="loginimagedesign" class="img-fluid pt-5">
                                </div>               
                                <br>         
                            </div>
                          </div>
                          <!-- end of 2nd col-6 divider -->

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