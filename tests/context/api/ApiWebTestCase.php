<?php

namespace Api\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class ApiWebTestCase extends WebTestCase
{
    protected static function createKernel(array $options = []): KernelInterface
    {
        return new \Kernel(
            $options['environment'] ?? 'test',
            $options['debug'] ?? true,
            $options['context'] ?? 'api'
        );
    }
}
