<?php

namespace SilasJoisten\Sonata\MultiUploadBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Route\RouteCollectionInterface;

class MultiUploadAdminExtension extends AbstractAdminExtension
{
    public function configureRoutes(AdminInterface $admin, RouteCollectionInterface $collection): void
    {
        $collection->add('multi_upload', 'multi-upload');
    }
}
