<?php

namespace Modules\Logs\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Logs\Entities\Traits\ContentViewsChart;
use Modules\Logs\Entities\Traits\TotalViewsChart;

class ContentLogs extends Model
{
    protected $guarded = [];

    use TotalViewsChart;
    use ContentViewsChart;
}
