@extends('layouts.public')

@section('title', ($proyecto->titulo ?? 'Proyecto') . ' - CIDECH')

@section('content')
@php
  use Illuminate\Support\Str;

  $img = $proyecto->banner ?: $proyecto->imagen;

  $hero = $img
    ? (Str::startsWith($img, ['http://','https://']) ? $img : asset($img))
    : 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80';

  $metrics = $proyecto->metricas ?? [];
  $gallery = $proyecto->galeria ?? [];

  $allies = $proyecto->aliados ?? null;
  if (is_string($allies)) {
    try { $allies = json_decode($allies, true); } catch (\Throwable $e) { $allies = null; }
  }
  if (!is_array($allies)) $allies = [];
@endphp

<style>
  .soft-card {
    background: rgba(255, 255, 255, 0.82);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(148, 163, 184, 0.18);
    box-shadow: 0 18px 45px rgba(15, 23, 42, 0.06);
  }

  .soft-button {
    background: rgba(255, 255, 255, 0.14);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.24);
  }

  .hero-overlay {
    background: linear-gradient(
      180deg,
      rgba(15, 23, 42, 0.08) 0%,
      rgba(15, 23, 42, 0.22) 38%,
      rgba(15, 23, 42, 0.78) 100%
    );
  }

  .section-divider {
    background: linear-gradient(
      to right,
      transparent 0%,
      rgba(239,35,60,.14) 18%,
      rgba(239,35,60,.68) 50%,
      rgba(239,35,60,.14) 82%,
      transparent 100%
    );
    box-shadow:
      0 0 14px rgba(239,35,60,.16),
      0 0 26px rgba(239,35,60,.08);
  }
</style>

{{-- HERO --}}
<section class="relative min-h-[calc(100svh-var(--nav-h))] w-full overflow-hidden flex items-end pb-16 sm:pb-20">
  <img
    alt="{{ $proyecto->titulo }}"
    class="absolute inset-0 w-full h-full object-cover"
    src="{{ $hero }}"
  />

  <div class="absolute inset-0 hero-overlay"></div>
  <div class="absolute top-0 left-[15%] w-80 h-80 bg-primary/12 rounded-full blur-[120px] pointer-events-none"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
    <div class="max-w-4xl">
      <div class="flex flex-wrap items-center gap-3 sm:gap-4 mb-6">
        @if($proyecto->featured)
          <span class="px-4 py-1.5 bg-primary text-white text-xs font-black uppercase tracking-widest rounded-full shadow-lg shadow-primary/30">
            Proyecto Destacado
          </span>
        @endif

        @if($proyecto->categoria)
          <span class="px-4 py-1.5 bg-white/12 border border-white/20 text-white text-xs font-black uppercase tracking-widest rounded-full backdrop-blur-md">
            {{ $proyecto->categoria }}
          </span>
        @endif

        @if($proyecto->ubicacion)
          <span class="text-white/85 font-medium tracking-wide flex items-center gap-1">
            <span class="material-symbols-outlined text-primary text-lg">location_on</span>
            {{ $proyecto->ubicacion }}
          </span>
        @endif
      </div>

      <h1 class="text-4xl sm:text-5xl md:text-7xl font-black text-white leading-tight mb-6">
        {{ $proyecto->titulo }} <br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-400">
          {{ $proyecto->estado ?? 'En curso' }}
        </span>
      </h1>

      <p class="text-lg sm:text-xl text-slate-200 max-w-2xl leading-relaxed">
        {{ $proyecto->descripcion ?? 'Pronto publicaremos más detalles de este proyecto.' }}
      </p>

      <div class="mt-8 flex flex-wrap items-center gap-2 text-sm text-slate-200/80">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Inicio</a>
        <span>/</span>
        <a href="{{ route('proyectos.index') }}" class="hover:text-white transition-colors">Proyectos</a>
        <span>/</span>
        <span class="text-white">{{ $proyecto->titulo }}</span>
      </div>
    </div>
  </div>

  <div class="absolute inset-x-0 bottom-0 h-px section-divider"></div>
</section>

