@extends('layouts.public')

@section('title', 'CIDECH Home: Impact Variant')

@section('content')
    {{-- HERO --}}
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-background-dark">
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-blue-900/20 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8">
                    <div class="inline-flex items-center px-3 py-1 rounded bg-primary/10 border border-primary/30 mb-6">
                        <span class="w-2 h-2 rounded-full bg-primary mr-2 animate-pulse"></span>
                        <span class="text-xs font-bold text-primary uppercase tracking-widest">Impacto Social Real</span>
                    </div>

                    <h1
                        class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tight text-white mb-8 leading-[1.1] font-display">
                        CIDECH <br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-300 to-gray-500"> #
                            1 en resultados y </span> <br />
                        <span class="text-primary">formación </span>
                    </h1>

                    <p
                        class="mt-4 max-w-2xl text-xl md:text-2xl text-gray-400 mb-10 font-light border-l-4 border-primary pl-6">
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
                        <p
                            class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">
                            +50</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Proyectos Ejecutados
                        </p>
                    </div>
                    <div class="w-full h-px bg-gray-800 lg:hidden"></div>
                    <div class="group">
                        <p
                            class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">
                            +30</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Aliados Estratégicos
                        </p>
                    </div>
                    <div class="w-full h-px bg-gray-800 lg:hidden"></div>
                    <div class="group">
                        <p
                            class="text-6xl md:text-7xl font-black text-white group-hover:text-primary transition-colors duration-300">
                            100%</p>
                        <p class="text-sm uppercase tracking-widest text-gray-500 font-semibold mt-2">Cobertura Nacional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NOSOTROS --}}
    <section id="nosotros" class="py-24 bg-surface-dark relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-16 md:flex md:justify-between md:items-end">
                <div class="md:w-1/2">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-display">¿Qué es <span
                            class="text-primary">CIDECH</span>?</h2>
                    <p class="text-lg text-gray-400 leading-relaxed">
                        CIDECH es un centro especializado en preparación preuniversitaria de alto rendimiento.
                        Usa algoritmos propios para resolver problemas de exámenes de admisión en menos de 30 segundos.
                        Se enfoca en el ingreso a universidades nacionales y en obtener becas.
                    </p>
                </div>

                <div class="mt-8 md:mt-0">
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-300"><span
                                class="material-symbols-outlined text-primary mr-3">check_circle</span>Gestión de recursos
                            eficiente</li>
                        <li class="flex items-center text-gray-300"><span
                                class="material-symbols-outlined text-primary mr-3">check_circle</span>Programas educativos
                            de calidad</li>
                        <li class="flex items-center text-gray-300"><span
                                class="material-symbols-outlined text-primary mr-3">check_circle</span>Fortalecimiento
                            institucional</li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-primary">
                    <div class="h-14 w-14 rounded bg-primary/20 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-3xl">flag</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Nuestra Misión</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Preparar a estudiantes para ingresar a universidades y obtener becas mediante métodos de alto
                        rendimiento, desarrollando su máximo potencial.
                    </p>
                </div>

                <div
                    class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-blue-500">
                    <div class="h-14 w-14 rounded bg-blue-500/20 flex items-center justify-center mb-6 text-blue-500">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Nuestro Enfoque</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Usamos algoritmos propios y metodologías innovadoras para resolver problemas de exámenes de manera
                        rápida y efectiva.
                    </p>
                </div>

                <div
                    class="glass-card p-8 rounded-xl hover:bg-white/5 transition-all duration-300 border-t-4 border-t-green-500">
                    <div class="h-14 w-14 rounded bg-green-500/20 flex items-center justify-center mb-6 text-green-500">
                        <span class="material-symbols-outlined text-3xl">favorite</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 font-display">Impacto Social</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Facilitamos el acceso equitativo a la educación superior y promovemos el desarrollo académico y
                        personal de los jóvenes.
                    </p>
                </div>
            </div>
        </div>
    </section>

