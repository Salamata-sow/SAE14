<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIl1wE4i\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIl1wE4i/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIl1wE4i.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIl1wE4i\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIl1wE4i\App_KernelDevDebugContainer([
    'container.build_hash' => 'Il1wE4i',
    'container.build_id' => '94fc7931',
    'container.build_time' => 1673975956,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIl1wE4i');