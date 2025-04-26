<?php
session_start();

// Check admin authentication
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['username'] !== '452350MaRaES') {
    header('Location: unauthorized.php');
    exit;
}
?>

<?php include_once 'header.php'; ?>

<style>
/* Same styling as admin.php */
.management-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    color: #333;
}

.management-container {
    background: white;
    border-radius: 15px;
    padding: 2.5rem;
    margin-bottom: 3rem;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.service-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 2rem;
}

.service-table th, .service-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.service-table th {
    background-color: #f5f5f5;
    font-weight: 600;
    color: #2c3e50;
}

.service-table tr:hover {
    background-color: #f9f9f9;
}

.action-btn {
    padding: 0.5rem 1rem;
    border-radius: 5px;
    font-size: 0.9rem;
    margin-right: 0.5rem;
    transition: all 0.3s ease;
}

.edit-btn {
    background: #3498db;
    color: white;
    border: none;
}

.edit-btn:hover {
    background: #2980b9;
}

.delete-btn {
    background: #e74c3c;
    color: white;
    border: none;
}

.delete-btn:hover {
    background: #c0392b;
}

.add-service-form {
    margin-top: 3rem;
    padding: 2rem;
    background: #f9f9f9;
    border-radius: 10px;
}

/* Responsive table */
@media (max-width: 768px) {
    .service-table {
        display: block;
        overflow-x: auto;
    }
}
</style>

<section class="management-section">
    <h2 class="section-title"><i class="fas fa-concierge-bell"></i> Manage Services</h2>
    
    <div class="management-container">
        <h3><i class="fas fa-list"></i> Current Services</h3>
        
        <table class="service-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Web Development</td>
                    <td>Custom website development services</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SaaS Development</td>
                    <td>Software as a Service solutions</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <!-- More services can be added dynamically -->
            </tbody>
        </table>
        
        <div class="add-service-form">
            <h4><i class="fas fa-plus-circle"></i> Add New Service</h4>
            <form>
                <div class="form-group">
                    <label for="service-name"><i class="fas fa-tag"></i> Service Name</label>
                    <input type="text" id="service-name" required>
                </div>
                <div class="form-group">
                    <label for="service-desc"><i class="fas fa-align-left"></i> Description</label>
                    <textarea id="service-desc" rows="3" required></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <i class="fas fa-save"></i> Save Service
                </button>
            </form>
        </div>
    </div>
</section>

<?php include_once 'footer.php'; ?>