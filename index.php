<?php include_once 'header.php'; ?>
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="greeting">Hello! am malesh <span class="typed-cursor">|</span></h1>
            <div class="tagline-container">
                <p class="tagline">I Build Digital Solutions</p>
                <div class="simple-statement">
                    <p>Turning complex ideas into</p>
                    <div class="highlight-box">
                        Simple & Effective Solutions
                    </div>
                </div>
            </div>
        </div>

        <div class="core-principles">
            <div class="principle-card">
                <i class="fas fa-lock principle-icon"></i>
                <h3>Safe & Secure</h3>
                <p>Your data stays protected</p>
            </div>
            <div class="principle-card">
                <i class="fas fa-stopwatch principle-icon"></i>
                <h3>Fast Results</h3>
                <p>Quick delivery without quality loss</p>
            </div>
            <div class="principle-card">
                <i class="fas fa-mobile-alt principle-icon"></i>
                <h3>Mobile-Friendly</h3>
                <p>Works perfectly on all devices</p>
            </div>
        </div>

    </section>

    <style>
        /* Simplified version of previous styles */
        .hero-section {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .greeting {
            font-size: 3rem;
            color: #00ff9d;
            margin-bottom: 1rem;
        }

        .tagline-container {
            border-left: 3px solid #00ff9d;
            padding-left: 1.5rem;
            margin-bottom: 2rem;
        }

        .tagline {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .simple-statement {
            background: #1a1a1a;
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .highlight-box {
            color: #00ff9d;
            font-size: 1.2rem;
            margin-top: 1rem;
            padding: 0.5rem;
            border: 2px solid #00ff9d;
            border-radius: 4px;
            text-align: center;
        }

        .core-principles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .principle-card {
            background: #1a1a1a;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #333;
        }

        .principle-icon {
            font-size: 2rem;
            color: #00ff9d;
            margin-bottom: 1rem;
        }

        .projects-showcase {
            margin-top: 3rem;
        }

        .section-title {
            font-size: 1.5rem;
            color: #00ff9d;
            margin-bottom: 1.5rem;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .project-card {
            background: #1a1a1a;
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .project-tech-stack {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            color: #00ff9d;
        }
    </style>

<?php include_once 'footer.php'; ?>