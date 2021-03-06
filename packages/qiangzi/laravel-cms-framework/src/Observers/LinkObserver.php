<?php
/**
 * Laravel-cms - cms based on laravel
 *
 * @category  Laravel-cms
 * @package   Laravel
 * @author    Qiangzi <35924784@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/35924784/laravel-cms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Qiangzi\LaravelCms\Observers;

use Qiangzi\LaravelCms\Models\Link;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 友情链接观察者
 *
 * Class LinkObserver
 * @package Qiangzi\LaravelCms\Observers
 */
class LinkObserver
{
    public function creating(Link $link)
    {
        //
    }

    public function updating(Link $link)
    {
        //
    }
}