<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'due_date', 'status'];

    protected $casts = [
        'due_date' => 'date',
    ];

    public function getStatusFormattedAttribute()
    {
        return match ($this->status) {
            'pendente' => 'Pendente',
            'em_andamento' => 'Em andamento',
            'concluido' => 'Concluído',
            default => ucfirst($this->status),
        };
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
