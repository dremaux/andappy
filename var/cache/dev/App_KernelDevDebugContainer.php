<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLuUi2kc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLuUi2kc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLuUi2kc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLuUi2kc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLuUi2kc\App_KernelDevDebugContainer([
    'container.build_hash' => 'LuUi2kc',
    'container.build_id' => 'a6c6de95',
    'container.build_time' => 1662368968,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLuUi2kc');
