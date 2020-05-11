<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPages extends Model
{
    public function page_collapse_data()
    {
    	return $this->hasMany(PageCollapseData::class, 'pageId');
    }
}
