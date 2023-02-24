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

    <!-- <section class="home-section">
        <div class="home-content">
        <i class='bx bx-menu'></i>
        
        </div>
    </section> -->

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
                              <h1>Dashboard</h1>
                              <h1></h1>
                            </div>
                            <form class="m-5 justif-content-center" action="/sectory/includes/signup.inc.php" method="post">

                                
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
                                <!-- <img src="/sectory/img/authenticatetransparent.png" alt="loginimagedesign" class="img-fluid pt-5"> -->
                                </div>               
                                <br>         
                            </div>
                          </div>
                          <!-- end of 2nd col-6 divider -->

                        </div>
                      </div>
                    </div>
                </div>
                    
                  <br></br>
                </section>

            </div>
            </div>
      <!-- page divider end of row -->
    </div>

</body>



</html>