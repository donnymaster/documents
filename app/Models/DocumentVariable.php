<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentVariable extends Model
{
    use HasFactory;

    protected $fillable = ['document_template_id', 'variable_path', 'variable_description'];

    public function document_templates()
    {
        return $this->belongsTo(DocumentTemplate::class);
    }
}
