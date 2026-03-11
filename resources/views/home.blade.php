@extends('layouts.public')

@section('title', 'CIDECH Home: Impact Variant')

@push('styles')
<style>
  :root{
    --cidech-page-bg: #f6f7fb;
    --cidech-section-light: #ffffff;
    --cidech-section-soft: #eef1f5;
    --cidech-card: #ffffff;
    --cidech-ink: #0f172a;
    --cidech-muted: #64748b;
    --cidech-border: rgba(15, 23, 42, 0.08);
    --cidech-border-red: rgba(239, 35, 60, 0.16);

    --section-y: clamp(5rem, 7vw, 6.75rem);
    --section-gap: clamp(2.5rem, 4vw, 3.5rem);

    --nav-btn-size: 3rem;
    --cta-h: 3.5rem;
    --rail-gap: 1.5rem;

    --project-card-h: clamp(27rem, 52vw, 31.5rem);
    --logo-card-h: clamp(14rem, 28vw, 18rem);
  }

  body{
    background-color: var(--cidech-page-bg) !important;
    color: var(--cidech-ink) !important;
  }

  .hide-scrollbar::-webkit-scrollbar { display: none; }
  .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

  .cidech-light-surface{
    background:
      radial-gradient(circle at top right, rgba(239,35,60,.08), transparent 26%),
      radial-gradient(circle at bottom left, rgba(239,35,60,.06), transparent 22%),
      var(--cidech-section-light);
  }

  .cidech-light-surface-soft{
    background:
      radial-gradient(circle at top left, rgba(239,35,60,.07), transparent 20%),
      radial-gradient(circle at bottom right, rgba(239,35,60,.06), transparent 18%),
      var(--cidech-section-soft);
  }

  .cidech-divider{
    background: linear-gradient(
      to right,
      transparent 0%,
      rgba(239,35,60,.16) 18%,
      rgba(239,35,60,.74) 50%,
      rgba(239,35,60,.16) 82%,
      transparent 100%
    );
    box-shadow:
      0 0 14px rgba(239,35,60,.18),
      0 0 28px rgba(239,35,60,.08);
  }

  .cidech-card{
    background: var(--cidech-card);
    border: 1px solid var(--cidech-border);
    box-shadow: 0 12px 35px rgba(15, 23, 42, 0.05);
  }

  .cidech-card-red{
    background: var(--cidech-card);
    border: 1px solid var(--cidech-border-red);
    box-shadow: 0 14px 36px rgba(239, 35, 60, 0.06);
  }

  .section-shell{
    padding-top: var(--section-y);
    padding-bottom: var(--section-y);
  }

  .section-header{
    margin-bottom: var(--section-gap);
  }

  .section-kicker{
    color: #EF233C;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .14em;
    font-size: .8rem;
    margin-bottom: .75rem;
    display: block;
  }

  .section-title{
    font-size: clamp(2.2rem, 4.6vw, 3.4rem);
    line-height: 1.02;
    font-weight: 800;
    color: #0f172a;
  }

  .section-copy{
    color: #64748b;
    margin-top: 1rem;
    max-width: 42rem;
    font-size: 1.05rem;
    line-height: 1.75;
  }

  .carousel-rail{
    gap: var(--rail-gap);
    padding-bottom: 1.75rem;
    scroll-padding-inline: 1rem;
  }

  @media (min-width: 640px){
    .carousel-rail{ scroll-padding-inline: 1.5rem; }
  }

  @media (min-width: 1024px){
    .carousel-rail{ scroll-padding-inline: 2rem; }
  }

  .carousel-nav-btn{
    width: var(--nav-btn-size);
    height: var(--nav-btn-size);
    border-radius: 999px;
    border: 1px solid rgb(226 232 240);
    background: rgba(255,255,255,.95);
    color: #1e293b;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all .25s ease;
    box-shadow: 0 10px 24px rgba(15,23,42,.05);
  }

  .carousel-nav-btn:hover{
    background: #EF233C;
    border-color: #EF233C;
    color: #fff;
    transform: translateY(-1px);
  }

  .carousel-nav-btn:disabled{
    opacity: .4;
    transform: none;
    background: rgba(255,255,255,.95);
    border-color: rgb(226 232 240);
    color: #1e293b;
  }

  .pill-tab{
    min-height: 3rem;
    padding: .75rem 1.3rem;
    border-radius: 999px;
    border: 1px solid rgb(203 213 225);
    background: rgba(255,255,255,.94);
    color: #475569;
    font-weight: 600;
    font-size: .9rem;
    transition: all .2s ease;
    box-shadow: 0 8px 22px rgba(15,23,42,.04);
  }

  .pill-tab:hover{
    border-color: rgba(239,35,60,.45);
    color: #EF233C;
  }

  .pill-tab.active{
    background: #EF233C;
    border-color: #EF233C;
    color: white;
    box-shadow: 0 12px 28px rgba(239,35,60,.18);
  }

  .project-card-shell{
    min-width: 88vw;
    height: var(--project-card-h);
  }

  @media (min-width: 640px){
    .project-card-shell{ min-width: 78vw; }
  }

  @media (min-width: 768px){
    .project-card-shell{ min-width: 34rem; }
  }

  @media (min-width: 1024px){
    .project-card-shell{ min-width: 38rem; }
  }

  .logo-card-shell{
    min-width: 80vw;
    height: var(--logo-card-h);
  }

  @media (min-width: 640px){
    .logo-card-shell{ min-width: 21rem; }
  }

  @media (min-width: 768px){
    .logo-card-shell{ min-width: 22.5rem; }
  }

  @media (min-width: 1280px){
    .logo-card-shell{ min-width: 25rem; }
  }

  .alumni-card-shell{
    min-width: 80vw;
  }

  @media (min-width: 640px){
    .alumni-card-shell{ min-width: 20rem; }
  }

  @media (min-width: 768px){
    .alumni-card-shell{ min-width: 22rem; }
  }

  @media (min-width: 1280px){
    .alumni-card-shell{ min-width: 24rem; }
  }
