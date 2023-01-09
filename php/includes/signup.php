<div class="signin-signup">
    <div class="login-wrapper">
        <div class="login-form-wrapper">
            <span class="closeBtnlog">&times;</span>
            <p>Sign In</p>
            <form action="/php/includes/process-signin.php" method="post" class="login-form" id="login">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="submit" name="submit" value="Sign In">
            </form>
            <span class="redirect">Not registered? <a href="#" class="Signupbtn">Sign Up</a></span>
        </div>
    </div>
    <div class="register-wrapper">
        <div class="register-form-wrapper">
            <span class="closeBtnreg">&times;</span>
            <p>Sign Up</p>
            <form action="/php/includes/process-signup.php" method="post" class="register-form" id="register">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="email" placeholder="E-Mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrep" placeholder="Password">
                <input type="submit" name="submit" value="Sign Up">
            </form>
            <span class="redirect">Already registered? <a href="#" class="Signinbtn">Sign In</a></span>
        </div>
    </div>
</div>