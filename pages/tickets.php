<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket App | Manage Tickets</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="app-container">
    <?php include __DIR__ . '/../templates/components/app-header.php'; ?>

    <main class="tickets-content">
        <h1>Ticket Management</h1>

        <div id="toast-notification" class="toast-notification" role="alert" aria-live="assertive"></div>
        
        <section id="ticket-list-view" class="view-section active">
            <div class="list-header">
                <h2>Active Tickets</h2>
                <button id="create-ticket-btn" class="btn btn-primary" data-testid="create-ticket-button">
                    <i class="fa-solid fa-plus"></i> Create New Ticket
                </button>
            </div>
            
            <div id="tickets-container" class="tickets-grid">
                <div id="no-tickets-message" class="empty-state" style="display:none;">
                    <p>No tickets found. Click "Create New Ticket" to get started.</p>
                </div>
            </div>
        </section>

        <section id="ticket-form-view" class="view-section hidden">
            <button id="back-to-list-btn" class="btn btn-secondary-outline">
                <i class="fa-solid fa-arrow-left"></i> Back to List
            </button>
            <h2 id="form-title">Create New Ticket</h2>

            <form id="ticket-form" class="card-box" data-testid="ticket-form">
                <input type="hidden" id="ticket-id" name="id">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" required>
                    <div id="title-error" class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="description">Description (Optional)</label>
                    <textarea id="description" name="description"></textarea>
                    <div id="description-error" class="error-message"></div>
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="" disabled selected>Select Status</option>
                        <option value="open" data-status-color="green">Open</option>
                        <option value="in_progress" data-status-color="amber">In Progress</option>
                        <option value="closed" data-status-color="gray">Closed</option>
                    </select>
                    <div id="status-error" class="error-message"></div>
                </div>

                <div class="form-group">
                    <label for="priority">Priority (Optional)</label>
                    <select id="priority" name="priority">
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" data-testid="save-ticket-button">Save Ticket</button>
            </form>
        </section>
        
        <div id="delete-modal" class="modal hidden" role="dialog" aria-labelledby="delete-modal-title">
            <div class="modal-content">
                <h3 id="delete-modal-title">Confirm Deletion</h3>
                <p>Are you sure you want to delete this ticket?</p>
                <div class="modal-actions">
                    <button id="confirm-delete-btn" class="btn btn-danger" data-testid="confirm-delete-button">Delete</button>
                    <button id="cancel-delete-btn" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>

        <div class="decorative-circle bottom-left"></div>
    </main>

    <?php include __DIR__ . '/../templates/components/footer.php'; ?>
</div>

<script src="/js/tickets.js"></script>
</body>
</html>
