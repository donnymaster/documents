<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatedDocument extends Model
{
    use HasFactory;

    protected $fillable = ['document_template_id', 'user_owner_id', 'document_path', 'document_version'];

    public function created_documents()
    {
        return $this->belongsTo(CreatedDocument::class);
    }
}
