@extends('layouts.public')

@section('title', 'CIDECH Home: Impact Variant')

@section('content')
    {{-- HERO --}}
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-background-dark">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-blue-900/20 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8">
                    <div class="inline-flex items-center px-3 py-1 rounded bg-primary/10 border border-primary/30 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary mr-2 animate-pulse"></span>
                        <span class="text-xs font-bold text-primary uppercase tracking-widest">Impacto Social Real</span>
                    </div>

                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight text-white mb-8 leading-[1.1] font-display">
                        CIDECH <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-300 to-gray-500"> # 1 en resultados y </span> <br/>
                        <span class="text-primary">formación </span>
                    </h1>

                    <p class="mt-4 max-w-2xl text-xl md:text-2xl text-gray-400 mb-10 font-light border-l-4 border-primary pl-6">
                        Mejores en resultados académicos y formación de valores.
                        Transformamos estudiantes en líderes con impacto real en su futuro.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-5 mb-16">
                        <a class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded bg-primary text-white hover:bg-primary-hover shadow-[0_0_20px_rgba(239,35,60,0.4)] hover:shadow-[0_0_30px_rgba(239,35,60,0.6)] transition-all duration-300 transform hover:-translate-y-1"
                           href="#proyectos">
                            VER PROYECTOS
                            <span class="material-symbols-outlined ml-2 text-xl">arrow_forward</span>
                        </a>

                        <a class="inline-flex items-center justify-center px-8 py-4 border border-gray-600 text-base font-bold rounded text-white hover:bg-white hover:text-black transition-all duration-300"
                           href="#aliados">
                            SER ALIADO
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-4 flex flex-col gap-8 lg:border-l lg:border-gray-800 lg:pl-12">
                    <div class="group">
                        <p class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">+50</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Proyectos Ejecutados</p>
                    </div>
                    <div class="w-full h-px bg-gray-800 lg:hidden"></div>
                    <div class="group">
                        <p class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">+30</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Aliados Estratégicos</p>
                    </div>
                    <div class="w-full h-px bg-gray-800 lg:hidden"></div>
                    <div class="group">
                        <p class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">100%</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Cobertura Nacional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NOSOTROS --}}
    <section id="nosotros" class="py-24 bg-surface-dark relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16 md:flex md:justify-between md:items-end">
                <div class="md:w-1/2">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-display">¿Qué es <span class="text-primary">CIDECH</span>?</h2>
                    <p class="text-lg text-gray-400 leading-relaxed">
                        CIDECH es un centro especializado en preparación preuniversitaria de alto rendimiento.
                        Usa algoritmos propios para resolver problemas de exámenes de admisión en menos de 30 segundos.
                        Se enfoca en el ingreso a universidades nacionales y en obtener becas.
                    </p>
                </div>

                <div class="mt-8 md:mt-0">
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-300"><span class="material-symbols-outlined text-primary mr-3">check_circle</span>Gestión de recursos eficiente</li>
                        <li class="flex items-center text-gray-300"><span class="material-symbols-outlined text-primary mr-3">check_circle</span>Programas educativos de calidad</li>
                        <li class="flex items-center text-gray-300"><span class="material-symbols-outlined text-primary mr-3">check_circle</span>Fortalecimiento institucional</li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-primary">
                    <div class="h-14 w-14 rounded bg-primary/20 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">flag</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Nuestra Misión</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Preparar a estudiantes para ingresar a universidades y obtener becas mediante métodos de alto rendimiento, desarrollando su máximo potencial.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-blue-500">
                    <div class="h-14 w-14 rounded bg-blue-500/20 flex items-center justify-center mb-6 text-blue-500">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Nuestro Enfoque</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Usamos algoritmos propios y metodologías innovadoras para resolver problemas de exámenes de manera rápida y efectiva.
                    </p>
                </div>

                <div class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-green-500">
                    <div class="h-14 w-14 rounded bg-green-500/20 flex items-center justify-center mb-6 text-green-500">
                        <span class="material-symbols-outlined text-3xl">favorite</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Impacto Social</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Facilitamos el acceso equitativo a la educación superior y promovemos el desarrollo académico y personal de los jóvenes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- PROYECTOS --}}
    <section class="py-24 bg-background-dark border-y border-gray-800" id="proyectos">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12 flex justify-between items-end">
            <div>
                <p class="text-primary font-bold uppercase tracking-widest mb-2">Nuestro Trabajo</p>
                <h2 class="text-4xl md:text-5xl font-bold text-white font-display">Proyectos en Acción</h2>
            </div>

            <div class="hidden md:flex gap-2">
                <button class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all" type="button">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
                <button class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all" type="button">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        <div class="flex overflow-x-auto hide-scrollbar gap-6 px-4 sm:px-6 lg:px-8 pb-8 snap-x">
            {{-- Card 1 --}}
            <div class="min-w-[85vw] md:min-w-[600px] h-[500px] relative rounded-2xl overflow-hidden group snap-center cursor-pointer">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuB67kS0mUI5q_DCjiHsBR1HSc4QkjayLssrm2pU8J71JuYihtgXMsJV3vlLhOQjOfDfNxCI6zBfaNvQtImbiySrzjjkEUZiiR5GSVyO1VB1tfuqfvgq8PgksiGm4AfTlG0r2PABOlpOe9p-Lcl5hT5pXQ4WZfPfagWC50PooplaXqlC3FL7z8b-NwmH_miYjrtdUIAiNkK3p-8TVdoipdiIzxx8Xt8C4dG1wBapFhZ439PIUw-q6lOoAKE3Vw9ooitcqS9w8tjAmH9b"
                     alt="Reforestación"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span class="inline-block px-3 py-1 bg-green-600 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">En curso</span>
                    <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">Convenio UNI – CIDECH</h3>
                    <p class="text-gray-300 mb-6 line-clamp-2">Gracias a nuestro convenio con la Universidad Nacional de Ingeniería (UNI), en CIDECH nuestros estudiantes pueden rendir el Examen Descentralizado de la UNI directamente en sedes autorizadas.</p>
                    <div class="flex items-center text-sm font-medium text-white/80">
                        <span class="material-symbols-outlined mr-2 text-primary">location_on</span> Arequipa - Tacna
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="min-w-[85vw] md:min-w-[600px] h-[500px] relative rounded-2xl overflow-hidden group snap-center cursor-pointer">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     src="img/proyectos/promube.png"
                     alt="Agua"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span class="inline-block px-3 py-1 bg-gray-600 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">En curso</span>
                    <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">PROMUBE</h3>
                    <p class="text-gray-300 mb-6 line-clamp-2">En CIDECH, PROMUBE está integrado como parte de nuestros proyectos educativos y de becas, enfocado en brindar oportunidades reales a estudiantes con talento, ofreciendo acceso a becas municipales</p>
                    <div class="flex items-center text-sm font-medium text-white/80">
                        <span class="material-symbols-outlined mr-2 text-primary">location_on</span>Arequipa - Tacna - Lima
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="min-w-[85vw] md:min-w-[600px] h-[500px] relative rounded-2xl overflow-hidden group snap-center cursor-pointer">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ4vM7hU3vbCJ0lmlBgr-fAETpi5lwlLLLZiGYwHKs6SdGXiu2HAlicK6VmKv1u50A0TqiiChKF8xElFNdAa2hd0qLXXObvzYrzSph18WbUKAUcNKS90EdpaPl3RvH6Q9NQaCUZ6eEdaWBGBR1Fk6ajp0HY3vsBuhpwLq9u1DnsALOU6OVQRyMAc3Nevd5xdjKAmf0x72PohEY7h5sEvXOAmV3t-mptZSZ-wF8hJpt6ZO12sTUpjXWFZslv9SD0ZsUl2taN49Z2PsQ"
                     alt="Educación"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span class="inline-block px-3 py-1 bg-yellow-600 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">En curso</span>
                    <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">Apoyo Escolar Digital</h3>
                    <p class="text-gray-300 mb-6 line-clamp-2">Programa de voluntariado para reforzamiento académico y entrega de tablets en colegios nacionales de zonas periféricas.</p>
                    <div class="flex items-center text-sm font-medium text-white/80">
                        <span class="material-symbols-outlined mr-2 text-primary">location_on</span> Arequipa
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="min-w-[85vw] md:min-w-[600px] h-[500px] relative rounded-2xl overflow-hidden group snap-center cursor-pointer">
                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuDl-C48kT16V2MNabzhxuhohmq63LjUoBwR9lTROqjg7XCaVJNtCC7-X4cPWtPsORi9ocF0fD2dpVy-rOvF64zZZzG7vh8ZdNem5W0hcAUfcHVnxVz_tJaYxTk8J7hABGpu4FEG74E65iUYkronhHmVeMIdlaP0qQvrjVlwj7af8NKpLSc7YF1kUQf3FO_xRryLUs7mv18ijuXfuFx2zLRxnkIQxEeoKNUaacY2-h_MLiuaDG8zdI7_1PQK-CYfctmajAGxXHjc3C0S"
                     alt="Emprendimiento"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span class="inline-block px-3 py-1 bg-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">En curso</span>
                    <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">Emprende Joven</h3>
                    <p class="text-gray-300 mb-6 line-clamp-2">Incubadora de negocios locales para jóvenes emprendedores universitarios, brindando capital semilla y mentoría.</p>
                    <div class="flex items-center text-sm font-medium text-white/80">
                        <span class="material-symbols-outlined mr-2 text-primary">location_on</span> Trujillo
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ALIADOS --}}
    <section class="py-24 bg-surface-dark" id="aliados">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 font-display">Red de Convenios Institucionales</h2>
            <p class="max-w-2xl mx-auto text-xl text-gray-400 mb-12">
                Unimos fuerzas con las instituciones más importantes del país.
            </p>

            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button class="px-8 py-3 rounded-full bg-primary text-white font-bold tracking-wide shadow-lg shadow-primary/30 transform hover:scale-105 transition-all" type="button">MUNICIPALIDADES</button>
                <button class="px-8 py-3 rounded-full bg-transparent border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all" type="button">COLEGIOS</button>
                <button class="px-8 py-3 rounded-full bg-transparent border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all" type="button">INSTITUTOS</button>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-primary transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-primary">MUNI 1</span>
                </div>
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-blue-500 transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-blue-500">MUNI 2</span>
                </div>
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-green-500 transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-green-500">MUNI 3</span>
                </div>
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-purple-500 transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-purple-500">MUNI 4</span>
                </div>
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-yellow-500 transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-yellow-500">MUNI 5</span>
                </div>
                <div class="h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-red-500 transition-all duration-300 group">
                    <span class="text-sm font-bold text-gray-500 group-hover:text-red-500">MUNI 6</span>
                </div>
            </div>

            <div class="mt-12">
                <a class="inline-flex items-center text-lg text-primary hover:text-white font-bold uppercase tracking-wider transition-colors border-b-2 border-primary pb-1 hover:border-white" href="#contacto">
                    Quiero firmar un convenio
                    <span class="material-symbols-outlined ml-2">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    {{-- EQUIPO --}}
    <section class="py-24 bg-black text-white" id="equipo">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <span class="text-primary font-bold uppercase tracking-widest mb-2 block">Liderazgo</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-white font-display">Orgullo Académico</h2>
                </div>
                <p class="max-w-md text-gray-500 mt-4 md:mt-0 text-right">Expertos comprometidos con la excelencia y el impacto social medible.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">


