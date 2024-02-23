<aside :class="menu? 'active' : '' " id="leftLayout"  x-transition>
    {{-- CLOSE BNT --}}
    <x-app.global.close-btn :action="__('menu')" :id="__('close-btn')" />
    {{-- part top --}}
    <div id="top-sidebar">
        <x-app.global.logo-app />
        <x-app.global.sidebar.nav-links-sidebar />
    </div>
    {{-- part bottom --}}
    <x-app.global.sidebar.bottom-sidebar />
</aside>
