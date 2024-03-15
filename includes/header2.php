<header>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="img/common/logo.png" alt="JSS logo" height=15px width="55px"></a>
        </div>
            <i class="fas fa-solid fa-bars" style="visibility: hidden;"></i>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="properties.php" class="nav-link">Properties</a>
                </li>
                <li class="nav-item active">
                    <a href="aboutUs.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item active">
                    <a href="contactUs.php" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a href="addrent.php" class="nav-link">Rent property</a>
                </li>
            </ul>
        <div class="search-bar">
            <select id="areaSelect">
                <option value="" disabled selected>Select an area</option>
                <option value="Prakash Nagar">Prakash Nagar</option>
                <option value="A Nagar">A Nagar</option>
                <option value="B Nagar">B Nagar</option>
                <option value="c Nagar">c Nagar</option>
                <option value="d Nagar">d Nagar</option>
                <option value="e Nagar">e Nagar</option>
                <option value="f Nagar">f Nagar</option>
                <option value="g Nagar">g Nagar</option>
                <option value="h Nagar">h Nagar</option>
                <option value="i Nagar">i Nagar</option>
                <option value="j Nagar">j Nagar</option>
            </select>
            <div class="searchareaindex"><button class="search_btn" type="submit" onclick="search()">Search</button></div>
        </div>

        <?php
        // Check if the user is logged in or not
        if (!isset($_SESSION["user_id"])) {
            ?>
            <div class="user-buttons">
                <button onclick="opensignupModal()"><i class="fas fa-user"></i>Sign Up</button>
                <button onclick="openloginModal()"><i class="fas fa-sign-in-alt"></i>Login</button>
            </div>
        <?php } ?>
    </nav>
</header>

<!-- The login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">1
        <span class="close" onclick="closeloginModal()">&times;</span>
        <h2>Login</h2>
        <form class="login-form" action="http://127.0.0.1/JSS/includes/login_modal.php" method="post">
            <input type="text" name="email" placeholder="Enter email or mobile" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="register_message">Not registered yet? <a href="#" class="login_to_register"
                    onclick="opensignupModal()">register now</a></div>
        </form>
    </div>
</div>

<!-- The sign up Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closesignupModal()">&times;</span>
        <h2>Registration</h2>
        <form class="signup-form" action="http://127.0.0.1/JSS/includes/signupmodal.php" onsubmit="signup(event)"
            method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="text" name="email" placeholder="Enter your email" required>
            <input type="text" name="phone" placeholder="Enter your mobile number" required>
            <input type="text" name="password" id="password" placeholder="Enter password" required>
            <button class="btn" name="submit" type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    // Define variables with proper scope
    let loginmodal;
    let signupmodal;

    // Open the login modal
    function openloginModal() {
        loginmodal = document.getElementById("loginModal");
        loginmodal.style.display = "block";
    }

    // Close the login modal
    function closeloginModal() {
        loginmodal.style.display = "none";
    }

    // Open the signup modal
    function opensignupModal() {
        signupmodal = document.getElementById("signupModal");
        signupmodal.style.display = "block";
    }

    // Close the signup modal
    function closesignupModal() {
        signupmodal.style.display = "none";
    }
</script>