{{-- 1 --}}
<div class="group relative">
    <div class="aspect-[3/4] w-full rounded bg-gray-900 mb-5 relative overflow-hidden">
        <img src="{{ asset('img/estudiantes/milton.png') }}" 
             alt="Milton Ccota Mamani"
             class="w-full h-full object-cover"/>
             
        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        <div class="absolute bottom-0 left-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
            <a class="text-white hover:text-black bg-black hover:bg-white p-2 rounded-full inline-flex transition-colors" href="#">
                <span class="material-symbols-outlined text-sm">link</span>
            </a>
        </div>
    </div>
    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
        Milton Ccota Mamani
    </h3>
    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
        Ingeniería Civil
    </p>
    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
        🎓🏛️ Ingresante a la Universidad Nacional de Ingeniería – IEN 2026
    </p>
</div>


{{-- 2 --}}
<div class="group relative">
    <div class="aspect-[3/4] w-full rounded bg-gray-900 mb-5 relative overflow-hidden">
        
        <img src="{{ asset('img/estudiantes/alex.png') }}"
             alt="Alex Gallegos Humire"
             class="w-full h-full object-cover"/>

        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>      
    </div>
    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
        Alex Gallegos Humire
    </h3>
    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
        Ingeniería Química
    </p>
    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
        👑🎓 1er Puesto (IEN-2026) – Universidad Nacional de Ingeniería
    </p>
