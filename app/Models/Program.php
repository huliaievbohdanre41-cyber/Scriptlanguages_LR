<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Program extends Model
{
    protected $fillable = [
        'code',
        'level',
        'duration_years',
        'credits',
    ];
    protected $casts = [
        'duration_years' => 'integer',
        'credits' => 'integer',
    ];
    public function translations(): HasMany
    {
        return $this->hasMany(ProgramTranslation::class);
    }
    public function translationFor(string $locale, string $fallback = 'uk'): ?ProgramTranslation
    {
        $items = $this->relationLoaded('translations')
            ? $this->translations
            : $this->translations()->get();

        return $items->firstWhere('locale', $locale)
            ?? $items->firstWhere('locale', $fallback)
            ?? $items->first();
    }
    public function levelLabel(string $locale = 'uk'): string
    {
        $normalized = strtolower(trim((string) $this->level));
        $isMaster = str_contains($normalized, 'master') || str_contains($normalized, 'магістр');
        if ($locale === 'en') {return $isMaster ? 'Master' : 'Bachelor';}
        return $isMaster ? 'Магістр' : 'Бакалавр';
    }
}
