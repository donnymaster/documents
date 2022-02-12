<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['user_creator_id', 'document_template_name', 'document_template_path', 'document_template_version'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function document_variables()
    {
        return $this->hasMany(DocumentVariable::class);
    }

    public function created_documents()
    {
        return $this->hasMany(CreatedDocument::class);
    }
}
