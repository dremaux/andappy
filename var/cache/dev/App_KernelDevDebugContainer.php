<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWyoGw0O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWyoGw0O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWyoGw0O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWyoGw0O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWyoGw0O\App_KernelDevDebugContainer([
    'container.build_hash' => 'WyoGw0O',
    'container.build_id' => 'b397c61b',
    'container.build_time' => 1665429937,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWyoGw0O');