{{{-- PROYECTOS --}}
<section class="py-24 bg-background-dark border-y border-gray-800" id="proyectos">
    @php
        use Illuminate\Support\Str;

        $fallback = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80';

        // soporta URL (https://) y ruta local (img/...)
        $img = function ($path, $fallback) {
            if (blank($path)) return $fallback;
            return Str::startsWith($path, ['http://','https://']) ? $path : asset($path);
        };
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12 flex justify-between items-end">
        <div>
            <p class="text-primary font-bold uppercase tracking-widest mb-2">Nuestro Trabajo</p>
            <h2 class="text-4xl md:text-5xl font-bold text-white font-display">Proyectos en Acción</h2>
        </div>

        <div class="hidden md:flex gap-2">
            <button id="projectsPrev"
                class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                type="button" aria-label="Anterior">
                <span class="material-symbols-outlined">arrow_back</span>
            </button>

            <button id="projectsNext"
                class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                type="button" aria-label="Siguiente">
                <span class="material-symbols-outlined">arrow_forward</span>
            </button>
        </div>
    </div>

    {{-- Carrusel --}}
    <div id="projectsCarousel"
        class="flex overflow-x-auto hide-scrollbar gap-6 px-4 sm:px-6 lg:px-8 pb-8 snap-x snap-proximity scroll-smooth">

        @forelse(($projects ?? collect())->take(5) as $p)
            <a href="{{ route('proyectos.show', $p) }}"
               class="project-card min-w-[85vw] md:min-w-[600px] h-[500px] relative rounded-2xl overflow-hidden group snap-center cursor-pointer block">

                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                     src="{{ $img($p->imagen ?? null, $fallback) }}"
                     alt="{{ $p->titulo }}" />

                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>

                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">
                        {{ $p->estado ?? 'En curso' }}
                    </span>

                    <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">
                        {{ $p->titulo }}
                    </h3>

                    <p class="text-gray-300 mb-6 line-clamp-2">
                        {{ \Illuminate\Support\Str::limit($p->descripcion ?? '', 140) }}
                    </p>

                    <div class="flex items-center text-sm font-medium text-white/80">
                        <span class="material-symbols-outlined mr-2 text-primary">location_on</span>
                        {{ $p->ubicacion ?? 'Perú' }}
                    </div>
                </div>
            </a>
        @empty
            <div class="w-full text-center text-gray-400 py-12">
                Aún no hay proyectos publicados.
            </div>
        @endforelse
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.getElementById('projectsCarousel');
        const prevBtn = document.getElementById('projectsPrev');
        const nextBtn = document.getElementById('projectsNext');
        if (!carousel || !prevBtn || !nextBtn) return;

        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const getStep = () => {
          const first = carousel.querySelector('.project-card');
          if (!first) return 0;
          const styles = getComputedStyle(carousel);
          const gap = parseFloat(styles.columnGap || styles.gap || '0') || 0;
          return first.getBoundingClientRect().width + gap;
        };

        const updateNav = () => {
          const maxScroll = carousel.scrollWidth - carousel.clientWidth;
          prevBtn.disabled = carousel.scrollLeft <= 2;
          nextBtn.disabled = carousel.scrollLeft >= (maxScroll - 2);
        };

        let timer = null;
        let paused = false;
        let pauseTimer = null;

        // más alto = más lento
        const INTERVAL = 5500;

        function pauseAuto(ms = 3500) {
          paused = true;
          clearTimeout(pauseTimer);
          pauseTimer = setTimeout(() => (paused = false), ms);
        }

        prevBtn.addEventListener('click', () => {
          pauseAuto();
          carousel.scrollBy({ left: -getStep(), behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
          pauseAuto();
          carousel.scrollBy({ left: getStep(), behavior: 'smooth' });
        });

        function startAuto() {
          if (prefersReduced) return;
          if (timer) return;

          timer = setInterval(() => {
            if (paused || document.hidden) return;

            const step = getStep();
            if (!step) return;

            const maxScroll = carousel.scrollWidth - carousel.clientWidth;

            if (carousel.scrollLeft >= maxScroll - 2) {
              carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
              carousel.scrollBy({ left: step, behavior: 'smooth' });
            }
          }, INTERVAL);
        }

        carousel.addEventListener('mouseenter', () => (paused = true));
        carousel.addEventListener('mouseleave', () => (paused = false));
        carousel.addEventListener('wheel', () => pauseAuto(4000), { passive: true });
        carousel.addEventListener('touchstart', () => pauseAuto(5000), { passive: true });

        carousel.addEventListener('scroll', updateNav, { passive: true });
        window.addEventListener('resize', updateNav);

        updateNav();
        startAuto();
      });
    </script>
</section>

    {{-- ALIADOS --}}
    <section class="py-24 bg-surface-dark" id="aliados">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 font-display">Red de Convenios Institucionales</h2>
            <p class="max-w-2xl mx-auto text-xl text-gray-400 mb-12">
                Unimos fuerzas con las instituciones más importantes del país.
            </p>

            {{-- Tabs --}}
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button
                    class="ally-tab px-8 py-3 rounded-full bg-primary text-white font-bold tracking-wide shadow-lg shadow-primary/30 transform hover:scale-105 transition-all"
                    type="button" data-category="municipalidades" aria-pressed="true">
                    MUNICIPALIDADES
                </button>

                <button
                    class="ally-tab px-8 py-3 rounded-full bg-transparent border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all"
                    type="button" data-category="colegios" aria-pressed="false">
                    COLEGIOS
                </button>

                <button
                    class="ally-tab px-8 py-3 rounded-full bg-transparent border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all"
                    type="button" data-category="institutos" aria-pressed="false">
                    INSTITUTOS
                </button>
            </div>

            {{-- Grid (se llena por JS) --}}
            <div id="alliesGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6"></div>


        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const grid = document.getElementById('alliesGrid');
                const tabs = Array.from(document.querySelectorAll('.ally-tab'));

                // ✅ Cambia estas rutas por tus fotos/logos reales
                // Recomendado: public/img/aliados/{municipalidades|colegios|institutos}/xxx.png
                const ALLIES = {
                    municipalidades: [
                        { name: 'MUNI 1', src: "{{ asset('img/aliados/municipalidades/muni-01.png') }}" },
                        { name: 'MUNI 2', src: "{{ asset('img/aliados/municipalidades/muni-02.png') }}" },
                        { name: 'MUNI 3', src: "{{ asset('img/aliados/municipalidades/muni-03.png') }}" },
                        { name: 'MUNI 4', src: "{{ asset('img/aliados/municipalidades/muni-04.png') }}" },
                        { name: 'MUNI 5', src: "{{ asset('img/aliados/municipalidades/muni-05.png') }}" },
                        { name: 'MUNI 6', src: "{{ asset('img/aliados/municipalidades/muni-06.png') }}" },
                    ],
                    colegios: [
                        { name: 'COLEGIO 1', src: "{{ asset('img/aliados/colegios/col-01.png') }}" },
                        { name: 'COLEGIO 2', src: "{{ asset('img/aliados/colegios/col-02.png') }}" },
                        { name: 'COLEGIO 3', src: "{{ asset('img/aliados/colegios/col-03.png') }}" },
                        { name: 'COLEGIO 4', src: "{{ asset('img/aliados/colegios/col-04.png') }}" },
                        { name: 'COLEGIO 5', src: "{{ asset('img/aliados/colegios/col-05.png') }}" },
                        { name: 'COLEGIO 6', src: "{{ asset('img/aliados/colegios/col-06.png') }}" },
                    ],
                    institutos: [
                        { name: 'INSTITUTO 1', src: "{{ asset('img/aliados/institutos/ins-01.png') }}" },
                        { name: 'INSTITUTO 2', src: "{{ asset('img/aliados/institutos/ins-02.png') }}" },
                        { name: 'INSTITUTO 3', src: "{{ asset('img/aliados/institutos/ins-03.png') }}" },
                        { name: 'INSTITUTO 4', src: "{{ asset('img/aliados/institutos/ins-04.png') }}" },
                        { name: 'INSTITUTO 5', src: "{{ asset('img/aliados/institutos/ins-05.png') }}" },
                        { name: 'INSTITUTO 6', src: "{{ asset('img/aliados/institutos/ins-06.png') }}" },
                    ],
                };

                function setActiveTab(category) {
                    tabs.forEach(btn => {
                        const isActive = btn.dataset.category === category;
                        btn.setAttribute('aria-pressed', String(isActive));

                        // estilos activo/inactivo
                        if (isActive) {
                            btn.classList.add('bg-primary', 'text-white', 'font-bold', 'shadow-lg', 'shadow-primary/30');
                            btn.classList.remove('bg-transparent', 'border', 'border-gray-600', 'text-gray-300', 'font-medium');
                        } else {
                            btn.classList.remove('bg-primary', 'text-white', 'font-bold', 'shadow-lg', 'shadow-primary/30');
                            btn.classList.add('bg-transparent', 'border', 'border-gray-600', 'text-gray-300', 'font-medium');
                        }
                    });
                }

                function render(category) {
                    const items = ALLIES[category] || [];

                    // mini fade
                    grid.classList.add('opacity-0');
                    grid.classList.add('transition-opacity', 'duration-200');

                    setTimeout(() => {
                        grid.innerHTML = items.map(item => `
                            <div class="ally-card h-32 bg-background-dark border border-gray-800 rounded-lg flex items-center justify-center grayscale opacity-60 hover:grayscale-0 hover:opacity-100 hover:border-primary transition-all duration-300 group overflow-hidden">
                                <img
                                    src="${item.src}"
                                    alt="${item.name}"
                                    loading="lazy"
                                    class="w-full h-full object-contain p-4"
                                    onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');"
                                />
                                <span class="hidden text-sm font-bold text-gray-500 group-hover:text-primary px-2">${item.name}</span>
                            </div>
                        `).join('');

                        grid.classList.remove('opacity-0');
                    }, 120);
                }

                // Click tabs
                tabs.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const category = btn.dataset.category;
                        setActiveTab(category);
                        render(category);
                    });
                });

                // Default
                setActiveTab('municipalidades');
                render('municipalidades');
            });
        </script>
    </section>

    {{-- ORGULLO ACADÉMICO (EXALUMNOS) --}}
