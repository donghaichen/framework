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
 * Environment Interface
 *
 * @package Clovers
 * @since   3.0.0
 */
interface EnvironmentInterface
{
    public static function mock(array $settings = []);
}
