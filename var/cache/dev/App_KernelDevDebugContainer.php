<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN8uHAnx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN8uHAnx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN8uHAnx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN8uHAnx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN8uHAnx\App_KernelDevDebugContainer([
    'container.build_hash' => 'N8uHAnx',
    'container.build_id' => '80d82044',
    'container.build_time' => 1660170202,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN8uHAnx');
