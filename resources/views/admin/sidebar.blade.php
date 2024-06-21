<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href=""> <img alt="image" src="{{ @asset('./images/29-maktab.png') }}" class="header-logo" /><br> <span
                    class="logo-name">

                    29-maktab</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
                <a href="{{ route('dashboard') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.slider.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Slider</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.statistic.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Statistika</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.teachers.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>O'qituvchilar</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.pedagogical.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Pedagogicals</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('getmessage') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Message</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.post.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Yangiliklar</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.gallery.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Gallery</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.document.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Hujjatlar</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.leader.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Rahbariyat</span></a>
            </li>
            <li class="dropdown">
                <a href="{{ route('admin.holiday.index') }}" class="menu-toggle"><i class="fas fa-desktop"></i><span>Tadbirlar</span></a>
            </li>



        </ul>
    </aside>
</div>

@section('js')
    <script>
        var url = windows.location.href;
        var link = document.querySelectorAll("[href='" + url + "']")[0];
        link.parentElement.classList.add('active')
    </script>
@endsection
