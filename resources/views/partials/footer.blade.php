<footer id="contacto" class="relative overflow-hidden bg-[#b9d4ed] text-slate-900">
    {{-- raya superior + glow --}}
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/80 to-transparent"></div>
    <div class="pointer-events-none absolute inset-x-0 -top-14 h-28 bg-[radial-gradient(ellipse_at_top,rgba(239,35,60,0.32),transparent_68%)] blur-xl"></div>

    <div class="relative z-[1] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <div class="col-span-1 lg:col-span-2">
                <a class="flex items-center gap-3 mb-6 group" href="{{ route('home') }}">
                    <span class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-[0_10px_24px_rgba(239,35,60,0.18)] group-hover:scale-105 transition-transform">
                        C
                    </span>
                    <span class="font-bold text-2xl tracking-tight text-slate-900">CIDECH</span>
                </a>

                <p class="text-slate-600 text-lg leading-relaxed max-w-md mb-8">
                    Formación académica, disciplina y acompañamiento integral para impulsar resultados reales y construir un futuro con más oportunidades.
                </p>

                <div class="flex flex-wrap gap-3">
                    <a class="w-11 h-11 rounded-full bg-white/85 border border-slate-300 flex items-center justify-center text-slate-600 hover:bg-primary hover:border-primary hover:text-white transition-all shadow-sm"
                       href="#">
                        <span class="text-sm font-bold">FB</span>
                    </a>
                    <a class="w-11 h-11 rounded-full bg-white/85 border border-slate-300 flex items-center justify-center text-slate-600 hover:bg-primary hover:border-primary hover:text-white transition-all shadow-sm"
                       href="#">
                        <span class="text-sm font-bold">IG</span>
                    </a>
                    <a class="w-11 h-11 rounded-full bg-white/85 border border-slate-300 flex items-center justify-center text-slate-600 hover:bg-primary hover:border-primary hover:text-white transition-all shadow-sm"
                       href="#">
                        <span class="text-sm font-bold">LI</span>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 text-lg mb-6 uppercase tracking-wider">Enlaces</h4>
                <ul class="space-y-4 text-slate-600">
                    <li>
                        <a class="hover:text-primary transition-colors flex items-center group"
                           href="#nosotros">
                            <span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-primary transition-colors flex items-center group"
                           href="{{ route('proyectos.index') }}">
                            <span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Proyectos
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-primary transition-colors flex items-center group"
                           href="#aliados">
                            <span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Aliados
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-primary transition-colors flex items-center group"
                           href="#equipo">
                            <span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                            Equipo
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 text-lg mb-6 uppercase tracking-wider">Contacto</h4>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 rounded-2xl border border-white/70 bg-white/75 px-4 py-3 shadow-[0_10px_24px_rgba(15,23,42,0.04)]">
                        <span class="material-symbols-outlined text-primary text-[20px]">mail</span>
                        <span class="text-slate-700 font-medium">info@cidech.org.pe</span>
                    </div>

                    <div class="flex items-center gap-3 rounded-2xl border border-white/70 bg-white/75 px-4 py-3 shadow-[0_10px_24px_rgba(15,23,42,0.04)]">
                        <span class="material-symbols-outlined text-primary text-[20px]">call</span>
                        <span class="text-slate-700 font-medium">+51 987 654 321</span>
                    </div>

                    <div class="flex items-center gap-3 rounded-2xl border border-white/70 bg-white/75 px-4 py-3 shadow-[0_10px_24px_rgba(15,23,42,0.04)]">
                        <span class="material-symbols-outlined text-primary text-[20px]">location_on</span>
                        <span class="text-slate-700 font-medium">Lima, Perú</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-300/80 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-slate-500 text-center md:text-left">
                © {{ date('Y') }} CIDECH. Todos los derechos reservados.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-6">
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">
                    Privacidad
                </a>
                <a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">
                    Términos
                </a>
                <a class="inline-flex items-center gap-2 rounded-full border border-slate-300 bg-white/80 px-4 py-2 text-sm font-bold text-slate-700 hover:border-primary hover:text-primary transition-all"
                   href="#top">
                    Volver arriba
                    <span class="material-symbols-outlined text-[18px]">arrow_upward</span>
                </a>
            </div>
        </div>
    </div>
</footer>