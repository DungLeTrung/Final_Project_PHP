<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourFaq extends Model
{
    use HasFactory;

    protected $table = 'faq';

    protected $fillable = [
        'question',
        'answer',
        'tour_id'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