</style>
@endpush

@section('content')
{{-- HERO --}}
<section id="inicio"
  class="relative overflow-hidden
         pt-[calc(var(--nav-h)+1.5rem)] sm:pt-[calc(var(--nav-h)+2rem)] lg:pt-[calc(var(--nav-h)+0.05rem)]">

    {{-- IMAGEN DE FONDO --}}
    <div class="absolute inset-0">
        <img src="{{ asset('img/portada.png') }}"
             class="w-full h-full object-cover object-center"
             alt="Portada">
    </div>

    {{-- GLOWS SUAVES --}}
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[320px] h-[320px] sm:w-[420px] sm:h-[420px] lg:w-[600px] lg:h-[600px] bg-primary/10 rounded-full blur-[90px] lg:blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-16 -mb-16 sm:-ml-20 sm:-mb-20 w-[260px] h-[260px] sm:w-[360px] sm:h-[360px] lg:w-[500px] lg:h-[500px] bg-primary/6 rounded-full blur-[80px] lg:blur-[100px] pointer-events-none"></div>

    {{-- CONTENIDO --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="min-h-[calc(100svh-var(--nav-h))] flex items-center pb-20 sm:pb-24 lg:pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 sm:gap-10 lg:gap-12 items-center w-full">

          <div class="lg:col-span-8 xl:col-span-7">
            <div class="max-w-3xl">
              <h1 class="font-display font-black tracking-tight leading-[0.95]">
                <span class="block text-white text-[clamp(2rem,7vw,4rem)] drop-shadow-[0_2px_10px_rgba(0,0,0,0.15)]">
                  CIDECH
                </span>

                <span class="block mt-2 text-white text-[clamp(2.2rem,7.8vw,4.8rem)] drop-shadow-[0_2px_10px_rgba(0,0,0,0.15)]">
                  #1 en
                  <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-primary">
                    resultados y
                  </span>
                </span>

                <span class="block mt-2 text-primary text-[clamp(2.4rem,8.4vw,5.2rem)] drop-shadow-[0_0_18px_rgba(239,35,60,0.28)]">
                  formación
                </span>
              </h1>

              <p class="mt-5 sm:mt-6 max-w-2xl text-[clamp(1rem,2.4vw,1.35rem)] text-white font-light border-l-4 border-primary pl-4 sm:pl-6 leading-relaxed drop-shadow-[0_2px_10px_rgba(0,0,0,0.12)]">
                Mejores en resultados académicos y formación de valores.
                Transformamos estudiantes en líderes con impacto real en su futuro.
              </p>

              <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row gap-4 sm:gap-5">
                <a class="inline-flex items-center justify-center px-6 sm:px-8 py-3.5 sm:py-4 text-sm sm:text-base font-bold rounded bg-primary text-white hover:bg-primary-hover shadow-[0_0_20px_rgba(239,35,60,0.35)] hover:shadow-[0_0_30px_rgba(239,35,60,0.55)] transition-all duration-300 transform hover:-translate-y-1"
                   href="#proyectos">
                  VER PROYECTOS
                  <span class="material-symbols-outlined ml-2 text-xl">arrow_forward</span>
                </a>

                <a class="inline-flex items-center justify-center px-6 sm:px-8 py-3.5 sm:py-4 border border-white/50 text-sm sm:text-base font-bold rounded text-white hover:bg-white hover:text-slate-900 transition-all duration-300"
                   href="#aliados">
                  SER ALIADO
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    {{-- CIERRE INFERIOR DEL HERO --}}
    <div class="absolute inset-x-0 bottom-0 z-20">
      <div class="flex justify-center pb-2 sm:pb-3">
        <a href="#nosotros"
           class="inline-flex items-center gap-2 text-gray-200 hover:text-white transition-colors">
          <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest">Desliza</span>
          <span class="material-symbols-outlined animate-bounce text-primary">keyboard_arrow_down</span>
        </a>
      </div>

      <div class="h-px cidech-divider"></div>
    </div>
</section>

{{-- PROYECTOS --}}
<section class="section-shell cidech-light-surface border-b border-primary/10" id="proyectos">
    @php
        $fallback = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80';
        $img = function ($path, $fallback) {
            if (blank($path)) return $fallback;
            return \Illuminate\Support\Str::startsWith($path, ['http://','https://']) ? $path : asset($path);
        };
    @endphp

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-header flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <span class="section-kicker">Nuestro Trabajo</span>
                <h2 class="section-title font-display">Proyectos en Acción</h2>
            </div>

            <div class="hidden md:flex gap-2">
                <button id="projectsPrev" class="carousel-nav-btn" type="button" aria-label="Anterior">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>

                <button id="projectsNext" class="carousel-nav-btn" type="button" aria-label="Siguiente">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        <div id="projectsCarousel"
             class="carousel-rail flex overflow-x-auto hide-scrollbar px-4 sm:px-6 lg:px-8 snap-x snap-proximity scroll-smooth">

            @forelse(($projects ?? collect())->take(5) as $p)
                <a href="{{ route('proyectos.show', $p) }}"
                   class="project-card project-card-shell relative rounded-[1.75rem] overflow-hidden group snap-center cursor-pointer block border border-primary/10 hover:border-primary/30 transition-all shadow-[0_14px_40px_rgba(15,23,42,0.08)]">

                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                         src="{{ $img($p->imagen ?? null, $fallback) }}"
                         alt="{{ $p->titulo }}" />

                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/45 to-transparent opacity-90"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-transparent to-transparent"></div>

                    <div class="absolute bottom-0 left-0 p-8 w-full">
                        <span class="inline-block px-3 py-1 bg-primary/15 backdrop-blur-md border border-primary/25 text-white text-xs font-bold uppercase tracking-wider rounded mb-4">
                            {{ $p->estado ?? 'En curso' }}
                        </span>

                        <h3 class="text-3xl font-bold text-white mb-2 group-hover:text-primary transition-colors font-display">
                            {{ $p->titulo }}
                        </h3>

                        <p class="text-gray-200 mb-6 line-clamp-2">
                            {{ \Illuminate\Support\Str::limit($p->descripcion ?? '', 140) }}
                        </p>

                        <div class="flex items-center text-sm font-medium text-white/85">
                            <span class="material-symbols-outlined mr-2 text-primary">location_on</span>
                            {{ $p->ubicacion ?? 'Perú' }}
                        </div>
                    </div>
                </a>
            @empty
                <div class="w-full text-center text-slate-500 py-12">Aún no hay proyectos publicados.</div>
            @endforelse
        </div>
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
<section class="section-shell cidech-light-surface-soft border-b border-primary/10" id="aliados">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="section-header flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <span class="section-kicker">Convenios</span>
                <h2 class="section-title font-display">Red de Convenios Institucionales</h2>
                <p class="section-copy">
                    Unimos fuerzas con las instituciones más importantes del país.
                </p>
            </div>

            <div class="hidden md:flex gap-2">
                <button id="alliesPrev" class="carousel-nav-btn" type="button">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>

                <button id="alliesNext" class="carousel-nav-btn" type="button">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        <div class="flex flex-wrap gap-3 mb-10">
            <button class="ally-tab pill-tab active" data-category="municipalidades">MUNICIPALIDADES</button>
            <button class="ally-tab pill-tab" data-category="colegios">COLEGIOS</button>
            <button class="ally-tab pill-tab" data-category="institutos">INSTITUTOS</button>
        </div>

        <div id="alliesCarousel"
             class="carousel-rail flex overflow-x-auto hide-scrollbar snap-x snap-proximity scroll-smooth">
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
      <div class="ally-card logo-card-shell snap-center">
        <div class="h-full bg-white border border-slate-200 rounded-[1.5rem]
                    flex items-center justify-center
                    grayscale opacity-80 hover:grayscale-0 hover:opacity-100
                    hover:border-primary/40 transition-all duration-300
                    overflow-hidden group shadow-[0_12px_35px_rgba(15,23,42,0.05)]">

            <img src="${item.src}"
                 alt="${item.name}"
                 loading="lazy"
                 class="w-full h-full object-contain p-8 sm:p-10
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
      btn.classList.toggle('active', active);
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

{{-- ORGULLO ACADÉMICO --}}
<section class="section-shell bg-[#f3f5f8] text-slate-900 border-b border-primary/10" id="equipo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-header flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <span class="section-kicker">Comunidad</span>
                <h2 class="section-title font-display">Orgullo Académico</h2>
                <p class="section-copy">
                    Exalumnos y estudiantes destacados que representan el impacto real de CIDECH: disciplina, resultados y propósito.
                </p>
            </div>

            <div class="hidden md:flex gap-2">
                <button id="alumniPrev" class="carousel-nav-btn" type="button" aria-label="Anterior">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>

                <button id="alumniNext" class="carousel-nav-btn" type="button" aria-label="Siguiente">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        <div id="alumniCarousel" class="carousel-rail flex overflow-x-auto hide-scrollbar snap-x snap-proximity scroll-smooth">
            {{-- 1 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img src="{{ asset('img/estudiantes/milton.png') }}"
                             alt="Milton Ccota Mamani"
                             class="w-full h-full object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-white/85 border border-white text-slate-900 text-xs font-black uppercase tracking-widest">
                                Exalumno destacado
                            </span>
                        </div>

                        <div class="absolute bottom-0 left-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <a class="text-white hover:text-white bg-slate-900 hover:bg-primary p-2 rounded-full inline-flex transition-colors" href="#">
                                <span class="material-symbols-outlined text-sm">link</span>
                            </a>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Milton Ccota Mamani
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Ingeniería Civil
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        🎓🏛️ Ingresante a la UNI – IEN 2026
                    </p>
                </div>
            </div>

            {{-- 2 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img src="{{ asset('img/estudiantes/alex.png') }}"
                             alt="Alex Gallegos Humire"
                             class="w-full h-full object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 rounded-full bg-primary text-xs font-black uppercase tracking-widest text-white shadow-lg shadow-primary/25">
                                1er puesto
                            </span>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Alex Gallegos Humire
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Ingeniería Química
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        👑🎓 1er Puesto (IEN-2026) – UNI
                    </p>
                </div>
            </div>

            {{-- 3 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Valeria Quispe
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Medicina Humana
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        🩺🏅 Ingresante – UNMSM 2025
                    </p>
                </div>
            </div>

            {{-- 4 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Diego Ramos
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Ingeniería de Sistemas
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        💻🎓 Ingresante – UNSA 2025
                    </p>
                </div>
            </div>

            {{-- 5 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Renzo Huamán
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Arquitectura
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        🏛️📐 Ingresante – UNI 2024
                    </p>
                </div>
            </div>

            {{-- 6 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Camila Torres
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Derecho
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        ⚖️🎓 Ingresante – UNSAAC 2025
                    </p>
                </div>
            </div>

            {{-- 7 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1520975682031-a6ad0f66f03d?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        José Medina
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Economía
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
                        📈🏅 Beca – Ingreso 2025
                    </p>
                </div>
            </div>

            {{-- 8 --}}
            <div class="alumni-card alumni-card-shell snap-center">
                <div class="group relative">
                    <div class="aspect-[4/5] w-full rounded-[1.5rem] bg-white mb-5 relative overflow-hidden border border-slate-200 group-hover:border-primary/35 transition-colors shadow-[0_12px_35px_rgba(15,23,42,0.05)]">
                        <img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1200&q=80"
                             alt="Exalumno destacado"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-1 group-hover:text-primary transition-colors font-display">
                        Andrea Salas
                    </h3>
                    <p class="text-xs font-bold text-primary tracking-widest uppercase mb-3">
                        Psicología
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed border-l-2 border-slate-200 pl-3 group-hover:border-primary transition-colors">
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

{{-- Hash scroll helper --}}
<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (location.hash) {
      const el = document.querySelector(location.hash);
      if (el) setTimeout(() => el.scrollIntoView({ behavior: 'smooth', block: 'start' }), 60);
    }
  });
</script>
@endsection