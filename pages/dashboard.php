<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket App | Dashboard</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div class="app-container">
    <?php include __DIR__ . '/../templates/components/app-header.php'; ?>

    <main class="dashboard-content">
        <h1>Dashboard</h1>

        <div class="stat-cards-grid">
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-ticket"></i></div>
                <div class="stat-value" id="total-tickets">0</div>
                <div class="stat-label">Total Tickets</div>
            </div>

            <div class="stat-card status-open">
                <div class="stat-icon"><i class="fa-solid fa-folder-open"></i></div>
                <div class="stat-value" id="open-tickets">0</div>
                <div class="stat-label">Open Tickets</div>
            </div>

            <div class="stat-card status-progress">
                <div class="stat-icon"><i class="fa-solid fa-spinner"></i></div>
                <div class="stat-value" id="inprogress-tickets">0</div>
                <div class="stat-label">In Progress</div>
            </div>

            <div class="stat-card status-closed">
                <div class="stat-icon"><i class="fa-solid fa-check-circle"></i></div>
                <div class="stat-value" id="closed-tickets">0</div>
                <div class="stat-label">Closed Tickets</div>
            </div>
        </div>

        <section class="action-section">
            <div class="decorative-circle top-right"></div>
            <div class="decorative-circle bottom-left"></div>
            <h2>Quick Actions</h2>
            <div class="action-box">
                <p>Manage your tickets efficiently. Create, view, update, and organize all your support tickets from one place.</p>
                <a href="/index.php?page=tickets" class="btn btn-manage">
                    <i class="fa-solid fa-list-check"></i> Manage Tickets
                </a>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../templates/components/footer.php'; ?>
</div>

<script src="/js/dashboard.js"></script>
</body>
</html>