<section class="py-24 bg-black text-white" id="equipo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <span class="text-primary font-bold uppercase tracking-widest mb-2 block">Comunidad</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white font-display">Orgullo Académico</h2>
                <p class="text-gray-500 mt-4 max-w-2xl">
                    Exalumnos y estudiantes destacados que representan el impacto real de CIDECH: disciplina, resultados y propósito.
                </p>
            </div>

            {{-- Controles carrusel --}}
            <div class="hidden md:flex gap-2">
                <button id="alumniPrev"
                        class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                        type="button" aria-label="Anterior">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>

                <button id="alumniNext"
                        class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                        type="button" aria-label="Siguiente">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        {{-- Carrusel --}}
        <div id="alumniCarousel"
             class="flex overflow-x-auto hide-scrollbar gap-6 pb-6 snap-x snap-proximity scroll-smooth">

            {{-- 1 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img src="{{ asset('img/estudiantes/milton.png') }}"
                             alt="Milton Ccota Mamani"
                             class="w-full h-full object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-white/10 border border-white/15 text-xs font-black uppercase tracking-widest text-white">
                                Exalumno destacado
                            </span>
                        </div>

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
                        🎓🏛️ Ingresante a la UNI – IEN 2026
                    </p>
                </div>
            </div>

            {{-- 2 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img src="{{ asset('img/estudiantes/alex.png') }}"
                             alt="Alex Gallegos Humire"
                             class="w-full h-full object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-primary text-xs font-black uppercase tracking-widest text-white shadow-lg shadow-primary/40">
                                1er puesto
                            </span>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Alex Gallegos Humire
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Ingeniería Química
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        👑🎓 1er Puesto (IEN-2026) – UNI
                    </p>
                </div>
            </div>

            {{-- 3 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Valeria Quispe
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Medicina Humana
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        🩺🏅 Ingresante – UNMSM 2025
                    </p>
                </div>
            </div>

            {{-- 4 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Diego Ramos
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Ingeniería de Sistemas
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        💻🎓 Ingresante – UNSA 2025
                    </p>
                </div>
            </div>

            {{-- 5 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Renzo Huamán
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Arquitectura
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        🏛️📐 Ingresante – UNI 2024
                    </p>
                </div>
            </div>

            {{-- 6 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Camila Torres
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Derecho
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        ⚖️🎓 Ingresante – UNSAAC 2025
                    </p>
                </div>
            </div>

            {{-- 7 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1520975682031-a6ad0f66f03d?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        José Medina
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Economía
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        📈🏅 Beca – Ingreso 2025
                    </p>
                </div>
            </div>

            {{-- 8 --}}
            <div class="alumni-card min-w-[85vw] sm:min-w-[420px] md:min-w-[420px] lg:min-w-[420px] snap-center">
                <div class="group relative">
                    <div class="aspect-[3/4] w-full rounded-2xl bg-gray-900 mb-5 relative overflow-hidden border border-gray-800">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors font-display">
                        Andrea Salas
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Psicología
                    </p>
                    <p class="text-sm text-gray-500 leading-relaxed border-l-2 border-gray-800 pl-3 group-hover:border-primary transition-colors">
                        🧠🎓 Ingresante – UNSA 2024
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{-- Script carrusel: movimiento lento + botones (igual estilo Proyectos) --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const carousel = document.getElementById('alumniCarousel');
            const prevBtn = document.getElementById('alumniPrev');
            const nextBtn = document.getElementById('alumniNext');
            if (!carousel || !prevBtn || !nextBtn) return;

            const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            const getStep = () => {
                const first = carousel.querySelector('.alumni-card');
                if (!first) return 0;

                const styles = getComputedStyle(carousel);
                const gap = parseFloat(styles.columnGap || styles.gap || '0') || 0;

                return first.getBoundingClientRect().width + gap;
            };

            const updateNav = () => {
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                prevBtn.disabled = carousel.scrollLeft <= 2;
                nextBtn.disabled = carousel.scrollLeft >= (maxScroll - 2);
            };

            let timer = null;
            let paused = false;
            let pauseTimer = null;

            const INTERVAL = 6000; // más alto = más lento

            function pauseAuto(ms = 3500) {
                paused = true;
                clearTimeout(pauseTimer);
                pauseTimer = setTimeout(() => (paused = false), ms);
            }

            prevBtn.addEventListener('click', () => {
                pauseAuto();
                carousel.scrollBy({ left: -getStep(), behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', () => {
                pauseAuto();
                carousel.scrollBy({ left: getStep(), behavior: 'smooth' });
            });

            function startAuto() {
                if (prefersReduced) return;
                if (timer) return;

                timer = setInterval(() => {
                    if (paused || document.hidden) return;

                    const step = getStep();
                    if (!step) return;

                    const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                    if (carousel.scrollLeft >= maxScroll - 2) {
                        carousel.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: step, behavior: 'smooth' });
                    }
                }, INTERVAL);
            }

            carousel.addEventListener('mouseenter', () => (paused = true));
            carousel.addEventListener('mouseleave', () => (paused = false));
            carousel.addEventListener('wheel', () => pauseAuto(4000), { passive: true });
            carousel.addEventListener('touchstart', () => pauseAuto(5000), { passive: true });

            carousel.addEventListener('scroll', updateNav, { passive: true });
            window.addEventListener('resize', updateNav);

            updateNav();
            startAuto();
        });
    </script>
</section>
@endsection