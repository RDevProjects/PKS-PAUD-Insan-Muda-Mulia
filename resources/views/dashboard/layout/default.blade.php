<!DOCTYPE html>
<html lang="en">
@include('dashboard.layout.include.head')

<body>
    <main>
        <div id="app-layout" class="overflow-x-hidden flex">
            @include('dashboard.layout.include.navbar')
            <!-- app layout content -->
            <div id="app-layout-content"
                class="min-h-screen w-full min-w-[100vw] md:min-w-0 ml-[15.625rem] [transition:margin_0.25s_ease-out]">
                @include('dashboard.layout.include.app-layout-navbar')
                @yield('content')
            </div>
        </div>
    </main>
    @include('dashboard.layout.include.script')
</body>

</html>
