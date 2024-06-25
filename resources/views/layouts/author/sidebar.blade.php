<aside class="left-sidebar" style="background-color: #183249">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="Javascript:void(0)" class="text-nowrap logo-img">
                <img src="{{asset('assets/img/logo/get-media-light.svg')}}" class="dark-logo" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar mt-3" data-simplebar>
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4 text-white"></i>
                    <span class="hide-menu text-white">Utama</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('profile.author' ? 'active' : '') }}"
                        href="{{ route('profile.author') }}"
                        aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75"/></svg>
                        <span class="hide-menu">General</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h4l3-9l4 18l3-9h4"/></svg>
                      <span class="hide-menu">Statistik</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="ms-3 sidebar-item">
                        {{-- <a href="{{ route('news.author.statistic') }}" class="sidebar-link {{ request()->routeIs('news.author.statistic' ? 'active' : '') }}">
                            <div class="round-16 d-flex align-items-center justify-content-center">  
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0C10.0569 0 11.9609 0.362667 13.3849 0.985778C14.0951 1.29689 14.7262 1.68978 15.1911 2.17156C15.6222 2.616 15.9422 3.17422 15.9929 3.82133L16 4V12.8889C16 13.6124 15.6613 14.2311 15.1911 14.7173C14.7262 15.1991 14.0951 15.592 13.3849 15.9031C11.9609 16.5253 10.0569 16.8889 8 16.8889C5.94311 16.8889 4.03911 16.5262 2.61511 15.9031C1.90489 15.592 1.27378 15.1991 0.808889 14.7173C0.377778 14.2729 0.0577777 13.7147 0.00711102 13.0676L0 12.8889V4C0 3.27644 0.338667 2.65778 0.808889 2.17156C1.27378 1.68978 1.90489 1.29689 2.61511 0.985778C4.03911 0.363556 5.94311 0 8 0ZM14.2222 11.0284C13.9528 11.1899 13.6731 11.3336 13.3849 11.4587C11.9609 12.0809 10.0569 12.4444 8 12.4444C5.94311 12.4444 4.03911 12.0818 2.61511 11.4587C2.32694 11.3336 2.04723 11.1899 1.77778 11.0284V12.8889C1.77778 13.024 1.83644 13.2231 2.08711 13.4818C2.34133 13.7449 2.752 14.0222 3.328 14.2747C4.47822 14.7778 6.12889 15.1111 8 15.1111C9.87111 15.1111 11.5218 14.7778 12.672 14.2747C13.248 14.0222 13.6587 13.7449 13.9129 13.4818C14.1636 13.224 14.2222 13.024 14.2222 12.8889V11.0284ZM14.2222 6.584C13.9528 6.74545 13.6731 6.88917 13.3849 7.01422C11.9609 7.63644 10.0569 8 8 8C5.94311 8 4.03911 7.63733 2.61511 7.01422C2.32694 6.88918 2.04723 6.74547 1.77778 6.584V8.44444C1.77778 8.57956 1.83644 8.77867 2.08711 9.03733C2.34133 9.30044 2.752 9.57778 3.328 9.83022C4.47822 10.3333 6.12889 10.6667 8 10.6667C9.87111 10.6667 11.5218 10.3333 12.672 9.83022C13.248 9.57778 13.6587 9.30044 13.9129 9.03733C14.1636 8.77956 14.2222 8.57956 14.2222 8.44444V6.584ZM8 1.77778C6.12889 1.77778 4.47822 2.11111 3.328 2.61422C2.752 2.86667 2.34133 3.144 2.08711 3.40711C1.83644 3.66489 1.77778 3.86489 1.77778 4C1.77778 4.13511 1.83644 4.33422 2.08711 4.59289C2.34133 4.856 2.752 5.13333 3.328 5.38578C4.47822 5.88889 6.12889 6.22222 8 6.22222C9.87111 6.22222 11.5218 5.88889 12.672 5.38578C13.248 5.13333 13.6587 4.856 13.9129 4.59289C14.1636 4.33511 14.2222 4.13511 14.2222 4C14.2222 3.86489 14.1636 3.66578 13.9129 3.40711C13.6587 3.144 13.248 2.86667 12.672 2.61422C11.5218 2.11111 9.87111 1.77778 8 1.77778Z" fill="white"/>
                                </svg>
                            </div>
                            <span class="hide-menu">Pendapatan</span>
                        </a> --}}
                        <a href="{{ route('news.author.statistic') }}" class="sidebar-link {{ request()->routeIs('news.author.statistic' ? 'active' : '') }}">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.077 9V7H5.077L5.077 9H3.077ZM13.077 1.494C13.0754 1.09722 12.9167 0.717224 12.6355 0.437216C12.3544 0.157208 11.9738 -3.17426e-06 11.577 0L1.5 0C1.10218 0 0.720644 0.158035 0.43934 0.43934C0.158035 0.720644 0 1.10218 0 1.5L0 10.5C0 11.163 0.263392 11.7989 0.732233 12.2678C1.20107 12.7366 1.83696 13 2.5 13H13.654C14.317 13 14.9529 12.7366 15.4218 12.2678C15.8906 11.7989 16.154 11.163 16.154 10.5V4.5C16.154 4.10218 15.996 3.72064 15.7147 3.43934C15.4334 3.15804 15.0518 3 14.654 3H14.077V10.23C14.077 10.3626 14.0243 10.4898 13.9306 10.5836C13.8368 10.6773 13.7096 10.73 13.577 10.73C13.4444 10.73 13.3172 10.6773 13.2234 10.5836C13.1297 10.4898 13.077 10.3626 13.077 10.23V1.494ZM2.077 3.5C2.077 3.36739 2.12968 3.24021 2.22345 3.14645C2.31721 3.05268 2.44439 3 2.577 3L10.577 3C10.7096 3 10.8368 3.05268 10.9306 3.14645C11.0243 3.24021 11.077 3.36739 11.077 3.5C11.077 3.63261 11.0243 3.75979 10.9306 3.85355C10.8368 3.94732 10.7096 4 10.577 4L2.577 4C2.44439 4 2.31721 3.94732 2.22345 3.85355C2.12968 3.75979 2.077 3.63261 2.077 3.5ZM7.577 6L10.577 6C10.7096 6 10.8368 6.05268 10.9306 6.14645C11.0243 6.24021 11.077 6.36739 11.077 6.5C11.077 6.63261 11.0243 6.75979 10.9306 6.85355C10.8368 6.94732 10.7096 7 10.577 7L7.577 7C7.44439 7 7.31721 6.94732 7.22345 6.85355C7.12968 6.75979 7.077 6.63261 7.077 6.5C7.077 6.36739 7.12968 6.24021 7.22345 6.14645C7.31721 6.05268 7.44439 6 7.577 6ZM7.077 9.5C7.077 9.36739 7.12968 9.24021 7.22345 9.14645C7.31721 9.05268 7.44439 9 7.577 9H10.577C10.7096 9 10.8368 9.05268 10.9306 9.14645C11.0243 9.24021 11.077 9.36739 11.077 9.5C11.077 9.63261 11.0243 9.75979 10.9306 9.85355C10.8368 9.94732 10.7096 10 10.577 10H7.577C7.44439 10 7.31721 9.94732 7.22345 9.85355C7.12968 9.75979 7.077 9.63261 7.077 9.5ZM2.577 6H5.577C5.70961 6 5.83679 6.05268 5.93055 6.14645C6.02432 6.24021 6.077 6.36739 6.077 6.5L6.077 9.5C6.077 9.63261 6.02432 9.75979 5.93055 9.85355C5.83679 9.94732 5.70961 10 5.577 10H2.577C2.44439 10 2.31721 9.94732 2.22345 9.85355C2.12968 9.75979 2.077 9.63261 2.077 9.5V6.5C2.077 6.36739 2.12968 6.24021 2.22345 6.14645C2.31721 6.05268 2.44439 6 2.577 6Z" fill="white"/>
                                </svg>                                                                
                            </div>
                            <span class="hide-menu">Berita</span>
                        </a>
                      </li>
                    </ul>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4 text-white"></i>
                    <span class="hide-menu text-white">Berita</span>
                </li>
                
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('news.list.author') || request()->routeIs('create.news') || request()->routeIs('edit.news') ? 'active' : '' }} ps-3"
                        href="{{ route('news.list.author') }}" aria-expanded="false">
                        <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M3.077 9V7H5.077L5.077 9H3.077ZM13.077 1.494C13.0754 1.09722 12.9167 0.717224 12.6355 0.437216C12.3544 0.157208 11.9738 -3.17426e-06 11.577 0L1.5 0C1.10218 0 0.720644 0.158035 0.43934 0.43934C0.158035 0.720644 0 1.10218 0 1.5L0 10.5C0 11.163 0.263392 11.7989 0.732233 12.2678C1.20107 12.7366 1.83696 13 2.5 13H13.654C14.317 13 14.9529 12.7366 15.4218 12.2678C15.8906 11.7989 16.154 11.163 16.154 10.5V4.5C16.154 4.10218 15.996 3.72064 15.7147 3.43934C15.4334 3.15804 15.0518 3 14.654 3H14.077V10.23C14.077 10.3626 14.0243 10.4898 13.9306 10.5836C13.8368 10.6773 13.7096 10.73 13.577 10.73C13.4444 10.73 13.3172 10.6773 13.2234 10.5836C13.1297 10.4898 13.077 10.3626 13.077 10.23V1.494ZM2.077 3.5C2.077 3.36739 2.12968 3.24021 2.22345 3.14645C2.31721 3.05268 2.44439 3 2.577 3L10.577 3C10.7096 3 10.8368 3.05268 10.9306 3.14645C11.0243 3.24021 11.077 3.36739 11.077 3.5C11.077 3.63261 11.0243 3.75979 10.9306 3.85355C10.8368 3.94732 10.7096 4 10.577 4L2.577 4C2.44439 4 2.31721 3.94732 2.22345 3.85355C2.12968 3.75979 2.077 3.63261 2.077 3.5ZM7.577 6L10.577 6C10.7096 6 10.8368 6.05268 10.9306 6.14645C11.0243 6.24021 11.077 6.36739 11.077 6.5C11.077 6.63261 11.0243 6.75979 10.9306 6.85355C10.8368 6.94732 10.7096 7 10.577 7L7.577 7C7.44439 7 7.31721 6.94732 7.22345 6.85355C7.12968 6.75979 7.077 6.63261 7.077 6.5C7.077 6.36739 7.12968 6.24021 7.22345 6.14645C7.31721 6.05268 7.44439 6 7.577 6ZM7.077 9.5C7.077 9.36739 7.12968 9.24021 7.22345 9.14645C7.31721 9.05268 7.44439 9 7.577 9H10.577C10.7096 9 10.8368 9.05268 10.9306 9.14645C11.0243 9.24021 11.077 9.36739 11.077 9.5C11.077 9.63261 11.0243 9.75979 10.9306 9.85355C10.8368 9.94732 10.7096 10 10.577 10H7.577C7.44439 10 7.31721 9.94732 7.22345 9.85355C7.12968 9.75979 7.077 9.63261 7.077 9.5ZM2.577 6H5.577C5.70961 6 5.83679 6.05268 5.93055 6.14645C6.02432 6.24021 6.077 6.36739 6.077 6.5L6.077 9.5C6.077 9.63261 6.02432 9.75979 5.93055 9.85355C5.83679 9.94732 5.70961 10 5.577 10H2.577C2.44439 10 2.31721 9.94732 2.22345 9.85355C2.12968 9.75979 2.077 9.63261 2.077 9.5V6.5C2.077 6.36739 2.12968 6.24021 2.22345 6.14645C2.31721 6.05268 2.44439 6 2.577 6Z" fill="white"/>
                        </svg>   
                        <span class="hide-menu" style="margin-left: 2px">Daftar Berita</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link"
                        href="{{ route('news-liked.user') }}" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" d="m15 10l-.74-.123a.75.75 0 0 0 .74.873zM4 10v-.75a.75.75 0 0 0-.75.75zm16.522 2.392l.735.147zM6 20.75h11.36v-1.5H6zm12.56-11.5H15v1.5h3.56zm-2.82.873l.806-4.835l-1.48-.247l-.806 4.836zm-.92-6.873h-.214v1.5h.213zm-3.335 1.67L8.97 8.693l1.248.832l2.515-3.773zM7.93 9.25H4v1.5h3.93zM3.25 10v8h1.5v-8zm16.807 8.54l1.2-6l-1.47-.295l-1.2 6zM8.97 8.692a1.25 1.25 0 0 1-1.04.557v1.5c.92 0 1.778-.46 2.288-1.225zm7.576-3.405A1.75 1.75 0 0 0 14.82 3.25v1.5a.25.25 0 0 1 .246.291zm2.014 5.462c.79 0 1.38.722 1.226 1.495l1.471.294A2.75 2.75 0 0 0 18.56 9.25zm-1.2 10a2.75 2.75 0 0 0 2.697-2.21l-1.47-.295a1.25 1.25 0 0 1-1.227 1.005zm-2.754-17.5a3.75 3.75 0 0 0-3.12 1.67l1.247.832a2.25 2.25 0 0 1 1.873-1.002zM6 19.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 6 20.75z"/><path stroke="currentColor" stroke-width="1.5" d="M8 10v10"/></g></svg>
                        <span class="hide-menu">Berita Disukai</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-white">BERLANGGANAN</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link ps-3"
                        href="javascript:void(0)" aria-expanded="false">                     
                        <svg width="15" height="19" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M11.7649 7.74467C11.5514 7.46132 11.2915 7.21576 11.0501 6.9702C10.428 6.40352 9.72246 5.99739 9.12828 5.40238C7.74496 4.02345 7.43859 1.74727 8.32057 0C7.43859 0.217228 6.66802 0.708354 6.00885 1.2467C3.60429 3.2112 2.65732 6.67741 3.78997 9.6525C3.82711 9.74694 3.86424 9.84139 3.86424 9.96417C3.86424 10.172 3.72499 10.3609 3.5393 10.4364C3.32577 10.5309 3.10296 10.4742 2.92656 10.3231C2.87355 10.2785 2.82943 10.224 2.79658 10.1625C1.74749 8.81192 1.58038 6.87575 2.28596 5.32682C0.735532 6.6113 -0.109313 8.78358 0.0113792 10.8331C0.0670833 11.3053 0.122787 11.7776 0.280616 12.2498C0.410592 12.8165 0.66126 13.3832 0.939781 13.8837C1.94245 15.5177 3.67857 16.6888 5.54465 16.9249C7.53143 17.1799 9.65747 16.8116 11.1801 15.4138C12.879 13.846 13.4732 11.3337 12.6005 9.18026L12.4798 8.9347C12.2848 8.50024 11.7649 7.74467 11.7649 7.74467ZM8.83119 13.6948C8.57124 13.9215 8.14418 14.1671 7.80995 14.2615C6.77014 14.6393 5.73033 14.1104 5.11759 13.4871C6.22239 13.2226 6.88155 12.3915 7.07651 11.5509C7.23434 10.7953 6.93725 10.172 6.81656 9.44471C6.70515 8.7458 6.72372 8.15079 6.97439 7.4991C7.15079 7.858 7.33647 8.2169 7.55928 8.50024C8.27415 9.44471 9.39752 9.86028 9.6389 11.1448C9.67604 11.277 9.69461 11.4092 9.69461 11.5509C9.72246 12.3254 9.38823 13.1754 8.83119 13.6948Z" fill="#175A95"/>
                        </svg>    
                        <span class="hide-menu ms-1">Berlanganan</span>
                    </a>
                </li>
                
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu text-white">IKLAN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link ps-3 {{ request()->routeIs('status-advertisement.user') || request()->routeIs('biodata-advertisement') || request()->routeIs('upload-advertisement') ? 'active' : '' }}"
                        href="{{ route('status-advertisement.user') }}" aria-expanded="false">                     
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.255 1.2937L17.342 1.5917L17.431 1.9297L17.475 2.1147L17.564 2.5147L17.649 2.9577L17.73 3.4427C17.7553 3.61137 17.78 3.78737 17.804 3.9707L17.869 4.5427C17.949 5.3337 18 6.2427 18 7.2737C18 8.3047 17.95 9.2137 17.87 10.0047L17.804 10.5767C17.7807 10.76 17.756 10.936 17.73 11.1047L17.65 11.5897L17.564 12.0327L17.475 12.4327L17.386 12.7927L17.298 13.1097L17.255 13.2537C16.924 14.3407 15.791 14.7587 14.861 14.4487L13.681 14.0557L13.281 14.9887C13.0835 15.4497 12.7199 15.8197 12.2624 16.0253C11.8049 16.2309 11.2869 16.2571 10.811 16.0987L5.715 14.3987C5.45269 14.3112 5.21137 14.1703 5.00628 13.9848C4.80119 13.7994 4.63679 13.5734 4.52346 13.3211C4.41013 13.0689 4.35033 12.7959 4.34784 12.5194C4.34535 12.2429 4.40023 11.9689 4.509 11.7147L4.778 11.0867L4 10.8287L2.632 11.2847C2.33133 11.3848 2.01118 11.4121 1.69791 11.3642C1.38464 11.3164 1.08723 11.1947 0.830189 11.0094C0.573148 10.824 0.363833 10.5802 0.219494 10.2981C0.075155 10.016 -7.62588e-05 9.7036 5.80054e-08 9.3867V5.1617C-7.62588e-05 4.8448 0.075155 4.53241 0.219494 4.25029C0.363833 3.96816 0.573148 3.72437 0.830189 3.53901C1.08723 3.35366 1.38464 3.23203 1.69791 3.18416C2.01118 3.1363 2.33133 3.16356 2.632 3.2637L4 3.7197L14.861 0.0996998C15.791 -0.2103 16.924 0.206699 17.255 1.2937ZM6.682 11.7217L6.347 12.5017L11.443 14.2017L11.778 13.4207L6.682 11.7217ZM15.388 2.0317L5 5.4947V9.0527L15.388 12.5157L15.465 12.2327L15.545 11.9057L15.585 11.7257L15.663 11.3317C15.6901 11.1857 15.7155 11.0393 15.739 10.8927L15.809 10.4077C15.921 9.5607 16 8.5207 16 7.2737C16 6.0267 15.92 4.9867 15.81 4.1397L15.739 3.6547C15.7143 3.50137 15.689 3.3547 15.663 3.2147L15.584 2.8217L15.504 2.4727L15.388 2.0317ZM2 5.1617V9.3867L3 9.0527V5.4947L2 5.1617Z" fill="white"/>
                        </svg>                                
                        <span class="hide-menu ms-1">Iklan</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
