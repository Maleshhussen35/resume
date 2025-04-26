<?php

// Hardcoded credentials
$valid_username = '452350MaRaES';
$valid_password = '!!_+*malesh';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === $valid_username && $password === $valid_password) {
        // Successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: admin.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<?php include_once 'header.php'; ?>

<style>
.login-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    color: #333;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: #2c3e50;
    position: relative;
    padding-bottom: 1rem;
}

.section-title i {
    color: #3498db;
    margin-right: 1rem;
}

.section-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #3498db, #2ecc71);
    border-radius: 2px;
}

.login-form {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    margin: 0 auto 3rem;
    max-width: 500px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.login-form h3 {
    font-size: 1.8rem;
    margin-bottom: 2rem;
    color: #2c3e50;
    text-align: center;
    position: relative;
    padding-bottom: 1rem;
}

.login-form h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #3498db, #2ecc71);
    border-radius: 2px;
}

.login-form h3 i {
    margin-right: 0.8rem;
    color: #3498db;
}

.form-group {
    margin-bottom: 1.8rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.8rem;
    font-weight: 600;
    color: #2c3e50;
    font-size: 1.1rem;
}

.form-group label i {
    margin-right: 0.5rem;
    color: #3498db;
}

.form-group input {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
}

.password-container {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #7f8c8d;
}

.submit-btn {
    display: block;
    width: 100%;
    padding: 1.2rem;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    margin-top: 2rem;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(52, 152, 219, 0.4);
    background: linear-gradient(135deg, #2980b9, #27ae60);
}

.submit-btn i {
    margin-right: 0.8rem;
}

.error-message {
    color: #e74c3c;
    text-align: center;
    margin-bottom: 1.5rem;
    font-weight: 500;
    padding: 0.8rem;
    background-color: #fde8e8;
    border-radius: 5px;
    border-left: 4px solid #e74c3c;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .login-form {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 2rem;
    }
}
</style>

<section class="login-section">
    <h2 class="section-title"><i class="fas fa-lock"></i></h2>
    
    <div class="login-form">
        <h3><i class="fas fa-sign-in-alt"></i> login</h3>
        
        <?php if (isset($error)): ?>
            <div class="error-message">
                <i class="fas fa-exclamation-circle"></i> <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="username"><i class="fas fa-user"></i> Username</label>
                <input type="text" id="username" name="username" required autocomplete="username">
            </div>
            
            <div class="form-group">
                <label for="password"><i class="fas fa-key"></i> Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" required autocomplete="current-password">
                    <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
    </div>
</section>

<script>
// Toggle password visibility
document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});
</script>

<?php include_once 'footer.php'; ?>