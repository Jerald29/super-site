<?php
// Function to check active state and handle menu-open for dropdowns
function isActive($page, $currentPage) {
    return ($page == $currentPage) ? 'active' : '';
}

function isMenuOpen($pages, $currentPage) {
    return (in_array($currentPage, $pages)) ? 'menu-open' : '';
}
?>

<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
        <!--begin::Brand Image-->
        <img
            src="../../dist/assets/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Super IMS</span>
        <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="menu"
            data-accordion="false"
        >
            <li class="nav-item">
                <a href="../dashboard/index.php" class="nav-link <?php echo isActive('dashboard', $currentPage); ?>">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-header">ACCOUNTS</li>
            <li class="nav-item <?php echo isMenuOpen(['create-account', 'account-list'], $currentPage); ?>">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-archive"></i>
                    <p>
                        Account Management
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="../../views/accounts/create-account.php" class="nav-link <?php echo isActive('create-account', $currentPage); ?>">
                            <i class="nav-icon bi bi-plus-circle"></i>
                            <p>Create Account</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../views/accounts/account-list.php" class="nav-link <?php echo isActive('account-list', $currentPage); ?>">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Account List</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->