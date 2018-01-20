<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2018
 *
 * @see      https://www.github.com/janhuang
 * @see      http://www.fast-d.cn/
 */

namespace FastD\MockProvider;


use Faker\Factory;
use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

class MockServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function register(Container $container)
    {
        $locale = config()->get('locale', 'en_US');

        $container->add('mock', Factory::create($locale));
    }
}