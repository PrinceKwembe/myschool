<!-- MAIN NAV -->
<section class="bg-white/80 backdrop-blur-lg sticky top-0 z-30 shadow-sm">
    <div class="container">
        <div class="main-nav max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 md:py-4">
            <a href="index.php" class="flex items-center">
                <img src="logo.png" class="h-10 mr-3" alt="KAA Logo" />
                <span class="self-center text-sm md:text-2xl font-semibold whitespace-nowrap uppercase">King's
                    ambassadors academy</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium md:p-0 md:flex-row md:space-x-8">
                    <!-- HOME -->
                    <li>
                        <a href="index.php"
                            class="rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0 md:w-auto">Home</a>
                    </li>
                    <!-- About -->
                    <li>
                        <button data-dropdown-toggle="AboutdropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0 md:w-auto">
                            About
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="AboutdropdownNavbar" class="nav-dropdown-wrapper">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="mission_vision_values.php" class="block px-4 py-2 hover:bg-gray-100">Mission, Vision &
                                        Values</a>
                                </li>
                                <li>
                                    <a href="anthem.php" class="block px-4 py-2 hover:bg-gray-100">School Anthem</a>
                                </li>
                               
                            </ul>
                            <div class="py-1">
                                <a href="history.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">History</a>
                            </div>
                        </div>
                    </li>
                    <!-- Admission -->
                    <li>
                        <button data-dropdown-toggle="AdmissiondropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0 md:w-auto">
                            Admission
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="AdmissiondropdownNavbar" class="nav-dropdown-wrapper">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                    <a href="tuition-scholarships.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tuition and Scholarships</a>
                                </li>
                                <li>
                                    <a href="admission_process.php"
                                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Admission Process</a>
                                </li>
                                
                            </ul>
                            <div class="py-1">
                                <a href="application.php"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-alt">Apply
                                    Now!</a>
                            </div>
                        </div>
                    </li>
                    <!--Academics-->
                    <li>
                        <button data-dropdown-toggle="AcademicsdropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0 md:w-auto">
                            Academics
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="AcademicsdropdownNavbar" class="nav-dropdown-wrapper">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="creche.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Creche</a>
                                </li>
                                <li>
                                    <a href="nursery-primary.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Nursery & Primary</a>
                                </li>
                                <li>
                                    <a href="secondary.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Secondary</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Academic Berief</a>
                            </div>
                        </div>
                    </li>
                    <!--Gallary-->
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">Gallery</a>
                    </li>
                    <!--Contact-->
                    <li>
                        <a href="contact.php"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>