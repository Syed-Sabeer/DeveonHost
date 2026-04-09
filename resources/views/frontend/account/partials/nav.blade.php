<div class="account__nav mb-30">
    <a href="{{ route('account.dashboard') }}" class="tg-btn tg-btn-two {{ request()->routeIs('account.dashboard') ? 'active' : '' }}">Overview</a>
    <a href="{{ route('account.profile') }}" class="tg-btn tg-btn-two {{ request()->routeIs('account.profile') ? 'active' : '' }}">Profile</a>
    <a href="{{ route('account.security') }}" class="tg-btn tg-btn-two {{ request()->routeIs('account.security') ? 'active' : '' }}">Security</a>
    <a href="{{ route('account.orders') }}" class="tg-btn tg-btn-two {{ request()->routeIs('account.orders') ? 'active' : '' }}">Orders</a>
</div>
