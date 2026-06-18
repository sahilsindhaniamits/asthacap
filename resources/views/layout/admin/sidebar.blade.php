<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Content</li>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.loan_request') }}">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">All Leads</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="banners">
                <ul class="nav flex-column sub-menu">

                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.loan_request_approved') }}">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Approved Leads</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="banners">
                <ul class="nav flex-column sub-menu">

                </ul>
            </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.message.create') }}">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Send SMS</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="banners">
                <ul class="nav flex-column sub-menu">

                </ul>
            </div>
        </li>
          

        <!--<li class="nav-item nav-category">Transactions</li>-->
        <!--<li class="nav-item">-->
        <!--    <a class="nav-link" data-bs-toggle="collapse" href="#transactions" aria-expanded="false" aria-controls="transactions">-->
        <!--        <i class="menu-icon mdi mdi-wallet"></i>-->
        <!--        <span class="menu-title">Request</span>-->
        <!--        <i class="menu-arrow"></i>-->
        <!--    </a>-->
        <!--    <div class="collapse" id="transactions">-->
        <!--        <ul class="nav flex-column sub-menu">-->
        <!--            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.transaction.deposit') }}">Recharge</a></li>-->
        <!--            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.transaction.withdrawl') }}">Withdraw</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->


        <!--<li class="nav-item nav-category">Users</li>-->
        <!--<li class="nav-item">-->
        <!--    <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="transactions">-->
        <!--        <i class="menu-icon mdi mdi-wallet"></i>-->
        <!--        <span class="menu-title">Users</span>-->
        <!--        <i class="menu-arrow"></i>-->
        <!--    </a>-->
        <!--    <div class="collapse" id="users">-->
        <!--        <ul class="nav flex-column sub-menu">-->
        <!--            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.users') }}">Users List</a></li>-->
        <!--            <li class="nav-item"> <a class="nav-link" href="#">Network</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->
        <!-- <li class="nav-item nav-category">System Settings</li>-->
        <!--<li class="nav-item">-->
        <!--    <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="transactions">-->
        <!--        <i class="menu-icon mdi mdi-wallet"></i>-->
        <!--        <span class="menu-title">System Settings</span>-->
        <!--        <i class="menu-arrow"></i>-->
        <!--    </a>-->
        <!--    <div class="collapse" id="users">-->
        <!--        <ul class="nav flex-column sub-menu">-->
        <!--            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.setting') }}">Binance Address</a></li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->


        <!-- <li class="nav-item nav-category">help</li> -->
       
    </ul>
</nav>