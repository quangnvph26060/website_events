<?php

use App\Models\Work;
use App\Models\Catalogue;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catalogue_work', function (Blueprint $table) {
            $table->foreignIdFor(Catalogue::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Work::class)->constrained()->cascadeOnDelete();

            $table->primary(['catalogue_id', 'work_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogue_work');
    }
};
