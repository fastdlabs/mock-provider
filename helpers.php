<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

/**
 * @return \Faker\Generator
 */
function mock() {
    return app()->get('mock');
}
