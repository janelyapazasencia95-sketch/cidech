<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;
use Illuminate\Support\Str;

class ProyectosSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'titulo' => 'Convenio UNI – CIDECH',
                'categoria' => 'Educación',
                'estado' => 'En curso',
                'ubicacion' => 'Arequipa - Tacna',
                'descripcion' => 'Convenio para rendir examen descentralizado y fortalecer preparación de alto rendimiento.',
                'contenido' => "Este convenio fortalece la preparación académica de alto rendimiento y habilita sedes autorizadas.\n\nSe articula con aliados locales para ampliar cobertura, seguimiento y resultados medibles.",
                'banner' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB67kS0mUI5q_DCjiHsBR1HSc4QkjayLssrm2pU8J71JuYihtgXMsJV3vlLhOQjOfDfNxCI6zBfaNvQtImbiySrzjjkEUZiiR5GSVyO1VB1tfuqfvgq8PgksiGm4AfTlG0r2PABOlpOe9p-Lcl5hT5pXQ4WZfPfagWC50PooplaXqlC3FL7z8b-NwmH_miYjrtdUIAiNkK3p-8TVdoipdiIzxx8Xt8C4dG1wBapFhZ439PIUw-q6lOoAKE3Vw9ooitcqS9w8tjAmH9b',
                'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB67kS0mUI5q_DCjiHsBR1HSc4QkjayLssrm2pU8J71JuYihtgXMsJV3vlLhOQjOfDfNxCI6zBfaNvQtImbiySrzjjkEUZiiR5GSVyO1VB1tfuqfvgq8PgksiGm4AfTlG0r2PABOlpOe9p-Lcl5hT5pXQ4WZfPfagWC50PooplaXqlC3FL7z8b-NwmH_miYjrtdUIAiNkK3p-8TVdoipdiIzxx8Xt8C4dG1wBapFhZ439PIUw-q6lOoAKE3Vw9ooitcqS9w8tjAmH9b',
                'metricas' => [
                    ['label' => 'Beneficiarios', 'value' => '+2.5k', 'icon' => 'groups', 'accent' => 'primary'],
                    ['label' => 'Sedes',         'value' => '2',    'icon' => 'school', 'accent' => 'red'],
                    ['label' => 'Simulacros',    'value' => '40+',  'icon' => 'query_stats', 'accent' => 'primary'],
                    ['label' => 'Cobertura',     'value' => '100%', 'icon' => 'public', 'accent' => 'red'],
                ],
                'galeria' => [
                    'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1588072432836-7fb78a73b28a?auto=format&fit=crop&w=1600&q=80',
                ],
                'aliados' => ['UNI', 'CIDECH', 'MUNI', 'COLEGIO'],
                'is_published' => true,
                'featured' => true,
                'orden' => 1,
            ],
            [
                'titulo' => 'PROMUBE',
                'categoria' => 'Educación',
                'estado' => 'En curso',
                'ubicacion' => 'Arequipa - Tacna - Lima',
                'descripcion' => 'Plataforma de becas municipales y oportunidades educativas para estudiantes con talento.',
                'contenido' => "PROMUBE centraliza becas municipales y permite seguimiento del postulante.\n\nIncluye requisitos, procesos y reportes.",
                'banner' => 'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1600&q=80',
                'imagen' => 'img/proyectos/promube.png',
                'metricas' => [
                    ['label' => 'Municipios', 'value' => '+30',  'icon' => 'apartment', 'accent' => 'primary'],
                    ['label' => 'Becas',      'value' => '+120', 'icon' => 'workspace_premium', 'accent' => 'red'],
                    ['label' => 'Postulantes','value' => '1.2k', 'icon' => 'how_to_reg', 'accent' => 'primary'],
                ],
                'galeria' => [
                    'https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80',
                ],
                'aliados' => ['MUNI', 'CIDECH', 'COLEGIOS', 'UNI'],
                'is_published' => true,
                'featured' => false,
                'orden' => 2,
            ],
            [
                'titulo' => 'Apoyo Escolar Digital',
                'categoria' => 'Educación',
                'estado' => 'En curso',
                'ubicacion' => 'Arequipa',
                'descripcion' => 'Voluntariado para reforzamiento académico y apoyo digital en colegios.',
                'contenido' => "Programa de apoyo con sesiones planificadas, materiales y seguimiento por competencias.",
                'banner' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80',
                'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAZ4vM7hU3vbCJ0lmlBgr-fAETpi5lwlLLLZiGYwHKs6SdGXiu2HAlicK6VmKv1u50A0TqiiChKF8xElFNdAa2hd0qLXXObvzYrzSph18WbUKAUcNKS90EdpaPl3RvH6Q9NQaCUZ6eEdaWBGBR1Fk6ajp0HY3vsBuhpwLq9u1DnsALOU6OVQRyMAc3Nevd5xdjKAmf0x72PohEY7h5sEvXOAmV3t-mptZSZ-wF8hJpt6ZO12sTUpjXWFZslv9SD0ZsUl2taN49Z2PsQ',
                'metricas' => [
                    ['label' => 'Estudiantes', 'value' => '500+', 'icon' => 'school', 'accent' => 'primary'],
                    ['label' => 'Sesiones',    'value' => '120',  'icon' => 'calendar_month', 'accent' => 'red'],
                    ['label' => 'Mentores',    'value' => '35',   'icon' => 'psychology', 'accent' => 'primary'],
                ],
                'galeria' => [
                    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=1600&q=80',
                ],
                'aliados' => ['COLEGIO', 'CIDECH', 'INSTITUTO', 'MUNI'],
                'is_published' => true,
                'featured' => false,
                'orden' => 3,
            ],
            [
                'titulo' => 'Emprende Joven',
                'categoria' => 'Infraestructura',
                'estado' => 'En curso',
                'ubicacion' => 'Trujillo',
                'descripcion' => 'Incubadora de negocios para jóvenes con mentoría y capital semilla.',
                'contenido' => "Incubación por fases: ideación, validación y lanzamiento.\n\nMentorías y pitch day.",
                'banner' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1600&q=80',
                'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDl-C48kT16V2MNabzhxuhohmq63LjUoBwR9lTROqjg7XCaVJNtCC7-X4cPWtPsORi9ocF0fD2dpVy-rOvF64zZZzG7vh8ZdNem5W0hcAUfcHVnxVz_tJaYxTk8J7hABGpu4FEG74E65iUYkronhHmVeMIdlaP0qQvrjVlwj7af8NKpLSc7YF1kUQf3FO_xRryLUs7mv18ijuXfuFx2zLRxnkIQxEeoKNUaacY2-h_MLiuaDG8zdI7_1PQK-CYfctmajAGxXHjc3C0S',
                'metricas' => [
                    ['label' => 'Mentores',  'value' => '25', 'icon' => 'psychology', 'accent' => 'primary'],
                    ['label' => 'Proyectos', 'value' => '60', 'icon' => 'rocket_launch', 'accent' => 'red'],
                    ['label' => 'Pitch Days','value' => '8',  'icon' => 'campaign', 'accent' => 'primary'],
                ],
                'galeria' => [
                    'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1600&q=80',
                ],
                'aliados' => ['CIDECH', 'INSTITUTO', 'EMPRESA', 'MUNI'],
                'is_published' => true,
                'featured' => false,
                'orden' => 4,
            ],
            [
                'titulo' => 'Ruta de Becas & Ingreso',
                'categoria' => 'Educación',
                'estado' => 'En curso',
                'ubicacion' => 'Cobertura nacional',
                'descripcion' => 'Plan integral de preparación, simulacros y acompañamiento para becas e ingreso.',
                'contenido' => "Ruta integral: diagnóstico, nivelación, simulacros y acompañamiento.\n\nIncluye seguimiento y reportes por etapa.",
                'banner' => 'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1600&q=80',
                'imagen' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80',
                'metricas' => [
                    ['label' => 'Cobertura',  'value' => '100%', 'icon' => 'public', 'accent' => 'primary'],
                    ['label' => 'Simulacros', 'value' => '40+',  'icon' => 'query_stats', 'accent' => 'red'],
                    ['label' => 'Tutores',    'value' => '20',   'icon' => 'person', 'accent' => 'primary'],
                ],
                'galeria' => [
                    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80',
                    'https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=1600&q=80',
                ],
                'aliados' => ['CIDECH', 'COLEGIO', 'MUNI', 'UNI'],
                'is_published' => true,
                'featured' => false,
                'orden' => 5,
            ],
        ];

        foreach ($items as $row) {
            $row['slug'] = $row['slug'] ?? Str::slug($row['titulo']);

            Proyecto::updateOrCreate(
                ['slug' => $row['slug']],
                $row
            );
        }
    }
}