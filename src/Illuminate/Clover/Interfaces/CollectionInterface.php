<?php
/**
 * Clovers Framework ()
 *
 * @link      https://github.com/donghaichen/Clovers
 * @copyright Copyright (c) 2011-2016
 * @license    (MIT License)
 */
namespace namespace Illuminate\Clover\Interfaces;

/**
 * Collection Interface
 *
 * @package Clovers
 * @since   3.0.0
 */
interface CollectionInterface extends \ArrayAccess, \Countable, \IteratorAggregate
{
    public function set($key, $value);

    public function get($key, $default = null);

    public function replace(array $items);

    public function all();

    public function has($key);

    public function remove($key);

    public function clear();
}
