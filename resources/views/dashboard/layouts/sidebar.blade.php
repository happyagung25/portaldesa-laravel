<aside class="main-sidebar sidebar-dark-primary position-fixed elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/img/default_logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-normal font-outfit">Portal Desa Digital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if ($user->avatar !== null)
                    <img src="{{ asset('storage/' . $user->avatar) }}" class="img-circle elevation-2"
                        alt="{{ $item->name }}">
                @else
                    <img src="{{ asset('assets/img/no-pic.png') }}" class="img-circle elevation-2"
                        alt="{{ $user->name }}">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block font-outfit">{{ $user->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        @include('dashboard.layouts.menu')
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
