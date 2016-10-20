<?php
/**
 * Clovers Framework ()
 *
 * @link      https://github.com/donghaichen/Clovers
 * @copyright Copyright (c) 2011-2016
 * @license    (MIT License)
 */
namespace Illuminate\Clover\Interfaces\Http;

/**
 * Cookies Interface
 *
 * @package Clovers
 * @since   3.0.0
 */
interface CookiesInterface
{
    public function get($name, $default = null);
    public function set($name, $value);
    public function toHeaders();
    public static function parseHeader($header);
}
