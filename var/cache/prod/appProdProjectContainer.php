<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYc7yxce\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYc7yxce/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerYc7yxce.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerYc7yxce\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerYc7yxce\appProdProjectContainer([
    'container.build_hash' => 'Yc7yxce',
    'container.build_id' => '24921491',
    'container.build_time' => 1610629384,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYc7yxce');
