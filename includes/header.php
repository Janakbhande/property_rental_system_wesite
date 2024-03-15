<header>
    <!-- navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="img/common/logo.png" alt="JSS logo" height=15px width="55px"></a>
        </div>
        <div class="menu">
            <div class="menu-button">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="menu-item">
                <li class="menu-item active">
                    <a href="index.php" class="menu-link">Home</a>
                </li>
                <li class="menu-item active">
                    <a href="properties.php" class="menu-link">Properties</a>
                </li>
                <li class="menu-item active">
                    <a href="aboutUs.php" class="menu-link">About Us</a>
                </li>
                <li class="menu-item active">
                    <a href="contactUs.php" class="menu-link">Contact Us</a>
                </li>
                <li class="menu-item active">
                    <a href="addrent.php" class="menu-link">Rent property</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
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
                <div class="searchareaindex" id="search-button" class="search_btn" type="submit" onclick="search()">
                    <button type="submit"><svg height="13" viewBox="0 0 13 13" width="13"><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button>
                </div>
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
        </div>
    </nav>
</header>

<!-- The login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
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