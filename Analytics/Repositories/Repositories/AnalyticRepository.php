<?php


namespace Modules\Analytics\Repositories\Repositories;


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Modules\Analytics\Repositories\Contracts\AnalyticContract;
use Modules\Logs\Entities\ContentLogs;

class AnalyticRepository implements AnalyticContract
{

    public function getViewStatByDaysOfWeek($logs)
    {
        $logs = $logs->viewsChart();

        return [
            'Monday'    =>  $logs[0],
            'Tuesday'    =>  $logs[1],
            'Wednesday'    =>  $logs[2],
            'Thursday'    =>  $logs[3],
            'Friday'    =>  $logs[4],
            'Saturday'    =>  $logs[5],
            'Sunday'    =>  $logs[6]
        ];
    }

    public function getContentsViewStatByDaysOfWeek($logs)
    {
        $logs = $logs->contentViewChart();

        return [
            'Monday'    =>  $logs[0],
            'Tuesday'    =>  $logs[1],
            'Wednesday'    =>  $logs[2],
            'Thursday'    =>  $logs[3],
            'Friday'    =>  $logs[4],
            'Saturday'    =>  $logs[5],
            'Sunday'    =>  $logs[6]
        ];
    }

    public function getLatestViewStatByNumberOfDays($days)
    {
        $dates = collect();
        foreach (range(-$days, 0) as $item) {
            $date = Carbon::now()->addDays($item)->format('Y-m-d');
            $dates->put($date, 0);
        }

        $posts = ContentLogs::where('created_at', '>=', $dates->keys()->first() )
            ->groupBy( 'date' )
            ->orderBy( 'date' )
            ->get( [
                DB::raw( 'DATE( created_at ) as date' ),
                DB::raw( 'COUNT( * ) as "count"' ),
            ] )
            ->pluck( 'count', 'date' );

        return $dates->merge($posts);
    }
}
