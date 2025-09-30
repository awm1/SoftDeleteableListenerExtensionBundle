<?php

use Symfony\Component\DependencyInjection\Definition;

/** @var \Symfony\Component\DependencyInjection\ContainerBuilder $container */
$container->setDefinition(
    'evence.softdeletale.listener.softdelete',
    new Definition(
        'Evence\Bundle\SoftDeleteableExtensionBundle\EventListener\SoftDeleteListener',
    )
)

->addTag('doctrine.event_listener', [
    'event' => 'preSoftDelete',
]);
