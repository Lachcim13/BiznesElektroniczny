<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQc4butz\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQc4butz/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQc4butz.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQc4butz\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQc4butz\appDevDebugProjectContainer([
    'container.build_hash' => 'Qc4butz',
    'container.build_id' => '41e79f8f',
    'container.build_time' => 1736447832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQc4butz');
