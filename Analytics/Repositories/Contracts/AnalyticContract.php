<?php


namespace Modules\Analytics\Repositories\Contracts;


interface AnalyticContract
{

    public function getViewStatByDaysOfWeek($logs);

    public function getContentsViewStatByDaysOfWeek($logs);

    public function getLatestViewStatByNumberOfDays($days);

}
