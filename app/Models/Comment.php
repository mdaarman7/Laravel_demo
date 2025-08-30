<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Specify the table name if different from the default
    // protected $table = 'comments';

    // Fillable fields for mass assignment
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
    ];

    /**
     * Get the post that this comment belongs to.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the user who authored this comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}