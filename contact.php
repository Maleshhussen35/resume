<?php include_once 'header.php'; ?>

<style>
.contact-section {
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

.contact-options {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    margin-bottom: 4rem;
}

.contact-card {
    perspective: 1000px;
    width: 300px;
}

.contact-method {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    transform-style: preserve-3d;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.contact-card:hover .contact-method {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.contact-method i {
    font-size: 3rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.contact-method h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: #2c3e50;
}

.contact-method p {
    color: #7f8c8d;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.contact-btn {
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

.contact-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
    background: linear-gradient(135deg, #2980b9, #27ae60);
}

.contact-btn i {
    margin-left: 0.5rem;
    color: white;
    font-size: 1rem;
}

.project-form, .booking-form {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    margin-bottom: 3rem;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.project-form h3, .booking-form h3 {
    font-size: 1.8rem;
    margin-bottom: 2rem;
    color: #2c3e50;
    text-align: center;
    position: relative;
    padding-bottom: 1rem;
}

.project-form h3:after, .booking-form h3:after {
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

.project-form h3 i, .booking-form h3 i {
    margin-right: 0.8rem;
    color: #3498db;
}

/* Service Navigation */
.service-navigation {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.nav-pill {
    padding: 0.8rem 1.5rem;
    background: #f5f5f5;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 600;
    border: 2px solid transparent;
}

.nav-pill:hover {
    background: #e8f4fc;
}

.nav-pill.active {
    background: linear-gradient(135deg, #3498db, #2ecc71);
    color: white;
    border-color: #3498db;
    box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
}

/* Form Steps */
.form-step {
    display: none;
    animation: fadeIn 0.5s ease;
    margin-bottom: 2.5rem;
    padding: 1.5rem;
    border-radius: 10px;
    background: #f9f9f9;
    border: 1px solid #eee;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.visible {
    display: block;
}

.form-step h4 {
    font-size: 1.3rem;
    margin-bottom: 1.5rem;
    color: #3498db;
    text-align: center;
}

/* Service Grid */
.service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.service-option {
    padding: 1.8rem 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
}

.service-option:hover {
    border-color: #3498db;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.2);
}

.service-option i {
    font-size: 2.5rem;
    background: linear-gradient(135deg, #3498db, #2ecc71);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.service-option span {
    font-weight: 600;
    color: #2c3e50;
    font-size: 1.1rem;
}

/* Option Grid */
.option-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    padding: 1.5rem;
    border-radius: 8px;
    background: white;
}

.option-grid label {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 0.8rem;
    border-radius: 6px;
    transition: all 0.3s ease;
    cursor: pointer;
    background: #f5f5f5;
}

.option-grid label:hover {
    background: #e8f4fc;
    transform: translateX(5px);
}

input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #3498db;
    cursor: pointer;
}

/* Form Groups */
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

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
}

.form-group textarea {
    min-height: 120px;
    resize: vertical;
}

/* Submit Button */
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

/* Responsive adjustments */
@media (max-width: 768px) {
    .contact-options {
        flex-direction: column;
        align-items: center;
    }
    
    .contact-card {
        width: 100%;
        max-width: 350px;
    }
    
    .service-grid, .option-grid {
        grid-template-columns: 1fr 1fr;
    }
    
    .project-form, .booking-form {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 2rem;
    }
    
    .service-grid, .option-grid {
        grid-template-columns: 1fr;
    }
    
    .nav-pill {
        padding: 0.6rem 1rem;
        font-size: 0.9rem;
    }
}
</style>

<section class="contact-section">
    <h2 class="section-title"><i class="fas fa-rocket"></i> Launch Your Project</h2>
    
    <div class="contact-options">
        <!-- Direct Contact Cards -->
        <div class="contact-card">
            <div class="contact-method">
                <i class="fab fa-whatsapp"></i>
                <h3>Instant Connect</h3>
                <p>Get immediate assistance from our development team</p>
                <a href="https://wa.me/254724871460" target="_blank" class="contact-btn">
                    Chat Now <i class="fas fa-comment-dots"></i>
                </a>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-method">
                <i class="fas fa-headset"></i>
                <h3>Strategy Call</h3>
                <p>Discuss your project with our solutions architect</p>
                <a href="tel:+254724871460" class="contact-btn">
                    Call Now <i class="fas fa-phone-volume"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Project Initiation Form -->
    <div class="project-form">
        <h3><i class="fas fa-lightbulb"></i> Craft Your Vision</h3>
        
        <!-- Dual Navigation System (Pills + Cards) -->
        <div class="service-navigation">
            <div class="nav-pill active" data-service="web">Web Development</div>
            <div class="nav-pill" data-service="saas">SaaS Development</div>
            <div class="nav-pill" data-service="mlai">ML/AI Solutions</div>
            <div class="nav-pill" data-service="freelance">Freelance Project</div>
            <div class="nav-pill" data-service="database">Database Solutions</div>
        </div>
        
        <div class="service-grid">
            <div class="service-option active" data-service="web">
                <i class="fas fa-code"></i>
                <span>Web Development</span>
            </div>
            <div class="service-option" data-service="saas">
                <i class="fas fa-cloud"></i>
                <span>SaaS Development</span>
            </div>
            <div class="service-option" data-service="mlai">
                <i class="fas fa-robot"></i>
                <span>ML/AI Solutions</span>
            </div>
            <div class="service-option" data-service="freelance">
                <i class="fas fa-user-tie"></i>
                <span>Freelance Project</span>
            </div>
            <div class="service-option" data-service="database">
                <i class="fas fa-database"></i>
                <span>Database Solutions</span>
            </div>
        </div>
        
        <form id="projectForm">
            <!-- Web Development Options -->
            <div class="form-step visible" id="webOptions">
                <h4><i class="fas fa-code"></i> Web Development Options</h4>
                <div class="option-grid">
                    <label><input type="checkbox" name="webType[]" value="E-commerce"> E-commerce Platform</label>
                    <label><input type="checkbox" name="webType[]" value="CMS"> Custom CMS</label>
                    <label><input type="checkbox" name="webType[]" value="Landing"> Landing Page</label>
                    <label><input type="checkbox" name="webType[]" value="Blog"> Blog/Portfolio</label>
                    <label><input type="checkbox" name="webType[]" value="API"> API Integration</label>
                    <label><input type="checkbox" name="webType[]" value="WebApp"> Progressive Web App</label>
                </div>
            </div>

            <!-- SaaS Development Options -->
            <div class="form-step" id="saasOptions">
                <h4><i class="fas fa-cloud"></i> SaaS Development Options</h4>
                <div class="option-grid">
                    <label><input type="checkbox" name="saasType[]" value="CRM"> CRM System</label>
                    <label><input type="checkbox" name="saasType[]" value="ERP"> ERP Solution</label>
                    <label><input type="checkbox" name="saasType[]" value="Analytics"> Business Analytics</label>
                    <label><input type="checkbox" name="saasType[]" value="Collaboration"> Team Collaboration</label>
                    <label><input type="checkbox" name="saasType[]" value="Marketing"> Marketing Automation</label>
                    <label><input type="checkbox" name="saasType[]" value="Finance"> Financial Management</label>
                    <label><input type="checkbox" name="saasType[]" value="Education"> E-Learning Platform</label>
                    <label><input type="checkbox" name="saasType[]" value="Healthcare"> Healthcare SaaS</label>
                    <label><input type="checkbox" name="saasType[]" value="Ecommerce"> SaaS for E-commerce</label>
                    <label><input type="checkbox" name="saasType[]" value="Custom"> Custom SaaS Solution</label>
                </div>
            </div>

            <!-- ML/AI Solutions Options -->
            <div class="form-step" id="mlaiOptions">
                <h4><i class="fas fa-robot"></i> ML/AI Solutions</h4>
                <div class="option-grid">
                    <label><input type="checkbox" name="mlaiType[]" value="Call Center"> AI Call Center Automation</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Video Detection"> Video Object & Scene Detection</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Chatbots"> Website Chatbots</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Recommendation"> Recommendation Systems</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Predictive"> Predictive Analytics</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Fraud"> Fraud Detection Systems</label>
                    <label><input type="checkbox" name="mlaiType[]" value="Image"> Image Recognition & Classification</label>
                    <label><input type="checkbox" name="mlaiType[]" value="NLP"> Natural Language Processing (NLP) Tools</label>
                </div>
            </div>

            <!-- Freelance Options -->
            <div class="form-step" id="freelanceOptions">
                <h4><i class="fas fa-user-tie"></i> Freelance Project Options</h4>
                <div class="option-grid">
                    <label><input type="checkbox" name="freelanceType[]" value="Full-time"> Full-time Engagement</label>
                    <label><input type="checkbox" name="freelanceType[]" value="Part-time"> Part-time Collaboration</label>
                    <label><input type="checkbox" name="freelanceType[]" value="Project-based"> Project-based Work</label>
                    <label><input type="checkbox" name="freelanceType[]" value="Consultation"> Technical Consultation</label>
                </div>
            </div>

            <!-- Database Options -->
            <div class="form-step" id="databaseOptions">
                <h4><i class="fas fa-database"></i> Database Solutions</h4>
                <div class="option-grid">
                    <label><input type="checkbox" name="databaseType[]" value="Design"> Database Design</label>
                    <label><input type="checkbox" name="databaseType[]" value="Optimization"> Performance Optimization</label>
                    <label><input type="checkbox" name="databaseType[]" value="Migration"> Data Migration</label>
                    <label><input type="checkbox" name="databaseType[]" value="Integration"> System Integration</label>
                    <label><input type="checkbox" name="databaseType[]" value="Security"> Security Enhancement</label>
                </div>
            </div>

            <div class="form-group">
                <label for="userEmail"><i class="fas fa-envelope"></i> Contact Email</label>
                <input type="email" id="userEmail" name="email" required placeholder="your@email.com">
            </div>

            <div class="form-group">
                <label for="projectName"><i class="fas fa-tag"></i> Project Name (Optional)</label>
                <input type="text" id="projectName" name="projectName" placeholder="My Awesome Project">
            </div>

            <div class="form-group">
                <label for="notes"><i class="fas fa-comment"></i> Additional Notes</label>
                <textarea id="notes" name="notes" rows="3" placeholder="Tell us more about your project requirements, timeline, and any specific technologies you're interested in..."></textarea>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i> Launch Project
            </button>
        </form>
    </div>

    <!-- Demo Booking -->
    <div class="booking-form">
        <h3><i class="fas fa-calendar-star"></i> book a demo </h3>
        <form id="demoForm">
            <div class="form-group">
                <label for="demoName"><i class="fas fa-user"></i> Your Name</label>
                <input type="text" id="demoName" name="name" required placeholder="John Doe">
            </div>
            
            <div class="form-group">
                <label for="demoEmail"><i class="fas fa-envelope"></i> Your Email</label>
                <input type="email" id="demoEmail" name="email" required placeholder="your@email.com">
            </div>
            
            <div class="form-group">
                <label for="demoDate"><i class="fas fa-clock"></i> Preferred Date/Time</label>
                <input type="datetime-local" id="demoDate" name="demoDate" required 
                       min="<?php echo date('Y-m-d\TH:i'); ?>" 
                       max="<?php echo date('Y-m-d\TH:i', strtotime('+1 month')); ?>">
            </div>
            
            <div class="form-group">
                <label for="demoTopics"><i class="fas fa-list"></i> Topics to Discuss</label>
                <select id="demoTopics" name="topics" multiple>
                    <option value="Web Development">Web Development</option>
                    <option value="SaaS Platform">SaaS Platform</option>
                    <option value="ML/AI Solutions">ML/AI Solutions</option>
                    <option value="Database Solutions">Database Solutions</option>
                    <option value="Project Estimation">Project Estimation</option>
                    <option value="Technical Consultation">Technical Consultation</option>
                </select>
                <small class="hint"></small>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-calendar-check"></i> Confirm Session
            </button>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Service Navigation - Dual System (Pills + Cards)
    const navPills = document.querySelectorAll('.nav-pill');
    const serviceOptions = document.querySelectorAll('.service-option');
    const formSteps = document.querySelectorAll('.form-step');
    
    function activateService(serviceElement) {
        const service = serviceElement.dataset.service;
        
        // Update navigation pills
        navPills.forEach(pill => pill.classList.remove('active'));
        document.querySelector(`.nav-pill[data-service="${service}"]`).classList.add('active');
        
        // Update service cards
        serviceOptions.forEach(option => option.classList.remove('active'));
        serviceElement.classList.add('active');
        
        // Update form steps
        formSteps.forEach(step => step.classList.remove('visible'));
        document.getElementById(`${service}Options`).classList.add('visible');
    }
    
    // Add click events to both navigation systems
    navPills.forEach(pill => {
        pill.addEventListener('click', function() {
            activateService(document.querySelector(`.service-option[data-service="${this.dataset.service}"]`));
        });
    });
    
    serviceOptions.forEach(option => {
        option.addEventListener('click', function() {
            activateService(this);
        });
    });

    // Project Form Submission
    const projectForm = document.getElementById('projectForm');
    projectForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const activePill = document.querySelector('.nav-pill.active');
        const service = activePill.dataset.service;
        const serviceTypes = Array.from(document.querySelectorAll(`input[name="${service}Type[]"]:checked`)).map(el => el.value);
        const email = document.getElementById('userEmail').value;
        const projectName = document.getElementById('projectName').value;
        const notes = document.getElementById('notes').value;
        
        // Validation
        if (!serviceTypes.length) {
            alert('Please select at least one option for your project type');
            return;
        }
        
        if (!email) {
            alert('Please enter your email address');
            return;
        }
        
        // Format message for WhatsApp
        const message = `New Project Inquiry:%0A%0A
            *Service Type:* ${service.toUpperCase()}%0A
            *Specializations:* ${serviceTypes.join(', ')}%0A
            ${projectName ? `*Project Name:* ${projectName}%0A` : ''}
            *Contact Email:* ${email}%0A
            *Additional Notes:* ${notes || 'None provided'}`;

        window.open(`https://wa.me/254724871460?text=${encodeURIComponent(message)}`, '_blank');
        
        // Show success feedback
        const submitBtn = this.querySelector('.submit-btn');
        submitBtn.innerHTML = '<i class="fas fa-check"></i> Successfully Sent!';
        submitBtn.style.background = '#27ae60';
        
        // Reset form after 3 seconds
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Launch Project';
            submitBtn.style.background = 'linear-gradient(135deg, #3498db, #2ecc71)';
            this.reset();
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        }, 3000);
    });

    // Demo Booking Form Submission
    const demoForm = document.getElementById('demoForm');
    demoForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('demoName').value;
        const email = document.getElementById('demoEmail').value;
        const demoDate = document.getElementById('demoDate').value;
        const topics = Array.from(document.getElementById('demoTopics').selectedOptions).map(opt => opt.value);
        
        // Validation
        if (!name || !email || !demoDate) {
            alert('Please fill in all required fields');
            return;
        }
        
        if (topics.length === 0) {
            alert('Please select at least one topic to discuss');
            return;
        }
        
        // Format date for display
        const formattedDate = new Date(demoDate).toLocaleString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            timeZoneName: 'short'
        });
        
        // Format message for WhatsApp
        const message = `Strategy Session Booking Request:%0A%0A
            *Name:* ${name}%0A
            *Email:* ${email}%0A
            *Requested Date/Time:* ${formattedDate}%0A
            *Topics to Discuss:* ${topics.join(', ')}%0A%0A
            We'll send you a Zoom link upon confirmation.`;

        window.open(`https://wa.me/254724871460?text=${encodeURIComponent(message)}`, '_blank');
        
        // Show success feedback
        const submitBtn = this.querySelector('.submit-btn');
        submitBtn.innerHTML = '<i class="fas fa-check"></i> Booking Request Sent!';
        submitBtn.style.background = '#27ae60';
        
        // Reset form after 3 seconds
        setTimeout(() => {
            submitBtn.innerHTML = '<i class="fas fa-calendar-check"></i> Confirm Session';
            submitBtn.style.background = 'linear-gradient(135deg, #3498db, #2ecc71)';
            this.reset();
        }, 3000);
    });
});
</script>

<?php include_once 'footer.php'; ?>