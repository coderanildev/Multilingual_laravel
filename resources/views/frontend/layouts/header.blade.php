<!-- TOP BAR (Utility) -->
    <div class="bg-dark text-white py-2 d-none d-md-block border-bottom border-dark">
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex gap-3">
                    <span class="opacity-80"><i class="fas fa-calendar-alt me-1"></i> <span id="current-date"></span></span>
                    <a href="#" class="text-white text-decoration-none hover-gold">Screen Reader Access</a>
                    <a href="#" class="text-white text-decoration-none hover-gold">Skip to Main Content</a>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex gap-1">
                        <button class="btn btn-sm text-white p-0 px-1" onclick="adjustFont(-1)">A-</button>
                        <button class="btn btn-sm text-white p-0 px-1" onclick="resetFont()">A</button>
                        <button class="btn btn-sm text-white p-0 px-1" onclick="adjustFont(1)">A+</button>
                    </div>
                    <div class="vr bg-secondary"></div>
                    <button class="btn btn-sm text-white fw-bold">
                        
                            @if(session('sess_lang') == 'hindi')
                                <a href="{{ url('langswitch/switchlanguage?language=english') }}" class="lang-link">
                                    English
                                </a>
                            @else
                                <a href="{{ url('langswitch/switchlanguage?language=hindi') }}" class="lang-link">
                                    हिन्दी
                                </a>
                            @endif
                        
                    </button>
                    <div class="d-flex gap-3 ms-2">
                        <a href="#" class="text-white opacity-70 hover-opacity-100"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white opacity-70 hover-opacity-100"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white opacity-70 hover-opacity-100"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE MENU OVERLAY  -->
    <div id="mobile-menu" class="position-fixed start-0 vw-100 d-lg-none d-flex flex-column align-items-start" 
        style="top: 110px; max-height: calc(100vh - 42px); transform: translateY(-150%); transition: transform 0.8s ease-in-out; background: linear-gradient(145deg, var(--csir-blue) 0%, #7a1830 50%, var(--csir-gold) 100%); z-index: 59; overflow-y: auto; padding: 0;">

        <!-- Sticky header with close button - only shows when menu is open -->
        <div class="w-100 position-sticky top-0" style="background: linear-gradient(145deg, var(--csir-blue) 0%, #7a1830 50%, var(--csir-gold) 100%); z-index: 70; display: none;" id="menu-header">
            <button onclick="toggleMobileMenu()" class="btn position-absolute top-0 end-0 text-white fs-3" style="right: 15px; top: 10px; z-index: 70;">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="slicknav_menu w-100" id="menu-content" style="margin-top: 0;">
            <ul class="slicknav_nav" role="menu" style="list-style: none; padding: 0 15px; margin: 0 0 20px 0;">
                <!-- Home -->
                <li class="active mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold" style="font-size: 1rem;" onclick="toggleMobileMenu()">Home</a>
                </li>

                <!-- About Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        About <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Genesis</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Mandate</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Vision</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Mission</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Citizen Charter</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Organogram</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Our Leadership</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Scientific & Technical Staff</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Research Council</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Management Council</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Divisions</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Annual Reports</a></li>
                    </ul>
                </li>

                <!-- R&D Projects Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        R&amp;D Projects <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Indian S&amp;T and Innovation Policy</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Major Lab Projects/ Other Lab Projects</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Sponsored Projects</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Publications by S&amp;T staff</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Project Reports</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">S&amp;T Reports</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Policy Advocacy</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">MoU</a></li>
                    </ul>
                </li>

                <!-- HRD Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        HRD <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">AcSIR</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Conferences/ Seminars</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Training</a></li>
                    </ul>
                </li>

                <!-- Knowledge Products Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        Knowledge Products <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Research Journals</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Abstracting Journals</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Popular Science Magazines</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Newsletters/ Digest</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Rajbhasha Patrika (Nav sanchetna)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Bharat Ki Sampada</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Wealth of India</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Scholarly Books & Monographs</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Popular Science Books</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Iconic Publications</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Policy Bulletin</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Discussion Papers</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">E-Resources</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Miscellaneous</a></li>
                    </ul>
                </li>

                <!-- Outreach Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        Outreach <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Jigyasa</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Events</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Exhibitions</a></li>
                    </ul>
                </li>

                <!-- National Missions Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        National Missions <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">ISSN National Centre</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Unnat Bharat Abhiyaan</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">TRL</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">SVASTIK</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">SMCC</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">IISF 2020</a></li>
                    </ul>
                </li>

                <!-- Resources Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        Resources <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">NISCAIR Online Periodicals Repository (NOPR)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">National Knowledge Resource Consortium (NKRC)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">National Science Digital Library (NSDL)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">National Union Catalogue (NUCSSI)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Knowledge Gateway (KNOWGATE)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">KAMP</a></li>
                    </ul>
                </li>

                <!-- Facilities Dropdown -->
                <li class="slicknav_collapsed slicknav_parent mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold d-flex justify-content-between align-items-center" style="font-size: 1rem;" onclick="toggleSubMenu(this)">
                        Facilities <span class="slicknav_arrow">▼</span>
                    </a>
                    <ul class="dropdown slicknav_hidden" style="display: none; list-style: none; padding-left: 15px; margin: 5px 0;">
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">National Science Library (NSL)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Raw Materials Herbarium Museum (RHMD)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">ISO Certified Data Centre (DIRF)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Audio Visual & Multimedia (AVM)</a></li>
                        <li class="mb-1"><a href="#" class="text-white-50 text-decoration-none d-block py-1 small" onclick="toggleMobileMenu()">Print Production & Graphic Arts</a></li>
                    </ul>
                </li>

                <!-- Contact (direct link) -->
                <li class="mb-1" style="border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <a href="#" class="text-white text-decoration-none d-block py-2 fw-bold" style="font-size: 1rem;" onclick="toggleMobileMenu()">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <script>
    // Mobile Menu Toggle Function
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const menuHeader = document.getElementById('menu-header');
        const menuContent = document.getElementById('menu-content');
        const isOpen = menu.style.transform === 'translateY(0)' || menu.style.transform === '';
        
        if (isOpen) {
            menu.style.transform = 'translateY(-150%)';
            menuHeader.style.display = 'none';
            menuContent.style.marginTop = '0';
        } else {
            menu.style.transform = 'translateY(0)';
            menuHeader.style.display = 'block';
            menuContent.style.marginTop = '50px';
        }
    }

    // Submenu Toggle Function
    function toggleSubMenu(element) {
        event.preventDefault();
        const submenu = element.nextElementSibling;
        const arrow = element.querySelector('.slicknav_arrow');
        
        if (submenu.style.display === 'none' || submenu.style.display === '') {
            submenu.style.display = 'block';
            arrow.innerHTML = '▲';
        } else {
            submenu.style.display = 'none';
            arrow.innerHTML = '▼';
        }
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('mobile-menu');
        const menuButton = document.querySelector('.btn.d-lg-none');
        
        if (menu && menu.style.transform === 'translateY(0)' && 
            !menu.contains(event.target) && 
            menuButton && !menuButton.contains(event.target)) {
            toggleMobileMenu();
        }
    });

    // Initialize menu state
    document.addEventListener('DOMContentLoaded', function() {
        const menu = document.getElementById('mobile-menu');
        const menuHeader = document.getElementById('menu-header');
        const menuContent = document.getElementById('menu-content');
        
        // Ensure menu starts hidden
        menu.style.transform = 'translateY(-150%)';
        menuHeader.style.display = 'none';
        menuContent.style.marginTop = '0';
    });
    </script>

    <style>
    /* Mobile menu scrollbar styling */
    #mobile-menu::-webkit-scrollbar {
        width: 4px;
    }
    #mobile-menu::-webkit-scrollbar-track {
        background: rgba(255,255,255,0.1);
    }
    #mobile-menu::-webkit-scrollbar-thumb {
        background: var(--csir-gold);
        border-radius: 4px;
    }

    /* Submenu link hover effect */
    #mobile-menu .slicknav_nav ul li a:hover {
        color: var(--csir-gold) !important;
        padding-left: 5px;
        transition: all 0.2s ease;
    }

    /* Main menu item hover effect */
    #mobile-menu .slicknav_nav > li > a:hover {
        color: var(--csir-gold) !important;
    }

    /* Text color for submenu items */
    .text-white-50 {
        color: rgba(255, 255, 255, 0.7) !important;
    }

    /* Ensure menu content starts right below top bar */
    #mobile-menu .slicknav_menu {
        padding-top: 0;
    }
    </style>

    <!-- MAIN HEADER -->
    <header class="sticky-top glass-header z-50 transition-all" id="main-header">
        <div class="container-fluid py-2">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logos -->
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex flex-column align-items-center">
                        <!-- Placeholder for CSIR Logo -->
                        <div class="csi text-white d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <img src="data:image/jpeg;base64,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" alt="NISCPR Logo" class="img-fluid" style="max-height: 50px;">
                        </div>
                    </div>
                    <div class="vr d-none d-md-block bg-secondary" style="height: 40px;"></div>
                    <div>
                        <h1 class="h2 font-serif fw-bold csir-text-blue mb-0">CSIR - NIScPR</h1>
                        <p class="text-uppercase small fw-semibold text-muted mt-1" style="letter-spacing: 0.1em; font-size: 0.7rem;">
                            National Institute of Science Communication & Policy Research
                        </p>
                    </div>
                </div>

                <!-- Desktop Nav -->
                <nav class="d-none d-lg-flex align-items-center">
                    <!-- Home -->
                    <a href="#" class="nav-link-csir active">{{ ktLang('main_menu_home') }}</a>
                    
                    <!-- About Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_niscair') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-csir py-2">
                            <li><a class="dropdown-item dropdown-item-csir" href="http://127.0.0.1:5500/final/genesis.html#">{{ ktLang('main_sub_menu_genesis') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_mandate') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_vision') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_mission') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_citizen_charter') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Organogram') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_ourleadership') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Research_Council') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Management_Council') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Apex_Committee') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Head_of_Divisions') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_heading_annual_reports') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Achievements') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Site_Map') }}</a></li>

                        </ul>
                    </div>
                    
                    <!-- R&D Projects Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_research_education') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-csir py-2">
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Research_Projects') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_AcSIR') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Conferences_Seminars') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Human_Resource_Development') }}</a></li>
                        </ul>
                    </div>
                    
                    <!-- HRD Dropdown -->
                  <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_knowledge_products') }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-csir py-2">

                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Research_Journals') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir"> {{ ktLang('main_sub_menu_Abstracting_Journals') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Popular_Science_Magazines') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Newsletters_Digest') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir"> {{ ktLang('main_sub_menu_Rajbhasha') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Bharat_Ki_Sampada') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir"> {{ ktLang('main_sub_menu_Wealth_of_India') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Scholarly_Books_Monographs') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" >{{ ktLang('main_sub_menu_Popular_Science_Books') }} </a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Iconic_Publications') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" > {{ ktLang('main_sub_menu_Miscellaneous') }}</a></li>

                        </ul>
                    </div>
                    
                    <!-- Knowledge Products Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_public_outreach') }}                        
                        </a>
                        <ul class="dropdown-menu dropdown-menu-csir py-2" style="min-width: 300px;">
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Exhibitions') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Jigyasa') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Calendars') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Display_Boards') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Film_Shows') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Outreach_Events') }}</a></li>
                            
                        </ul>
                    </div>
                    
                    <!-- Outreach Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_international_affairs') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-csir py-2">
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_ISSN_International_Centre') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_International_Collaborations') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Events_Meetings') }}</a></li>
                        </ul>
                    </div>
                    
                    <!-- National Missions Dropdown -->
                   <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_resources') }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-csir py-2">
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_NOPR') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir"> {{ ktLang('main_sub_menu_NKRC') }} </a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_NSDL') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_NSL') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_NUCSSI') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_KNOWGATE') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Databases') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir">{{ ktLang('main_sub_menu_Electronic_Resources') }}</a></li>

                        </ul>
                    </div>
                    
                    <!-- Resources Dropdown -->
                    <div class="dropdown">
                        <a class="nav-link-csir dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ ktLang('main_menu_facilities') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-csir py-2">
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_National_Science_Library') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Raw_Materials_Herbarium_Museum') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_ISO_Certified_DIRF_Data_Centre') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Audio_Visual_Studio') }}</a></li>
                            <li><a class="dropdown-item dropdown-item-csir" href="#">{{ ktLang('main_sub_menu_Print_Production') }}</a></li>
                            
                        </ul>
                    </div>
                    <!-- Contact Button -->
                    <a href="#contact" class="btn btn-csir-blue rounded-pill ms-3 shadow-sm">
                        contact
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="btn d-lg-none csir-text-blue fs-4" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

 
