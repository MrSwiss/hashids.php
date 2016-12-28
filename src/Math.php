<?php

/*
 * This file is part of Hashids.
 *
 * (c) Ivan Akimov <ivan@barreleye.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hashids;

/**
 * This is the math class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Math
{
    /**
     * Add two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public static function add($a, $b)
    {
        if (function_exists('gmp_add')) {
            return gmp_add($a, $b);
        }

        return bcadd($a, $b);
    }

    /**
     * Multiply two arbitrary-length integers
     *
     * @param string $base
     * @param string $exp
     *
     * @return string
     */
    public static function multiply($a, $b)
    {
        if (function_exists('gmp_mul')) {
            return gmp_mul($a, $b);
        }

        return bcmul($a, $b);
    }

    /**
     * Divide two arbitrary-length integers.
     *
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public static function divide($a, $b)
    {
        if (function_exists('gmp_div_q')) {
            return gmp_div_q($a, $b);
        }

        return bcdiv($a, $b);
    }

    /**
     * Raise arbitrary-length integer into power.
     *
     * @param string $base
     * @param string $exp
     *
     * @return string
     */
    public static function pow($base, $exp)
    {
        if (function_exists('gmp_pow')) {
            return gmp_pow($base, $exp);
        }

        return bcpow($base, $exp);
    }

    /**
     * Compute arbitrary-length integer modulo.
     *
     * @param string $n
     * @param string $d
     *
     * @return string
     */
    public static function mod($n, $d)
    {
        if (function_exists('gmp_mod')) {
            return gmp_mod($n, $d);
        }

        return bcmod($n, $d);
    }

    /**
     * Compares two arbitrary-length integer modulo.
     *
     * @param string $a
     * @param string $b
     *
     * @return int
     */
    public static function comp($a, $b)
    {
        if (function_exists('gmp_cmp')) {
            return gmp_cmp($a, $b);
        }

        return bccomp($a, $b);
    }

    /**
     * Converts arbitrary-length integer to PHP integer.
     *
     * @param string $a
     *
     * @return int
     */
    public static function intval($a)
    {
        if (function_exists('gmp_intval')) {
            return gmp_intval($a);
        }

        return intval($a);
    }

}
