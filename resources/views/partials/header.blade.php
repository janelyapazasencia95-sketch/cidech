<header class="fixed top-0 z-50 w-full border-b border-slate-200/80 bg-white/80 backdrop-blur-xl shadow-[0_8px_30px_rgba(15,23,42,0.04)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center">
                <a class="flex items-center gap-3 group" href="{{ route('home') }}">
                    <span class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-[0_10px_20px_rgba(239,35,60,0.18)] group-hover:scale-105 transition-transform">
                        C
                    </span>
                    <span class="font-bold text-2xl tracking-tight text-slate-900">CIDECH</span>
                </a>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <a class="text-slate-600 hover:text-primary font-medium transition-colors"
                   href="{{ route('home') }}#nosotros">
                    Nosotros
                </a>

                <a class="text-slate-600 hover:text-primary font-medium transition-colors"
                   href="{{ route('proyectos.index') }}">
                    Proyectos
                </a>

                <a class="text-slate-600 hover:text-primary font-medium transition-colors"
                   href="{{ route('home') }}#aliados">
                    Aliados
                </a>

                <a class="text-slate-600 hover:text-primary font-medium transition-colors"
                   href="{{ route('home') }}#equipo">
                    Equipo
                </a>
            </nav>

            <div class="hidden md:flex items-center">
                <a class="inline-flex items-center justify-center px-6 py-2.5 rounded-xl border border-primary text-sm font-bold uppercase tracking-wider text-primary hover:bg-primary hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/30"
                   href="{{ route('home') }}#contacto">
                    Contactar
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button data-mobile-menu-btn
                        class="inline-flex items-center justify-center p-2.5 rounded-xl border border-slate-200 bg-white text-slate-700 hover:text-primary hover:border-primary/40 hover:bg-primary/5 focus:outline-none focus:ring-2 focus:ring-primary/30 transition-all"
                        type="button"
                        aria-label="Abrir menú">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        {{-- Menú móvil --}}
        <div data-mobile-menu class="md:hidden hidden pb-4">
            <div class="mt-2 grid gap-2 rounded-2xl border border-slate-200 bg-white/95 p-3 shadow-[0_18px_40px_rgba(15,23,42,0.08)]">
                <a class="px-3 py-2.5 rounded-xl text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                   href="{{ route('home') }}#nosotros">
                    Nosotros
                </a>

                <a class="px-3 py-2.5 rounded-xl text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                   href="{{ route('proyectos.index') }}">
                    Proyectos
                </a>

                <a class="px-3 py-2.5 rounded-xl text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                   href="{{ route('home') }}#aliados">
                    Aliados
                </a>

                <a class="px-3 py-2.5 rounded-xl text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors"
                   href="{{ route('home') }}#equipo">
                    Equipo
                </a>

                <a class="px-3 py-2.5 rounded-xl text-primary font-bold hover:bg-primary/10 transition-colors"
                   href="{{ route('home') }}#contacto">
                    Contactar
                </a>
            </div>
        </div>
    </div>
</header>