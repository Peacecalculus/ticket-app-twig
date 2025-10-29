<header class="app-header">
    <div class="logo">TicketApp</div>
    <nav class="main-nav">
        <a href="/index.php?page=dashboard" class="<?php echo ($page ?? '') == 'dashboard' ? 'active' : ''; ?>">Dashboard</a>
        <a href="/index.php?page=tickets" class="<?php echo ($page ?? '') == 'tickets' ? 'active' : ''; ?>" data-testid="tickets-link">Manage Tickets</a>
        <button id="logout-button" class="btn btn-logout" data-testid="logout-button">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </nav>
</header>
