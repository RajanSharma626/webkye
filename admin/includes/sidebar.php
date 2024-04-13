<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/webkye-black-text-logo.png" alt="webkye logo" height="26">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="home" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span
                            data-key="t-dashboard">Dashboard</span> </a>
                </li>

                <li class="nav-item">
                    <a href="users-query" class="nav-link menu-link"> <i class="bi bi-chat-square-text"></i>
                        <span data-key="t-users-list">Users Query</span>
                        <?php
                        $mail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS `unread` FROM `contact_form` WHERE `status` = 0"));
                        if ($mail['unread'] > 0) { ?>
                            <span class="badge badge-pill bg-danger-subtle text-danger " data-key="t-hot">
                                <?php echo $mail['unread'] ?>
                            </span>
                        <?php }

                        ?>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="team" class="nav-link menu-link"> <i class="bi bi-people-fill"></i>
                        <span data-key="t-users-list">Team</span> </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="services">
                        <i class="bi bi-box-seam"></i> <span data-key="t-products">Services</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="reviews" class="nav-link menu-link"><i class="bi bi-star"></i> <span
                            data-key="t-reviews-ratings">Reviews</span></a>
                </li>
                <li class="nav-item">
                    <a href="projects" class="nav-link menu-link"><i class="bi bi-boxes"></i> <span
                            data-key="t-reviews-ratings">Projects</span></a>
                </li>
                <li class="nav-item">
                    <a href="blogs" class="nav-link menu-link"><i class="bi bi-pencil-fill"></i> <span
                            data-key="t-reviews-ratings">Blogs</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarOrders">
                        <i class="bi bi-cart4"></i> <span data-key="t-orders">Orders</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarOrders">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="orders-list-view.html" class="nav-link" data-key="t-list-view">List
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="orders-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="calendar.html" class="nav-link menu-link"><i class="bi bi-calendar-week"></i> <span
                            data-key="t-calendar">Calendar</span> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarSellers">
                        <i class="bi bi-binoculars"></i> <span data-key="t-sellers">Sellers</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSellers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="sellers-list-view.html" class="nav-link" data-key="t-list-view">List
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="sellers-grid-view.html" class="nav-link" data-key="t-grid-view">Grid
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="seller-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarInvoice">
                        <i class="bi bi-archive"></i> <span data-key="t-invoice">Invoice</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarInvoice">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="invoices-list.html" class="nav-link" data-key="t-list-view">List
                                    View</a>
                            </li>
                            <li class="nav-item">
                                <a href="invoices-details.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="invoices-create.html" class="nav-link" data-key="t-create-invoice">Create
                                    Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarShipping" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarShipping">
                        <i class="bi bi-truck"></i> <span data-key="t-shipping">Shipping</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarShipping">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="shipping-list.html" class="nav-link" data-key="t-shipping-list">Shipping
                                    List</a>
                            </li>
                            <li class="nav-item">
                                <a href="shipments.html" class="nav-link" data-key="t-shipments">Shipments</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="coupons.html" class="nav-link menu-link"> <i class="bi bi-tag"></i> <span
                            data-key="t-coupons">Coupons</span> </a>
                </li>

                <li class="nav-item">
                    <a href="brands.html" class="nav-link menu-link"><i class="bi bi-shop"></i> <span
                            data-key="t-brands">Brands</span> </a>
                </li>
                <li class="nav-item">
                    <a href="statistics.html" class="nav-link menu-link"><i class="bi bi-pie-chart"></i> <span
                            data-key="t-statistics">Statistics</span> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLocalization" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLocalization">
                        <i class="bi bi-coin"></i> <span data-key="t-localization">Localization</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLocalization">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="transactions.html" class="nav-link" data-key="t-transactions">Transactions</a>
                            </li>
                            <li class="nav-item">
                                <a href="currency-rates.html" class="nav-link" data-key="t-currency-rates">Currency
                                    Rates</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAccounts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarAccounts">
                        <i class="bi bi-person-circle"></i> <span data-key="t-accounts">Accounts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAccounts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="account.html" class="nav-link" data-key="t-my-account">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a href="account-settings.html" class="nav-link" data-key="t-settings">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-sign-up">Sign
                                    Up</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-sign-in">Sign
                                    In</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-reset-basic.html" class="nav-link"
                                    data-key="t-passowrd-reset">Password Reset</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-pass-change-basic.html" class="nav-link"
                                    data-key="t-create-password">Password Create</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-success-msg-basic.html" class="nav-link"
                                    data-key="t-success-message">Success Message</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-twostep-basic.html" class="nav-link" data-key="t-two-step-verify">Two Step
                                    Verify</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-logout">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-404.html" class="nav-link" data-key="t-error-404">Error 404</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-500.html" class="nav-link" data-key="t-error-500">Error 500</a>
                            </li>
                            <li class="nav-item">
                                <a href="coming-soon.html" class="nav-link" data-key="t-coming-soon">Coming
                                    Soon</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="https://themesbrand.com/toner/html/components/index.html"
                        target="_blank">
                        <i class="bi bi-layers"></i> <span data-key="t-components">Components</span> <span
                            class="badge badge-pill bg-secondary" data-key="t-v1.0">v1.0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarCrm"
                                                data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1">
                                                            Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2">
                                                            Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>