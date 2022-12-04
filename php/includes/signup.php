<div class="signin-signup signin-signup-hidden">
    <div class="login-wrapper login-hidden">
        <span class="closeBtnlog">&times;</span>
        <p>Login</p>
        <form action="/php/includes/process-signin.php" method="post" class="login-form" id="login">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" name="submit" value="Sign In">
        </form>
        <span class="redirect">Not registered? <a href="#" class="Signupbtn">Sign up</a></span>
    </div>
    <div class="register-wrapper register-hidden">
        <span class="closeBtnreg">&times;</span>
        <p>Register</p>
        <form action="/php/includes/process-signup.php" method="post" class="register-form" id="register">
            <input type="text" name="uid" placeholder="Username">
            <input type="email" name="email" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrep" placeholder="Password">
            <input type="submit" name="submit" value="Sign Up">
        </form>
        <span class="redirect">Already registered? <a href="#" class="Signinbtn">Sign in</a></span>
    </div>
</div>