<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCollapseData extends Model
{
    protected $fillable = ['pageId', 'title', 'description'];
}
