<?php

namespace MCadare\Symfony\FlashMessageHandlerBundle\Factory;

use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;
use MCadare\FlashMessageHandler\Factory\FlashMessageEventFactoryInterface;
use MCadare\Symfony\FlashMessageHandlerBundle\Event\FlashMessageSymfonyEvent;


/**
 * Classe FlashMessageEventFactory
 *
 * Symfony Flash message event factory
 *
 * Projet : mcadare_bundles
 * Fichier crיי par meven.cadare le 28/07/2015 א 10:51
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 * @package MCadare\FlashMessageHandler\Factory
 */
class FlashMessageSymfonyEventFactory implements FlashMessageEventFactoryInterface
{
    /**
     * @param $code
     * @param $level
     * @param array $parameters
     *
     * @return FlashMessageAwareInterface
     */
    public function build($code, $level, $parameters = [])
    {
        return new FlashMessageSymfonyEvent($code, $level, $parameters);
    }
}
