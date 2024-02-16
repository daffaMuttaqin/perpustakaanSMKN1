<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentLogs extends Model
{
    use HasFactory;

    protected $table = 'rent_logs';

    protected $fillable = [
        'userId',
        'bookId',
        'rentDate',
        'returnDate',
        'status',
        'penalty',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    
    public function book()
    {
        return $this->belongsTo(Book::class, 'bookId', 'id');
    }
}
