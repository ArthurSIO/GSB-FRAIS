<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDGa4zlg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDGa4zlg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDGa4zlg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDGa4zlg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDGa4zlg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DGa4zlg',
    'container.build_id' => '158b0383',
    'container.build_time' => 1607610934,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDGa4zlg');
