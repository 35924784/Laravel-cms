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

namespace Qiangzi\LaravelCms\Policies;

use Qiangzi\LaravelCms\Models\User;
use Qiangzi\LaravelCms\Models\Link;

/**
 * 链接授权策略
 *
 * Class LinkPolicy
 * @package Qiangzi\LaravelCms\Policies
 */
class LinkPolicy extends Policy
{

    public function index(User $user, Link $link)
    {
        return $user->can('manage_links');
    }

    public function create(User $user, Link $link)
    {
        return $user->can('manage_links');
    }

    public function update(User $user, Link $link)
    {
        return $user->can('manage_links');
    }

    public function destroy(User $user, Link $link)
    {
        return $user->can('manage_links');
    }
}
