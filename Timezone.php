<?php

// 命名空间
namespace Xzb\Ci3\Hooks;

/**
 * 时区
 */
class Timezone
{
    /**
     * 默认
     * 
     * @var string
     */
    public static $defaultTimezoneId = 'Asia/Shanghai';

    /**
     * 启用
     * 
     * @param string
     * @return void
     */
    public static function boot(string $timezoneId = '')
    {
        date_default_timezone_set($timezoneId ?: static::$defaultTimezoneId);
    }

}
