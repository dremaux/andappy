<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAsvfpYB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAsvfpYB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAsvfpYB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAsvfpYB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAsvfpYB\App_KernelDevDebugContainer([
    'container.build_hash' => 'AsvfpYB',
    'container.build_id' => 'c9b78415',
    'container.build_time' => 1640076839,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAsvfpYB');
