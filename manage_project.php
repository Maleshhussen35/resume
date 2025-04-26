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
.project-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 2rem;
}

.project-table th, .project-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.project-table th {
    background-color: #f5f5f5;
    font-weight: 600;
    color: #2c3e50;
}

.project-table tr:hover {
    background-color: #f9f9f9;
}

.status-active {
    color: #2ecc71;
    font-weight: 600;
}

.status-completed {
    color: #3498db;
    font-weight: 600;
}

.status-pending {
    color: #f39c12;
    font-weight: 600;
}

/* Responsive table */
@media (max-width: 768px) {
    .project-table {
        display: block;
        overflow-x: auto;
    }
}
</style>

<section class="management-section">
    <h2 class="section-title"><i class="fas fa-project-diagram"></i> Manage Projects</h2>
    
    <div class="management-container">
        <h3><i class="fas fa-tasks"></i> Current Projects</h3>
        
        <table class="project-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Client</th>
                    <th>Start Date</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>E-commerce Website</td>
                    <td>ABC Retail</td>
                    <td>2023-05-15</td>
                    <td>2023-08-30</td>
                    <td><span class="status-active">Active</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CRM System</td>
                    <td>XYZ Corp</td>
                    <td>2023-06-01</td>
                    <td>2023-09-15</td>
                    <td><span class="status-pending">Pending</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Portfolio Website</td>
                    <td>John Doe</td>
                    <td>2023-04-10</td>
                    <td>2023-05-30</td>
                    <td><span class="status-completed">Completed</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="add-project-form" style="margin-top: 3rem;">
            <h4><i class="fas fa-plus-circle"></i> Add New Project</h4>
            <form>
                <div class="form-row" style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                    <div class="form-group" style="flex: 1;">
                        <label for="project-name"><i class="fas fa-tag"></i> Project Name</label>
                        <input type="text" id="project-name" required>
                    </div>
                    <div class="form-group" style="flex: 1;">
                        <label for="client-name"><i class="fas fa-user-tie"></i> Client</label>
                        <input type="text" id="client-name" required>
                    </div>
                </div>
                
                <div class="form-row" style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                    <div class="form-group" style="flex: 1;">
                        <label for="start-date"><i class="fas fa-calendar-alt"></i> Start Date</label>
                        <input type="date" id="start-date" required>
                    </div>
                    <div class="