<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPTOTO8p\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPTOTO8p/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPTOTO8p.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPTOTO8p\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPTOTO8p\App_KernelDevDebugContainer([
    'container.build_hash' => 'PTOTO8p',
    'container.build_id' => '81f20401',
    'container.build_time' => 1661775962,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPTOTO8p');
