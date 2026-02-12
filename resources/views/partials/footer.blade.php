<footer id="contacto" class="bg-background-dark border-t border-gray-800 pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <div class="col-span-1 lg:col-span-2">
                <a class="flex items-center gap-2 mb-6" href="{{ route('home') }}">
                    <span class="w-10 h-10 bg-primary rounded flex items-center justify-center text-white font-bold text-xl">C</span>
                    <span class="font-bold text-2xl tracking-tight text-white">CIDECH</span>
                </a>

                <p class="text-gray-400 text-lg leading-relaxed max-w-sm mb-8">
                    Conectando el desarrollo con la acción. Construimos un futuro más justo a través de alianzas estratégicas de alto impacto.
                </p>

                <div class="flex space-x-4">
                    <a class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition-all" href="#"><span class="text-sm font-bold">FB</span></a>
                    <a class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition-all" href="#"><span class="text-sm font-bold">IG</span></a>
                    <a class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:bg-primary hover:text-white transition-all" href="#"><span class="text-sm font-bold">LI</span></a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-white text-lg mb-6 uppercase tracking-wider">Enlaces</h4>
                <ul class="space-y-4 text-gray-400">
                    <li><a class="hover:text-primary transition-colors flex items-center group" href="#nosotros"><span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Nosotros</a></li>
                    <li><a class="hover:text-primary transition-colors flex items-center group" href="#proyectos"><span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Proyectos</a></li>
                    <li><a class="hover:text-primary transition-colors flex items-center group" href="#aliados"><span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Aliados</a></li>
                    <li><a class="hover:text-primary transition-colors flex items-center group" href="#"><span class="w-2 h-2 bg-primary rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>Noticias</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-white text-lg mb-6 uppercase tracking-wider">Contacto</h4>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-center"><span class="material-symbols-outlined mr-3 text-primary text-sm">mail</span> info@cidech.org.pe</li>
                    <li class="flex items-center"><span class="material-symbols-outlined mr-3 text-primary text-sm">call</span> +51 987 654 321</li>
                    <li class="flex items-center"><span class="material-symbols-outlined mr-3 text-primary text-sm">location_on</span> Lima, Perú</li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-gray-500 text-center md:text-left">
                © {{ date('Y') }} CIDECH. Todos los derechos reservados.
            </p>
            <div class="flex space-x-8 mt-4 md:mt-0">
                <a class="text-sm text-gray-500 hover:text-white transition-colors" href="#">Privacidad</a>
                <a class="text-sm text-gray-500 hover:text-white transition-colors" href="#">Términos</a>
            </div>
        </div>
    </div>
</footer>
