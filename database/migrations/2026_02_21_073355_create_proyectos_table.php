<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug')->unique();

            $table->string('categoria')->nullable()->index();
            $table->string('estado')->nullable();
            $table->string('ubicacion')->nullable();

            $table->text('descripcion')->nullable();
            $table->longText('contenido')->nullable();

            // ✅ URLs largas o rutas locales
            $table->text('imagen')->nullable();
            $table->text('banner')->nullable();

            // ✅ usados por el show (sidebar y galería)
            $table->json('metricas')->nullable(); // [{label,value,icon,accent}]
            $table->json('galeria')->nullable();  // ["url1","url2"...]
            $table->json('aliados')->nullable();  // ["UNI","MUNI"...] (opcional)

            $table->boolean('is_published')->default(true)->index();
            $table->boolean('featured')->default(false)->index();
            $table->unsignedInteger('orden')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};