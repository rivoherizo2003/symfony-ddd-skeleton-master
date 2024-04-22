<?php
use Symfony\Bundle\MakerBundle\MakerBundle;
use Yceruto\DddMakerBundle\DddMakerBundle;

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Yceruto\DddMakerBundle\DddMakerBundle::class => ['dev' => true],
];