{{-- CUERPO --}}
<section class="py-20 bg-[#f6f7fb] relative">
  <div class="absolute top-0 right-0 w-72 h-72 bg-primary/6 rounded-full blur-[120px] pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

      {{-- IZQUIERDA --}}
      <div class="lg:col-span-8 space-y-16">

        {{-- Antecedentes --}}
        <div>
          <h2 class="text-3xl font-bold text-slate-900 mb-6 border-l-4 border-primary pl-4">
            Antecedentes del Proyecto
          </h2>

          <div class="text-slate-600 text-lg leading-relaxed space-y-5">
            {!! nl2br(e($proyecto->contenido ?: $proyecto->descripcion ?: 'Pronto publicaremos el contexto completo del proyecto.')) !!}
          </div>
        </div>

        {{-- Estrategia --}}
        <div>
          <h2 class="text-3xl font-bold text-slate-900 mb-6 border-l-4 border-primary pl-4">
            Estrategia de Ejecución
          </h2>

          <div class="text-slate-600 text-lg leading-relaxed">
            <p class="mb-6">
              Nuestra estrategia se basa en enfoque de alto impacto, medición y mejora continua, articulando aliados y recursos
              para obtener resultados visibles.
            </p>

            <ul class="space-y-4 mt-6 mb-8">
              <li class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                <span>Planificación por fases y objetivos medibles.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                <span>Trabajo coordinado con instituciones y comunidad.</span>
              </li>
              <li class="flex items-start gap-3">
                <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                <span>Seguimiento, evidencia y mejora continua.</span>
              </li>
            </ul>

            <p>
              Estado actual: <strong class="text-slate-900">{{ $proyecto->estado ?? 'En curso' }}</strong>. Seguimos ampliando el alcance y consolidando resultados.
            </p>
          </div>
        </div>

        {{-- Quote --}}
        <div class="border-l-4 border-primary/30 pl-6 sm:pl-8 italic py-6 px-6 bg-white rounded-r-2xl border border-slate-200 shadow-[0_14px_35px_rgba(15,23,42,0.05)]">
          <p class="text-xl text-slate-900 font-medium mb-4">
            “Este proyecto representa una apuesta por resultados reales y sostenibles; medimos impacto y mejoramos continuamente.”
          </p>

          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
              <img
                alt="Avatar"
                class="w-full h-full object-cover"
                src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=200&q=80"
              />
            </div>
            <div>
              <p class="text-slate-900 font-bold text-sm">Equipo CIDECH</p>
              <p class="text-primary text-xs uppercase tracking-wider">Gestión de Proyectos</p>
            </div>
          </div>
        </div>

        {{-- Galería --}}
        @if(!empty($gallery))
          <div>
            <h2 class="text-3xl font-bold text-slate-900 mb-6 border-l-4 border-primary pl-4">
              Galería del Proyecto
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
              @foreach($gallery as $g)
                @php $src = Str::startsWith($g, ['http://','https://']) ? $g : asset($g); @endphp
                <div class="rounded-2xl overflow-hidden h-64 relative group border border-slate-200 bg-white shadow-[0_12px_30px_rgba(15,23,42,0.05)]">
                  <img
                    alt="Galería"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    src="{{ $src }}"
                  />
                  <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors"></div>
                </div>
              @endforeach
            </div>
          </div>
        @endif
      </div>

      {{-- DERECHA --}}
      <div class="lg:col-span-4 relative">
        <div class="sticky top-24 space-y-8">

          {{-- Impacto generado --}}
          <div class="soft-card rounded-2xl p-8">
            <h3 class="text-xl font-bold text-slate-900 mb-6 uppercase tracking-wider border-b border-slate-200 pb-4">
              Impacto Generado
            </h3>

            <div class="space-y-6">
              @forelse(array_slice($metrics, 0, 6) as $m)
                @php
                  $icon = $m['icon'] ?? 'insights';
                  $label = $m['label'] ?? 'Métrica';
                  $value = $m['value'] ?? '—';
                @endphp

                <div class="flex items-center gap-4 group">
                  <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary transition-colors duration-300">
                    <span class="material-symbols-outlined text-primary group-hover:text-white text-2xl">{{ $icon }}</span>
                  </div>
                  <div>
                    <p class="text-3xl font-black text-slate-900">{{ $value }}</p>
                    <p class="text-slate-500 text-sm font-medium">{{ $label }}</p>
                  </div>
                </div>
              @empty
                <p class="text-slate-500">Aún no hay métricas registradas para este proyecto.</p>
              @endforelse
            </div>
          </div>

          {{-- Aliados --}}
          <div class="soft-card rounded-2xl p-8">
            <h3 class="text-xl font-bold text-slate-900 mb-6 uppercase tracking-wider border-b border-slate-200 pb-4">
              Aliados Estratégicos
            </h3>

            <div class="grid grid-cols-2 gap-4">
              @if(!empty($allies))
                @foreach(array_slice($allies, 0, 4) as $a)
                  <div class="bg-white rounded-lg h-16 flex items-center justify-center border border-slate-200 hover:border-primary/35 transition-colors shadow-sm">
                    <span class="font-bold text-slate-500 text-xs uppercase">{{ $a }}</span>
                  </div>
                @endforeach
              @else
                @foreach(['CIDECH','MUNI','COLEGIO','INSTITUTO'] as $a)
                  <div class="bg-white rounded-lg h-16 flex items-center justify-center border border-slate-200 hover:border-primary/35 transition-colors shadow-sm">
                    <span class="font-bold text-slate-500 text-xs uppercase">{{ $a }}</span>
                  </div>
                @endforeach
              @endif
            </div>
          </div>

          {{-- volver --}}
          <a class="flex items-center justify-center w-full py-5 bg-primary text-white font-black uppercase tracking-widest text-lg rounded-xl shadow-[0_10px_40px_rgba(239,35,60,0.24)] hover:bg-primary-hover hover:shadow-[0_15px_50px_rgba(239,35,60,0.35)] transition-all transform hover:-translate-y-1 group"
             href="{{ route('proyectos.index') }}">
            Volver a Proyectos
            <span class="material-symbols-outlined ml-3 group-hover:-translate-x-1 transition-transform">arrow_back</span>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

{{-- RELACIONADOS --}}
@if(isset($related) && $related->count())
<section class="py-20 bg-[#eef2f6] border-t border-slate-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h3 class="text-2xl font-bold text-slate-900 mb-12">Otros Proyectos Relacionados</h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($related as $r)
        @php
          $rImg = $r->imagen
            ? (Str::startsWith($r->imagen, ['http://','https://']) ? $r->imagen : asset($r->imagen))
            : 'https://images.unsplash.com/photo-1520975682031-a6ad0f66f03d?auto=format&fit=crop&w=1600&q=80';
        @endphp

        <a class="block group" href="{{ route('proyectos.show', $r) }}">
          <div class="rounded-2xl overflow-hidden h-64 relative mb-4 border border-slate-200 bg-white shadow-[0_12px_30px_rgba(15,23,42,0.05)]">
            <img
              alt="{{ $r->titulo }}"
              class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
              src="{{ $rImg }}"
            />
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/5 transition-colors"></div>
          </div>

          <h4 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">
            {{ $r->titulo }}
          </h4>
          <p class="text-sm text-slate-500 mt-1">{{ $r->ubicacion ?? 'Perú' }}</p>
        </a>
      @endforeach
    </div>
  </div>
</section>
@endif
@endsection