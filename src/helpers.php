<?php

use Spatie\Activitylog\ActivityLogger;

if (!function_exists('activity')) {
    function activity($logName = null)
    {
        $defaultLogName = config('laravel-activitylog.default_log_name');

        return app(ActivityLogger::class)->useLog($logName ?: $defaultLogName);
    }
}
