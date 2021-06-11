<!DOCTYPE html>
<html lang="en" class="login_background">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: transparent;">
    <div class="w3-container" style="padding: 0;height: 100%;">
        <div class="w3-container account-page">
            <div class="w3-container">
                <div class="row">
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>
                            
                            <form id="RegForm">
                                <input type="text" placeholder="Username" required>
                                <input type="email " placeholder="Email" required>
                                <input type="password" placeholder="Password" required>
                                <div class="cboxcontainer">
                                    <input type="checkbox" class="cbox" required>
                                    <label class="cboxlabel" style="font-size: 12px; float: left; padding: 0; margin: 16.5px 10px;">
                                        I agree to the Privacy Policy
                                    </label><br>
                                </div>
                                <button type="submit" class="btn">Register</button>

                            </form>
                            <form id="LoginForm">
                                
                                <input type="text" placeholder="Username" required>
                                <!-- Input -->
                                <input type="password" placeholder="Password" required>
                                <button type="submit" class="btn" href="">Login</button>
                                <a class="forgotpass" href="">Forgot password?</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var RegForm = document.getElementById("RegForm");
        var LoginForm = document.getElementById("LoginForm");
        var Indicator = document.getElementById("Indicator");

        function login(){
            LoginForm.style.transform = "translateX(0px)";
            RegForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(0px)";
        }

        function register(){
            LoginForm.style.transform = "translateX(-300px)";
            RegForm.style.transform = "translateX(-300px)";
            Indicator.style.transform = "translateX(100px)";
        }

        // accordion for sidebar
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }
    </script>
</body>
</html>