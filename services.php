<?php include_once 'header.php'; ?>
    <section class="services-section">
        <h2 class="section-title"> Services</h2>
        
        <div class="services-grid">
            <!-- Web Development Card -->
            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Web Development</h3>
                <p>Full-stack web development solutions using modern technologies like React, Node.js, and PHP frameworks.</p>
            </div>

            <!-- SaaS Development Card -->
            <div class="service-card">
                <div class="service-icon">☁️</div>
                <h3>SaaS Development</h3>
                <p>Cloud-based software solutions with scalable architecture and subscription management systems.</p>
            </div>

            <!-- AI/ML Development Card -->
            <div class="service-card">
                <div class="service-icon">🤖</div>
                <h3>AI/ML Development</h3>
                <p>Custom AI solutions including machine learning models, natural language processing, and predictive analytics.</p>
            </div>

            <!-- Database Services Card -->
            <div class="service-card">
                <div class="service-icon">🗃️</div>
                <h3>Database Services</h3>
                <p>Database design, optimization, and migration services for SQL and NoSQL systems.</p>
            </div>

            <!-- Consulting & Training Card -->
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>Consulting & Training</h3>
                <p>Technical consulting and personalized training programs for teams and individuals.</p>
            </div>

            <!-- Freelance Card -->
            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Freelance</h3>
                <p>End-to-end project development with flexible engagement models and rapid prototyping.</p>
            </div>
        </div>
    </section>

    <style>
        .services-section {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #00ff9d;
            margin-bottom: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .service-card {
            background: #1a1a1a;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #333;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: #00ff9d;
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            color: #00ff9d;
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }

        .service-card p {
            color: #ccc;
            line-height: 1.6;
            font-size: 0.95rem;
        }
    </style>

<?php include_once 'footer.php'; ?>