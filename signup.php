<!doctype html>
<html class="no-js" lang="">



<head>
   <?php include('headtag.php');?>
</head>

<body onload="myFunction()">
    <!-- Preloader Start Here -->
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php include ('header.php');?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index-2.php"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
               <?php include('navigation.php');?>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Examination</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Exam Schedule</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Exam Schedule Area Start Here -->
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Exam</h3>



                                        <div  id="demo"     class="alert alert-success alert-dismissible fade show">
       
       
    </div>
                                   
                                   
                                   
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <form class="new-added-form" action="signup.php" method="post">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="" class="form-control" required>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Pincode *</label>
                                            <input type="text" pattern="[1-9][0-9]{5}"  class="form-control"/>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>City*</label>
                                            <input type="text" placeholder="" class="form-control" required>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>state</label>
                                            <input type="text" placeholder="" class="form-control" required>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Type of user</label>
                                            <input type="text" placeholder="" class="form-control">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Birth Date</label>
                                            <input type="text" placeholder="dd/mm/yyyy"
                                                class="form-control air-datepicker">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Age</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Phone no.</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Email</label>
                                            <input type="email" placeholder="Email"  class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Referral Code</label>
                                            <input type="text" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>click it</label>
                                            <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">checked it</button>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                               </div>
                <!-- Exam Schedule Area End Here -->
                <?php include ('footer.php');?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <script>

function myFunction() {
 
  $(document).ready(function(){
            $("#demo").hide();
        });

}


// function myfunction1()
// {
//     alert("dsfdsfs");
// }




function myfunction1()
{
   $(document).ready(function()
   {
       $("#demo").show();
   });
    document.getElementById("demo").innerHTML= "<strong>Success!</strong> Your message has been sent successfully."
  
}




        </script>
    <?php include('footerscript.php');?>

</body>


</html>