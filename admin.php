<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Check if the logged in user is the admin (using your hardcoded credentials)
if ($_SESSION['username'] !== '452350MaRaES') {
    header('Location: unauthorized.php');
    exit;
}
?>

<?php include_once 'header.php'; ?>

<style>
.admin-section {
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

.admin-dashboard {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    margin: 0 auto 3rem;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.admin-dashboard h3 {
    font-size: 1.8rem;
    margin-bottom: 2rem;
    color: #2c3e50;
    text-align: center;
    position: relative;
    padding-bottom: 1rem;
}

.admin-dashboard h3:after {
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

.admin-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.admin-card {
    background: #f9f9f9;
    border-radius: 10px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid #eee;
}

.admin-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.admin-card i {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.admin-card h4 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #2c3e50;
}

.admin-card p {
    color: #7f8c8d;
    margin-bottom: 1.5rem;
}

.admin-btn {
    display: inline-block;
    padding: 0.8rem 1.5rem;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    color: white;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
}

.admin-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
    background: linear-gradient(135deg, #2980b9, #27ae60);
}

.admin-btn i {
    margin-left: 0.5rem;
    color: white;
}

.logout-btn {
    display: block;
    width: 200px;
    margin: 3rem auto 0;
    padding: 0.8rem;
    background: #e74c3c;
    color: white;
    border-radius: 50px;
    text-align: center;
    font-weight: 600;
    transition: all 0.3s ease;
}

.logout-btn:hover {
    background: #c0392b;
    transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .admin-cards {
        grid-template-columns: 1fr;
    }
    
    .admin-dashboard {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 2rem;
    }
}
</style>

<section class="admin-section">
    <h2 class="section-title"><i class="fas fa-user-shield"></i> Admin Dashboard</h2>
    
    <div class="admin-dashboard">
        <h3><i class="fas fa-tachometer-alt"></i> Management Console</h3>
        
        <div class="admin-cards">
            <div class="admin-card">
                <i class="fas fa-concierge-bell"></i>
                <h4>Manage Services</h4>
                <p>Add, edit, or remove services offered by your company</p>
                <a href="manage_services.php" class="admin-btn">
                    Go to Services <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="admin-card">
                <i class="fas fa-project-diagram"></i>
                <h4>Manage Projects</h4>
                <p>View and manage all current and past projects</p>
                <a href="manage_projects.php" class="admin-btn">
                    Go to Projects <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</section>

<?php include_once 'footer.php'; ?>