<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBfx9TbB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBfx9TbB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBfx9TbB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBfx9TbB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBfx9TbB\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bfx9TbB',
    'container.build_id' => 'e7be5a80',
    'container.build_time' => 1659688990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBfx9TbB');