</div>


                {{-- 3 --}}
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded bg-gray-900 mb-5 relative overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDRc7CNc-EwPdugbfm5feXgknbLSmiqE-TuiO1allOM0i2lIPvbnLxihcmUIVx6xMUaxCS_Ff0zNYnXU7JMO44Ty7c8ogj4su_n-z1agG4hoam12KtYXSwjfPyb70J8s22fTZQxIJOjVskCeL7OvsgRZDPeIc4huFyHu0uVpWSKJfnsUgzyLXss_jMo7pjFts5PAs2tTpQC7ZnSO5sY3YHhUQs1WUmzQJvyq9Jg-Bg0DdpEhDOYAuGd0oZxHhV-IYHpCyxjJD_RJXh"
                             alt="Dr. Marcus Thorne"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">Dr. Marcus Thorne</h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Research Director</p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        Arquitecto principal del marco de impacto global de CIDECH.
                    </p>
                </div>

                {{-- 4 --}}
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded bg-gray-900 mb-5 relative overflow-hidden">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuA84uvQVLVkBPEIfxOrzX3BaCvrG1CMEs9yCcZzROLgGtK4nTsdZkGztioS9DdqmCi88LfoxjYFGOjOpUuHo8ssTISw9hWCENSMcdqXP36skHXjRkGz3VMIX2QnzaPvOlzvxMJbPIY_0WXDErwgq7ETkSjERin05bY3DFo6zS5XGyiaPN3uNcuPCoiArVTt_lo5HNIr67yVmyqP9Wklqk5enZjgKr7CfA2I3pjfEJbcXTdVGkjZI4n2G6oRWaBXwa_IC2M9zr5sdf5t"
                             alt="Ms. Sarah Chen"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">Ms. Sarah Chen</h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Communications Officer</p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        Gestiona relaciones internacionales y el compromiso de los stakeholders.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
