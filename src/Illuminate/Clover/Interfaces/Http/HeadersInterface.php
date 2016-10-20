<?php
/**
 * Clovers Framework ()
 *
 * @link      https://github.com/donghaichen/Clovers
 * @copyright Copyright (c) 2011-2016
 * @license    (MIT License)
 */
namespace Illuminate\Clover\Interfaces\Http;

use Illuminate\Clover\Interfaces\CollectionInterface;

/**
 * Headers Interface
 *
 * @package Clovers
 * @since   3.0.0
 */
interface HeadersInterface extends CollectionInterface
{
    public function add($key, $value);

    public function normalizeKey($key);
}
