<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW8mjER6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW8mjER6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW8mjER6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW8mjER6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW8mjER6\App_KernelDevDebugContainer([
    'container.build_hash' => 'W8mjER6',
    'container.build_id' => '98c1e5c8',
    'container.build_time' => 1641907586,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW8mjER6');
