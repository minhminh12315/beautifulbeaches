<div id="admin_container">
    <livewire:admin.sidebar />
    <div id="admin_main_container">
        <div id="admin_main_wrapper">
            <livewire:admin.header />
            <main id="admin_content">
                @yield('content')
            </main>
            <livewire:admin.footer />
        </div>
    </div>
</div>
