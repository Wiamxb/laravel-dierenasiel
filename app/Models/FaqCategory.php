<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $fillable = ['name'];

    public function faqItems()
    {
        return $this->hasMany(FaqItem::class, 'faq_category_id');
    }

    // optioneel, maar handig als je oude code had
    public function items()
    {
        return $this->faqItems();
    }
}
