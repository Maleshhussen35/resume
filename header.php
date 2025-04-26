<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Segoe UI', sans-serif;
        }
        
        body { 
            background: #0a0a0a; 
            color: #e0e0e0; 
            line-height: 1.7; 
            min-height: 100vh;
        }
        
        header { 
            padding: 1.5rem 2rem;
            background: #111111;
            box-shadow: 0 2px 15px rgba(0,0,0,0.4);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .brand { 
            color: #00ff9d;
            font-size: 2.8rem;
            text-shadow: 0 0 15px rgba(0,255,157,0.3);
            margin-left: auto;
        }
        
        nav { 
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        
        .nav-links {
            display: flex;
            gap: 1.5rem;
            border-left: 1px solid #333;
            padding-left: 2rem;
        }
        
        nav a { 
            color: #00ff9d; 
            text-decoration: none; 
            padding: 0.4rem 0;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        nav a:hover { 
            color: #00cc7a; 
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: #00ff9d;
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        .login-btn {
            background: #00ff9d;
            color: #000 !important;
            padding: 0.5rem 1.2rem;
            border-radius: 4px;
            margin-left: 2rem;
        }
        
        .login-btn:hover {
            background: #00cc7a;
            transform: translateY(-1px);
        }
        
        .container { 
            max-width: 1200px; 
            margin: 3rem auto;
            padding: 0 2rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-links">
                <a href="index.php"><i class="fas fa-home"></i>Home</a>
                <a href="services.php"><i class="fas fa-cogs"></i>Services</a>
                
                <a href="contact.php"><i class="fas fa-envelope"></i>Contact</a>
            </div>
            
            <?php if($is_logged_in): ?>
                <div class="admin-links">
                    <a href="manage_services.php"><i class="fas fa-tools"></i>Manage</a>
                    <a href="manage_projects.php"><i class="fas fa-tasks"></i>Admin</a>
                    <a href="logout.php" class="login-btn"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            <?php else: ?>
                <a href="login.php" class="login-btn"><i class="fas fa-sign-in-alt"></i>Login</a>
            <?php endif; ?>
        </nav>
        <div class="brand">MALESH</div>
    </header>
    <div class="container">