<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8KXQigV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8KXQigV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8KXQigV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8KXQigV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8KXQigV\App_KernelDevDebugContainer([
    'container.build_hash' => '8KXQigV',
    'container.build_id' => '722884cf',
    'container.build_time' => 1658218868,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8KXQigV');
