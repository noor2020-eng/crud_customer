
<div class=" sidebar-menu backg">
    <div class="sidebar-menu-inner">

        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="{{route('index')}}">
                    <span class="title">NOOR</span>
                </a>

            </div>


            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>

            </div>

        </header>
        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

            <li class="has-sub">
                <a href="layout-api.html">
                    <i class="entypo-layout"></i>
                    <span class="title">Layouts</span>
                </a>
                <ul>
                    <li>
                        <a href="{{asset('layout-api.html')}}">
                            <span class="title">Layout API</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
