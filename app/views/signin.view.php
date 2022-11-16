<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/signin.css">
    <title>Sign in</title>
</head>
<body>
    <div class="main-container">

        <div class="sectionform">

            <div class="topic">
                <h1>Welcome Back</h1>
                <h4>Please enter your details.</h4>
            </div>

            <form method="post" class="form-contain">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" id="" required placeholder="Enter Name">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" id="" required placeholder="Enter Password">
                </div>

                <div class="input-box forgetpw">
                    <small><a href="">Forget password</a></small>
                </div>

                <div class="input-box btn">
                    <input type="submit" value="Sign in">
                </div>
                
                <div class="input-box">
                    <small>Don't have an acconnt? <span> <a href="<?=ROOT?>/signup">Sign up</a></span></small>
                </div>


            </form>
        </div>

        <div class="sectionimg">
            <div>
                <img src="<?= ROOT ?>/assets/images/logImg.png" alt="">
            </div>
        </div>

    </div>
</body>
</html>