<!DOCTYPE html>
<html id = "loginpage">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: transparent;">
<h1 class = "welcome" >Welcome To Shipping Express <i class="fa fa-shipping-fast"></i>
</h1>
    <div class=" account-page">
        <div class="form-container">
            <H1><i style ="font-size: 70px;" class="fa fa-user"></i></H1>
            <form id="LoginForm" action="enter" method="post" >
                <input type="text" placeholder="Username" name ="name" required>
                <input type="password" placeholder="Password" name ="password" required>
                Role: <select name="role" id="role" required>
                    <option value="" selected="selected" required>Choose Role</option>
                    <option value="admin" >Admin</option>
                    <option value="customers" >Customer</option>
                    <option value="drivers" >Driver</option>
                    <option value="manager" >Manager</option>
                </select>
                <br><br>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>