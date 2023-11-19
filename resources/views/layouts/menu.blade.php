<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-receipt"></i>
        <p>Transactions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments-transactions.index') }}" class="nav-link {{ Request::is('payments-transactions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-money-check-alt"></i>
        <p>Payments Transactions</p>
    </a>
</li>
