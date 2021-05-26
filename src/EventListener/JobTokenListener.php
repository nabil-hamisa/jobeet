<?php


namespace App\EventListener;
use App\Entity\Jobs;
use Doctrine\ORM\Event\LifecycleEventArgs;


class JobTokenListener
{
    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Jobs) {
            return;
        }

        if (!$entity->getToken()) {
            $entity->setToken(\bin2hex(\random_bytes(10)));
        }
    }
}