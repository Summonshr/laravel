<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suman Shrestha | Full Stack Developer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #0f172a 0%, #1e293b 100%);
        }

        .accent-underline {
            position: relative;
        }

        .accent-underline::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 50px;
            height: 4px;
            background-color: #3b82f6;
            border-radius: 2px;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .skill-pill {
            transition: all 0.2s ease;
        }

        .skill-pill:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body x-data="{ darkMode: true, isMenuOpen: false, activeSection: 'home' }" :class="{ 'bg-gray-100 text-gray-900': !darkMode, 'bg-gray-900 text-gray-100': darkMode }">

    <!-- Navbar -->
    <nav class="sticky top-0 z-50 w-full"
        :class="{ 'bg-white shadow-md': !darkMode, 'gradient-bg shadow-lg': darkMode }">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold flex items-center">
                    <span class="text-blue-600">S</span><span x-text="darkMode ? 'uman' : 'uman'"
                        :class="darkMode ? 'text-gray-100' : 'text-gray-900'">uman</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a @click="activeSection = 'home'" href="#home"
                        class="font-medium py-2 hover:text-blue-500 transition"
                        :class="activeSection === 'home' ? 'text-blue-500' : ''">Home</a>
                    <a @click="activeSection = 'about'" href="#about"
                        class="font-medium py-2 hover:text-blue-500 transition"
                        :class="activeSection === 'about' ? 'text-blue-500' : ''">About</a>
                    <a @click="activeSection = 'skills'" href="#skills"
                        class="font-medium py-2 hover:text-blue-500 transition"
                        :class="activeSection === 'skills' ? 'text-blue-500' : ''">Skills</a>
                    <a @click="activeSection = 'portfolio'" href="#portfolio"
                        class="font-medium py-2 hover:text-blue-500 transition"
                        :class="activeSection === 'portfolio' ? 'text-blue-500' : ''">Portfolio</a>
                    <a @click="activeSection = 'contact'" href="#contact"
                        class="font-medium py-2 hover:text-blue-500 transition"
                        :class="activeSection === 'contact' ? 'text-blue-500' : ''">Contact</a>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Dark mode toggle -->
                    <button @click="darkMode = !darkMode" class="p-2 rounded-full"
                        :class="darkMode ? 'bg-gray-800' : 'bg-gray-200'">
                        <template x-if="darkMode">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </template>
                        <template x-if="!darkMode">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                        </template>
                    </button>

                    <!-- Mobile menu button -->
                    <button @click="isMenuOpen = !isMenuOpen" class="md:hidden focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!isMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path x-show="isMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="isMenuOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="md:hidden pt-4 pb-2">
                <div class="flex flex-col space-y-3">
                    <a @click="activeSection = 'home'; isMenuOpen = false" href="#home"
                        class="py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
                        :class="activeSection === 'home' ? 'bg-blue-500 text-white' : ''">Home</a>
                    <a @click="activeSection = 'about'; isMenuOpen = false" href="#about"
                        class="py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
                        :class="activeSection === 'about' ? 'bg-blue-500 text-white' : ''">About</a>
                    <a @click="activeSection = 'skills'; isMenuOpen = false" href="#skills"
                        class="py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
                        :class="activeSection === 'skills' ? 'bg-blue-500 text-white' : ''">Skills</a>
                    <a @click="activeSection = 'portfolio'; isMenuOpen = false" href="#portfolio"
                        class="py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
                        :class="activeSection === 'portfolio' ? 'bg-blue-500 text-white' : ''">Portfolio</a>
                    <a @click="activeSection = 'contact'; isMenuOpen = false" href="#contact"
                        class="py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition"
                        :class="activeSection === 'contact' ? 'bg-blue-500 text-white' : ''">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center relative overflow-hidden"
        :class="{ 'bg-gray-50': !darkMode, 'gradient-bg': darkMode }">
        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-blue-400 rounded-full opacity-10"></div>
        <div class="absolute bottom-0 left-10 -mb-10 w-40 h-40 bg-blue-500 rounded-full opacity-10"></div>
        <div class="absolute top-1/3 left-1/4 w-24 h-24 bg-blue-300 rounded-full opacity-10"></div>

        <div class="container mx-auto px-4 py-32 md:py-20 relative z-10">
            <div class="flex flex-col md:flex-row md:items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                        <span>Hi, I'm </span>
                        <span class="text-blue-600">Suman Shrestha</span>
                    </h1>
                    <p class="text-xl md:text-2xl font-semibold mb-4 accent-underline inline-block"
                        :class="{ 'text-gray-700': !darkMode, 'text-gray-300': darkMode }">
                        Full Stack Web Developer
                    </p>
                    <p class="text-lg mb-8 max-w-lg"
                        :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">
                        Versatile developer with 8 years of experience specializing in Laravel, React, and Vue. Creating
                        efficient, scalable, and user-friendly applications.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition shadow-lg hover:shadow-xl">
                            Get in Touch
                        </a>
                        <a href="#portfolio"
                            class="border-2 border-blue-600 font-medium py-3 px-6 rounded-lg transition hover:bg-blue-600 hover:text-white"
                            :class="{ 'text-blue-600 hover:text-white': !darkMode, 'text-blue-400 hover:text-white': darkMode }">
                            View My Work
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center md:justify-end">
                    <div class="relative">
                        <div
                            class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-blue-500 shadow-xl">
                            <img src="/image.jpg" alt="Suman Shrestha"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-5 -right-5 bg-white dark:bg-gray-800 p-3 rounded-lg shadow-lg">
                            <span class="font-bold text-blue-600">8+</span>
                            <span class="text-sm"
                                :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">Years
                                Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20" :class="{ 'bg-white': !darkMode, 'bg-gray-800': darkMode }">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                <span class="relative">
                    About Me
                    <span
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-blue-500 rounded"></span>
                </span>
            </h2>

            <div class="flex flex-col md:flex-row items-center md:items-start gap-10">
                <div class="md:w-1/3 text-center md:text-left">
                    <div class="p-6 rounded-lg shadow-lg card-hover mb-6"
                        :class="{ 'bg-gray-50': !darkMode, 'bg-gray-700': darkMode }">
                        <div class="text-4xl text-blue-500 mb-4">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Full Stack Developer</h3>
                        <p :class="{ 'text-gray-600': !darkMode, 'text-gray-300': darkMode }">
                            Expert in front-end and back-end technologies with a passion for creating seamless user
                            experiences.
                        </p>
                    </div>

                    <div class="p-6 rounded-lg shadow-lg card-hover"
                        :class="{ 'bg-gray-50': !darkMode, 'bg-gray-700': darkMode }">
                        <div class="text-4xl text-blue-500 mb-4">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Database Specialist</h3>
                        <p :class="{ 'text-gray-600': !darkMode, 'text-gray-300': darkMode }">
                            Proficient in database management and optimization for high-performance applications.
                        </p>
                    </div>
                </div>

                <div class="md:w-2/3">
                    <h3 class="text-2xl font-bold mb-4">Professional Journey</h3>
                    <p class="mb-4" :class="{ 'text-gray-700': !darkMode, 'text-gray-300': darkMode }">
                        With 8 years of experience in web development, I've built a diverse portfolio of projects from
                        corporate websites to complex web applications and core banking systems. My expertise lies in
                        creating efficient, scalable, and user-friendly applications using modern web technologies.
                    </p>
                    <p class="mb-6" :class="{ 'text-gray-700': !darkMode, 'text-gray-300': darkMode }">
                        I specialize in Laravel, React, and Vue, combining powerful back-end systems with intuitive user
                        interfaces. My approach focuses on writing clean, maintainable code and implementing best
                        practices for optimal performance.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                        <div class="flex items-center">
                            <div
                                class="mr-4 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Experience</h4>
                                <p :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">8+ Years</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="mr-4 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Projects</h4>
                                <p :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">50+ Completed</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="mr-4 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Technologies</h4>
                                <p :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">Laravel, React,
                                    Vue</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div
                                class="mr-4 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Location</h4>
                                <p :class="{ 'text-gray-600': !darkMode, 'text-gray-400': darkMode }">Dhapakhel,
                                    Lalitpur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20" :class="{ 'bg-gray-50': !darkMode, 'gradient-bg': darkMode }">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
                <span class="relative">
                    Skills & Expertise
                    <span
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-blue-500 rounded"></span>
                </span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Backend Development</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Laravel</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">PHP</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Node.js</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Express</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">REST
                            API</span>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">React</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Vue.js</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">JavaScript</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">HTML5/CSS3</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Tailwind
                            CSS</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Alpine.js</span>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Database Management</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">MySQL</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">PostgreSQL</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">MongoDB</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Redis</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">SQL
                            Optimization</span>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Dev Tools & CI/CD</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Git</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Docker</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">GitHub
                            Actions</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Jenkins</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">AWS</span>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile Development</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">React
                            Native</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Progressive
                            Web Apps</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Responsive
                            Design</span>
                    </div>
                </div>

                <div class="p-6 rounded-lg shadow-lg card-hover"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <div class="text-3xl text-blue-500 mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Security & Testing</h3>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Jest</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">PHPUnit</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Cypress</span>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full skill-pill">Web
                            Security</span>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="p-8 rounded-xl shadow-xl max-w-3xl"
                    :class="{ 'bg-white': !darkMode, 'bg-gray-700': darkMode }">
                    <h3 class="text-xl font-bold mb-4 text-center">Core Banking Systems Experience</h3>
                    <p class="mb-4 text-center" :class="{ 'text-gray-600': !darkMode, 'text-gray-300': darkMode }">
                        I have specialized expertise in building and integrating core banking systems that are secure,
                        efficient, and compliant with industry standards.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-2">
                                <i class="fas fa-hand-holding-usd text-blue-600 text-xl"></i>
                            </div>
                            <p class="font-medium">Payment Systems</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-2">
                                <i class="fas fa-user-shield text-blue-600 text-xl"></i>
                            </div>
                            <p class="font-medium">Auth Systems</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-2">
                                <i class="fas fa-chart-line text-blue-600 text-xl"></i>
                            </div>
                            <p class="font-medium">Financial Analytics</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-16 h-16 mx-auto rounded-full bg-blue-100 flex items-center justify-center mb-2">
                                <i class="fas fa-exchange-alt text-blue-600 text-xl"></i>
                            </div>
                            <p class="font-medium">API Integrations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
