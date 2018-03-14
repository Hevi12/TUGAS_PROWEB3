
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link rel="icon" href="aset/image/loginku.png">
        <link rel="stylesheet"href="aset/css/bootstrap.css">
        <link rel="stylesheet"href="aset/css/floating-labels.css">
        <script src="aset/js/jquery.min.js"></script>
        <script src="aset/js/popper.min.js"></script>
        <script src="aset/js/bootstrap.min.js"></script>
        <script>
            function Hallo(){
                var email=document.getElementById("email").value;
                alert("Welcome : "+email);
            }
        </script>
        
         <script>
            window.setTimeout(function (){
                $(".alert").fadeTo(400,0).slideUp(400,function (){
                    $(this).remove();
                });
            }, 5000);
        </script>
         
        <style>
            body {
                background-image: url("518164-backgrounds.jpg");background-repeat: no-repeat;
                background-position: center; background-size: 100%;
            }
        </style>
      
    </head>
    <body >
        <form  class="form-signin">
            <div class="mb-8 modal-lg loginmodal-container">
                        <div class=" text-center mb-3">
                            <img  class="mb-4" width="150" height="150" src="106350-3d-glossy-orange-orb-icon-social-media-logos-feedburner-logo.png">
                            <h3  style="color:orange ">Selamat Datang</h3>
                        </div> 
                 <div class="alert alert-warning alert-dismissible fadae show" role="alert">
        Teliti Saat Memasukan Akun Anda..!!!
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
                
                        <div class="form-label-group">
                            <input class="form-control" type="email" id="email" placeholder="email address" 
                                   required="yes" autofocus="yes" autocomplete="no">
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-label-group">
                            <input class="form-control" type="password"  id="password" placeholder="password" 
                                   required="yes"autofocus="yes" autocomplete="no" >
                            <label for="password">Password</label>
                        </div>
                
                        <div class="checkbox mb-2">
                            <label>
                                <input type="checkbox">Remember Me?? </input>
                               
                            </label>
                        </div>
                <button onclick="Hallo();" class="btn btn-lg btn-danger btn-block" type="submit">
                            
                            Sign in </button>
            </div>
        </form>
    </body>
</html>
