@extends('layouts.public')

@section('title', 'Proyectos - CIDECH')

@section('content')
  <style>
    .glass-button {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.22);
    }

    .project-card {
      border: 1px solid rgba(239, 35, 60, 0.12);
      box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    }

    .project-card:hover .project-hover-content {
      opacity: 1;
      transform: translateY(0);
    }

    .project-hover-content {
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .filter-tag {
      background: rgba(255, 255, 255, 0.9);
      border-color: rgba(148, 163, 184, 0.35);
      color: #475569;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    }

    .filter-tag.active {
      background-color: #EF233C;
      border-color: #EF233C;
      color: #fff;
      box-shadow: 0 12px 30px rgba(239, 35, 60, 0.22);
    }

    .projects-divider {
      background: linear-gradient(
        to right,
        transparent 0%,
        rgba(239,35,60,.16) 18%,
        rgba(239,35,60,.7) 50%,
        rgba(239,35,60,.16) 82%,
        transparent 100%
      );
      box-shadow:
        0 0 14px rgba(239,35,60,.18),
        0 0 28px rgba(239,35,60,.08);
    }
  </style>

  @php
    use Illuminate\Support\Str;

    $categories = $projects->pluck('categoria')->filter()->unique()->values();
    $featured = $projects->first();
    $secondary = $projects->skip(1)->first();
    $rest = $projects->skip(2)->values();

    $slugify = fn($v) => Str::of($v)->lower()->slug('-')->toString();

    $img = function ($path, $fallback) {
      if (blank($path)) return $fallback;
      return Str::startsWith($path, ['http://','https://']) ? $path : asset($path);
    };

    $fallbackFeatured = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80';
    $fallbackSecondary = 'https://images.unsplash.com/photo-1588072432836-7fb78a73b28a?auto=format&fit=crop&w=1600&q=80';
    $fallbackRest = 'https://images.unsplash.com/photo-1520975682031-a6ad0f66f03d?auto=format&fit=crop&w=1600&q=80';
  @endphp

  <section class="relative overflow-hidden bg-[#f6f7fb] pt-32 pb-24" id="proyectos">
    <div class="absolute inset-x-0 top-0 h-px projects-divider"></div>

    <div class="absolute top-0 left-1/4 w-80 h-80 sm:w-96 sm:h-96 bg-primary/8 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-20 right-0 w-72 h-72 bg-primary/6 rounded-full blur-[110px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-16">
        <div class="max-w-2xl">
          <span class="text-primary font-bold uppercase tracking-[0.2em] text-sm mb-4 block">
            Portafolio de Impacto
          </span>

          <h2 class="text-5xl md:text-6xl font-black text-slate-900 leading-tight">
            PROYECTOS <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-400">
              CIDECH
            </span>
          </h2>

          <p class="text-slate-600 mt-6 text-lg">
            Explora iniciativas, convenios y programas que impulsan resultados reales.
          </p>
        </div>

        {{-- Filtros --}}
        <div class="flex flex-wrap gap-3">
          <button data-filter="all" aria-pressed="true"
            class="filter-tag active px-6 py-2.5 rounded-full border text-sm font-semibold transition-all hover:border-primary">
            Todos
          </button>

          @foreach($categories as $cat)
            <button data-filter="{{ $slugify($cat) }}" aria-pressed="false"
              class="filter-tag px-6 py-2.5 rounded-full border text-sm font-semibold transition-all hover:border-primary hover:text-primary">
              {{ $cat }}
            </button>
          @endforeach
        </div>
      </div>

      {{-- GRID estilo showcase --}}
      <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 mb-20">

        {{-- FEATURED --}}
        @if($featured)
          <div class="lg:col-span-3 h-[560px] md:h-[600px] relative rounded-3xl overflow-hidden group project-card"
               data-tags="{{ $slugify($featured->categoria ?? 'General') }}">
            <img
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
              src="{{ $img($featured->imagen, $fallbackFeatured) }}"
              alt="{{ $featured->titulo }}"
            />

            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary/18 via-transparent to-transparent"></div>

            <div class="absolute top-6 left-6">
              <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-primary text-white text-xs font-black uppercase tracking-widest shadow-lg shadow-primary/30">
                <span class="relative flex h-2 w-2 mr-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                </span>
                Impacto Destacado
              </span>
            </div>

            <div class="absolute inset-0 flex flex-col justify-end p-8 md:p-12">
              <div class="flex flex-wrap items-center gap-4 mb-4">
                <span class="px-3 py-1 bg-white/12 backdrop-blur-md border border-white/20 text-white text-[10px] font-bold uppercase tracking-wider rounded">
                  {{ $featured->estado ?? 'En curso' }}
                </span>

                <div class="flex items-center text-white/85 text-sm">
                  <span class="material-symbols-outlined text-primary text-lg mr-1">location_on</span>
                  {{ $featured->ubicacion ?? 'Perú' }}
                </div>
              </div>

              <h3 class="text-4xl md:text-5xl font-bold text-white mb-6 group-hover:text-primary transition-colors">
                {{ $featured->titulo }}
              </h3>

              <div class="project-hover-content flex flex-col md:flex-row md:items-center justify-between gap-6 border-t border-white/10 pt-8">
                <div class="text-gray-200 max-w-xl">
                  {{ Str::limit($featured->descripcion ?? '', 140) }}
                </div>

                <a href="{{ $featured->slug ? route('proyectos.show', $featured) : route('proyectos.index') }}"
                   class="glass-button px-8 py-3 rounded-full text-white font-bold text-sm uppercase tracking-widest flex items-center gap-2 hover:bg-white hover:text-slate-900 transition-all">
                  Explorar Proyecto
                  <span class="material-symbols-outlined text-lg">north_east</span>
                </a>
              </div>
            </div>
          </div>
        @endif

        {{-- SECONDARY --}}
        @if($secondary)
          <div class="lg:col-span-2 h-[560px] md:h-[600px] relative rounded-3xl overflow-hidden group project-card"
               data-tags="{{ $slugify($secondary->categoria ?? 'General') }}">
            <img
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
              src="{{ $img($secondary->imagen, $fallbackSecondary) }}"
              alt="{{ $secondary->titulo }}"
            />

            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary/15 via-transparent to-transparent"></div>

            <div class="absolute inset-0 flex flex-col justify-end p-8">
              <div class="flex flex-wrap items-center gap-4 mb-4">
                <span class="px-3 py-1 bg-white/12 backdrop-blur-md border border-white/20 text-white text-[10px] font-bold uppercase tracking-wider rounded">
                  {{ $secondary->estado ?? 'En curso' }}
                </span>

                <div class="flex items-center text-white/85 text-sm">
                  <span class="material-symbols-outlined text-primary text-lg mr-1">location_on</span>
                  {{ $secondary->ubicacion ?? 'Perú' }}
                </div>
              </div>

              <h3 class="text-3xl font-bold text-white mb-6 group-hover:text-primary transition-colors">
                {{ $secondary->titulo }}
              </h3>

              <div class="project-hover-content border-t border-white/10 pt-6">
                <p class="text-gray-200 mb-6">
                  {{ Str::limit($secondary->descripcion ?? '', 110) }}
                </p>

                <a href="{{ $secondary->slug ? route('proyectos.show', $secondary) : route('proyectos.index') }}"
                   class="glass-button w-full px-6 py-3 rounded-full text-white font-bold text-sm uppercase tracking-widest flex items-center justify-center gap-2 hover:bg-white hover:text-slate-900 transition-all">
                  Explorar Proyecto
                </a>
              </div>
            </div>
          </div>
        @endif

        {{-- RESTO --}}
        @foreach($rest as $p)
          <div class="lg:col-span-2 h-[430px] md:h-[450px] relative rounded-3xl overflow-hidden group project-card"
               data-tags="{{ $slugify($p->categoria ?? 'General') }}">
            <img
              class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105"
              src="{{ $img($p->imagen, $fallbackRest) }}"
              alt="{{ $p->titulo }}"
            />

            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-primary/15 via-transparent to-transparent"></div>

            <div class="absolute inset-0 flex flex-col justify-end p-8">
              <div class="flex flex-wrap items-center gap-4 mb-4">
                <span class="px-3 py-1 bg-white/12 backdrop-blur-md border border-white/20 text-white text-[10px] font-bold uppercase tracking-wider rounded">
                  {{ $p->estado ?? 'En curso' }}
                </span>

                <div class="flex items-center text-white/85 text-sm">
                  <span class="material-symbols-outlined text-primary text-lg mr-1">location_on</span>
                  {{ $p->ubicacion ?? 'Perú' }}
                </div>
              </div>

              <h3 class="text-2xl font-bold text-white mb-6 group-hover:text-primary transition-colors">
                {{ $p->titulo }}
              </h3>

              <div class="project-hover-content border-t border-white/10 pt-6">
                <p class="text-gray-200 mb-6">
                  {{ Str::limit($p->descripcion ?? '', 90) }}
                </p>

                <a href="{{ $p->slug ? route('proyectos.show', $p) : route('proyectos.index') }}"
                   class="glass-button w-full px-6 py-3 rounded-full text-white font-bold text-sm uppercase tracking-widest hover:bg-white hover:text-slate-900 transition-all">
                  Explorar
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

  {{-- JS filtros --}}
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const buttons = Array.from(document.querySelectorAll('.filter-tag[data-filter]'));
      const cards = Array.from(document.querySelectorAll('.project-card[data-tags]'));
      if (!buttons.length || !cards.length) return;

      const setActive = (activeBtn) => {
        buttons.forEach(btn => {
          const isActive = btn === activeBtn;
          btn.classList.toggle('active', isActive);
          btn.setAttribute('aria-pressed', String(isActive));
          btn.classList.toggle('text-slate-600', !isActive);
          btn.classList.toggle('text-white', isActive);
        });
      };

      const showCard = (card) => {
        card.classList.remove('hidden');
        card.classList.add('transition-opacity', 'duration-300');
        requestAnimationFrame(() => card.classList.remove('opacity-0'));
      };

      const hideCard = (card) => {
        card.classList.add('transition-opacity', 'duration-300', 'opacity-0');
        setTimeout(() => card.classList.add('hidden'), 250);
      };

      const applyFilter = (filter) => {
        cards.forEach(card => {
          const tags = (card.dataset.tags || '')
            .split(',')
            .map(t => t.trim().toLowerCase())
            .filter(Boolean);

          const match = filter === 'all' || tags.includes(filter);
          if (match) showCard(card);
          else hideCard(card);
        });
      };

      cards.forEach(c => c.classList.add('opacity-100'));

      buttons.forEach(btn => {
        btn.addEventListener('click', () => {
          setActive(btn);
          applyFilter(btn.dataset.filter);
        });
      });

      const defaultBtn = buttons.find(b => b.dataset.filter === 'all') || buttons[0];
      setActive(defaultBtn);
      applyFilter(defaultBtn.dataset.filter);
    });
  </script>
@endsection