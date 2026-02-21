<header class="fixed top-0 z-50 w-full backdrop-blur-md bg-background-dark/80 border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center">
                <a class="flex items-center gap-2 group" href="{{ route('home') }}">
                    <span class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">C</span>
                    <span class="font-bold text-2xl tracking-tight text-white">CIDECH</span>
                </a>
            </div>

            <nav class="hidden md:flex space-x-8">
                <a class="text-gray-300 hover:text-primary font-medium transition-colors" href="{{ route('home') }}#nosotros">Nosotros</a>

                {{-- ✅ Ruta al index de proyectos --}}
                <a class="text-gray-300 hover:text-primary font-medium transition-colors" href="{{ route('proyectos.index') }}">
                    Proyectos
                </a>

                <a class="text-gray-300 hover:text-primary font-medium transition-colors" href="{{ route('home') }}#aliados">Aliados</a>
                <a class="text-gray-300 hover:text-primary font-medium transition-colors" href="{{ route('home') }}#equipo">Equipo</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a class="inline-flex items-center justify-center px-6 py-2 border border-primary text-sm font-bold uppercase tracking-wider rounded text-primary hover:bg-primary hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                   href="{{ route('home') }}#contacto">
                    Contactar
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button data-mobile-menu-btn
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                        type="button" aria-label="Abrir menú">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        {{-- Menú móvil --}}
        <div data-mobile-menu class="md:hidden hidden pb-4">
            <div class="mt-2 grid gap-2 rounded-xl border border-gray-800 bg-background-dark/95 p-3">
                <a class="px-3 py-2 rounded-lg text-gray-200 hover:bg-white/5" href="{{ route('home') }}#nosotros">Nosotros</a>

                {{-- ✅ Ruta al index de proyectos --}}
                <a class="text-gray-300 hover:text-primary font-medium transition-colors"
                    href="{{ route('proyectos.index') }}">
                    Proyectos
                </a>

                <a class="px-3 py-2 rounded-lg text-gray-200 hover:bg-white/5" href="{{ route('home') }}#aliados">Aliados</a>
                <a class="px-3 py-2 rounded-lg text-gray-200 hover:bg-white/5" href="{{ route('home') }}#equipo">Equipo</a>
                <a class="px-3 py-2 rounded-lg text-primary font-bold hover:bg-primary/10" href="{{ route('home') }}#contacto">Contactar</a>
            </div>
        </div>
    </div>
</header>