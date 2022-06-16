<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>linker</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/circle-progress-bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>

<body style="background: #1a1b1f;">
    <nav class="navbar navbar-light navbar-expand-md py-3" style="background: #1a1b1f;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"><i class="fa fa-unlink" style="padding: 13px;"></i></span><span style="color: #b3b4b6;">Linker</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3" style="border-color: #b3b4b6;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3" style="background: #1a1b1f;color: #b3b4b6;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="flash" href="#" style="color: #b3b4b6;">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-hover-animate="flash" href="#" style="color: #b3b4b6;">HOME</a></li>
                </ul><button class="btn btn-primary" type="button" style="background: #2f46f8;color: #b3b4b6;">Login</button>
            </div>
        </div>
    </nav>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border: none;border-radius: 449px;">
                        <div class="card-body p-sm-5" style="background: #313133;border-color: #313133;">
                            <form method="post" >
                                <div id="tt" class="border rounded-circle border-dark mb-3" style="width: 164px;background: #414244;height: 141px;padding: 0px;padding-left: 0px;margin-left: auto;margin-right: auto;--bs-dark: #414244;--bs-dark-rgb: 65,66,68;">
                                    <div style="height: 10px;margin-top: 44px;width: 18px;margin-left: auto;margin-right: auto;"><span style="margin-right: 0px;text-align: center;font-size: 36px;color: #b3b4b6;" >0</span></div>
                                </div>
                                <div id="tt1" class="border rounded-circle border-dark mb-3" style="width: 164px;background: #414244;height: 141px;padding: 0px;padding-left: 0px;margin-left: auto;margin-right: auto;--bs-dark: #414244;--bs-dark-rgb: 65,66,68;">
                                    <div style="height: 10px;margin-top: 44px;width: 18px;margin-left: auto;margin-right: auto;"><span style="margin-right: 0px;text-align: center;font-size: 36px;color: #b3b4b6;" id="timer"></span></div>
                                </div>
                            </form>
                            <div style="height: 35px;margin-left: auto;margin-right: auto;width: 137px;">
                                <h3 style="height: 25.0938px;width: 148px;color: #b3b4b6;">Please Wait</h3>
                            </div><a id="o-bt" href="<?= $link ?>"><button class="btn btn-primary text-center d-block w-100" type="submit"  style="margin-top: 26px;"><i class="fas fa-chevron-right" style="margin-bottom: 0px;margin-right: 7px;padding: 0px;"></i>Go To Link</button></a>
                           <a id="bt"> <button  class="btn btn-primary text-center d-block w-100" type="submit"  style="margin-top: 26px;background:#4e6d9b; border-color: #4e6d9b;"><i class="fas fa-chevron-right" style="margin-bottom: 0px;margin-right: 7px;padding: 0px;"></i>stop a moment</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script>
     $(document).ready(function() {
        $("#tt").hide();
        $("#o-bt").hide();
     
        var i = 6;    
        setInterval(timer,1000);
        function timer() {
            $("#timer").html(i);
            i--;
            if (i == -2) {
                $("#tt1").hide();
                $("#bt").hide();
                $("#tt").show();
               
                $("#o-bt").show();
               
            }
         
        }      
     });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
  
    
 
</body>

</html>