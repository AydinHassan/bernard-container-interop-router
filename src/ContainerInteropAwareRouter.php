<?php

namespace TrashPanda\BernardContainerInteropRouter;

use Bernard\Router\SimpleRouter;
use Interop\Container\ContainerInterface;


/**
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class ContainerInteropAwareRouter extends SimpleRouter
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     * @param array              $receivers
     */
    public function __construct(ContainerInterface $container, array $receivers = [])
    {
        $this->container = $container;
        parent::__construct($receivers);
    }

    /**
     * {@inheritdoc}
     */
    protected function get($name)
    {
        $serviceId = parent::get($name);

        return $this->container->get($serviceId);
    }

    /**
     * {@inheritdoc}
     */
    protected function accepts($receiver)
    {
        return $this->container->has($receiver);
    }
}
