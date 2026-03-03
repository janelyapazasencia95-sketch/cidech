@extends('layouts.public')

@section('title', 'CIDECH Home: Impact Variant')

@section('content')
{{-- HERO --}}
<section id="inicio"
  class="relative overflow-hidden bg-background-dark
         pt-[calc(var(--nav-h)+3rem)] lg:pt-[calc(var(--nav-h)+6rem)]
         pb-22
         min-h-[calc(100svh-var(--nav-h)-40px)] lg:min-h-[calc(100svh-var(--nav-h)-40px)]">

    <!-- IMAGEN DE FONDO -->
    <div class="absolute inset-0">
        <img src="{{ asset('img/portada.png') }}"
             class="w-full h-full object-cover"
             alt="Portada">
    </div>
    <!-- OVERLAY OSCURO (para que el texto se vea bien) -->
    <div class="absolute inset-0 bg-black/70"></div>
    <!-- CONTENIDO -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"></div>

  <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-primary/20 rounded-full blur-[120px] pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[500px] h-[500px] bg-blue-900/20 rounded-full blur-[100px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

      {{-- IZQUIERDA --}}
      <div class="lg:col-span-8">
        {{-- TITULAR RESPONSIVE (clamp) --}}
        <h1 class="font-display font-black tracking-tight leading-[0.95]">
          <span class="block text-white text-[clamp(2.2rem,4.6vw,4.0rem)]">
            CIDECH
          </span>

          <span class="block mt-2 text-white text-[clamp(2.6rem,5.4vw,4.8rem)]">
            #1 en
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-300 to-gray-500">
              resultados y
            </span>
          </span>

          <span class="block mt-2 text-primary text-[clamp(2.8rem,5.9vw,5.2rem)]">
            formación
          </span>
        </h1>

           <p class="mt-6 max-w-2xl text-[clamp(1.05rem,1.3vw,1.35rem)] text-white font-light border-l-4 border-primary pl-6 leading-relaxed">
            Mejores en resultados académicos y formación de valores.
            Transformamos estudiantes en líderes con impacto real en su futuro.
           </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-5">
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


    </div>
  </div>

  {{-- Indicador abajo (pegado al borde) --}}
  <a href="#nosotros"
     class="absolute bottom-1 left-1/2 -translate-x-1/2 inline-flex items-center gap-2 text-gray-400 hover:text-white transition-colors">
    <span class="text-xs font-bold uppercase tracking-widest">Desliza</span>
    <span class="material-symbols-outlined animate-bounce">keyboard_arrow_down</span>
  </a>

  {{-- Línea inferior pegada al borde del hero --}}
  <div class="absolute left-0 right-0 bottom-0 h-px bg-white/10"></div>
</section>

{{-- PROYECTOS --}}
<section class="py-24 lg:py-20 bg-background-dark border-b border-gray-800" id="proyectos">
    @php
        $fallback = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80';
        $img = function ($path, $fallback) {
            if (blank($path)) return $fallback;
            return \Illuminate\Support\Str::startsWith($path, ['http://','https://']) ? $path : asset($path);
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
            <div class="w-full text-center text-gray-400 py-12">Aún no hay proyectos publicados.</div>
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
<section class="py-24 lg:py-28 bg-surface-dark border-b border-gray-800" id="aliados">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <span class="text-primary font-bold uppercase tracking-widest mb-2 block">
                    Convenios
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white font-display">
                    Red de Convenios Institucionales
                </h2>
                <p class="text-gray-500 mt-4 max-w-2xl">
                    Unimos fuerzas con las instituciones más importantes del país.
                </p>
            </div>

            {{-- Flechas --}}
            <div class="hidden md:flex gap-2">
                <button id="alliesPrev"
                    class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                    type="button">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>

                <button id="alliesNext"
                    class="w-12 h-12 rounded-full border border-gray-700 flex items-center justify-center text-white hover:bg-primary hover:border-primary transition-all disabled:opacity-40 disabled:hover:bg-transparent disabled:hover:border-gray-700"
                    type="button">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        {{-- BOTONES --}}
        <div class="flex flex-wrap gap-4 mb-10">
            <button class="ally-tab px-6 py-3 rounded-full bg-primary text-white font-bold tracking-wide shadow-lg shadow-primary/30 transition-all"
                    data-category="municipalidades">
                MUNICIPALIDADES
            </button>

            <button class="ally-tab px-6 py-3 rounded-full border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all"
                    data-category="colegios">
                COLEGIOS
            </button>

            <button class="ally-tab px-6 py-3 rounded-full border border-gray-600 text-gray-300 font-medium hover:border-white hover:text-white transition-all"
                    data-category="institutos">
                INSTITUTOS
            </button>
        </div>

        {{-- CARRUSEL --}}
        <div id="alliesCarousel"
             class="flex overflow-x-auto hide-scrollbar gap-6 pb-8 snap-x snap-proximity scroll-smooth">
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {

  const carousel = document.getElementById('alliesCarousel');
  const prevBtn = document.getElementById('alliesPrev');
  const nextBtn = document.getElementById('alliesNext');
  const tabs = Array.from(document.querySelectorAll('.ally-tab'));

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

  function render(category) {
    const items = ALLIES[category] || [];

    carousel.innerHTML = items.map(item => `
      <div class="ally-card 
          min-w-[85vw] 
          sm:min-w-[420px] 
          md:min-w-[420px] 
          lg:min-w-[420px] 
          xl:min-w-[460px] 
          2xl:min-w-[520px] 
          h-[280px] 
          md:h-[320px] 
          xl:h-[340px] 
          snap-center">

        <div class="h-full bg-background-dark border border-gray-800 rounded-2xl 
                    flex items-center justify-center 
                    grayscale opacity-70 hover:grayscale-0 hover:opacity-100 
                    hover:border-primary transition-all duration-300 
                    overflow-hidden group">

            <img src="${item.src}" 
                 alt="${item.name}" 
                 loading="lazy"
                 class="w-full h-full object-contain p-10 
                        transition-transform duration-500 
                        group-hover:scale-105" />
        </div>
      </div>
    `).join('');

    updateNav();
  }

  function setActive(category) {
    tabs.forEach(btn => {
      const active = btn.dataset.category === category;

      btn.classList.toggle('bg-primary', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('shadow-lg', active);
      btn.classList.toggle('shadow-primary/30', active);

      btn.classList.toggle('border', !active);
      btn.classList.toggle('border-gray-600', !active);
      btn.classList.toggle('text-gray-300', !active);
    });
  }

  function getStep() {
    const first = carousel.querySelector('.ally-card');
    if (!first) return 0;
    const gap = parseFloat(getComputedStyle(carousel).gap || 0);
    return first.getBoundingClientRect().width + gap;
  }

  function updateNav() {
    const maxScroll = carousel.scrollWidth - carousel.clientWidth;
    prevBtn.disabled = carousel.scrollLeft <= 2;
    nextBtn.disabled = carousel.scrollLeft >= (maxScroll - 2);
  }

  prevBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: -getStep(), behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: getStep(), behavior: 'smooth' });
  });

  carousel.addEventListener('scroll', updateNav, { passive: true });
  window.addEventListener('resize', updateNav);

  tabs.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.dataset.category;
      setActive(category);
      render(category);
      carousel.scrollTo({ left: 0, behavior: 'smooth' });
    });
  });

  setActive('municipalidades');
  render('municipalidades');

});
</script>

{{-- ORGULLO ACADÉMICO (EXALUMNOS) --}}
<section class="py-24 lg:py-28 bg-black text-white" id="equipo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <span class="text-primary font-bold uppercase tracking-widest mb-2 block">Comunidad</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white font-display">Orgullo Académico</h2>
                <p class="text-gray-500 mt-4 max-w-2xl">
                    Exalumnos y estudiantes destacados que representan el impacto real de CIDECH: disciplina, resultados y propósito.
                </p>
            </div>

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

        <div id="alumniCarousel" class="flex overflow-x-auto hide-scrollbar gap-6 pb-6 snap-x snap-proximity scroll-smooth">
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
        const INTERVAL = 6000;

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

{{-- Hash scroll helper (opcional) --}}
<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (location.hash) {
      const el = document.querySelector(location.hash);
      if (el) setTimeout(() => el.scrollIntoView({ behavior: 'smooth', block: 'start' }), 60);
    }
  });
</script>
@endsection