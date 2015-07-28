<?php

namespace MCadare\Symfony\FlashMessageHandlerBundle\Service;

use MCadare\FlashMessageHandler\Entity\FlashMessageInterface;
use MCadare\FlashMessageHandler\Service\FlashMessageServiceInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;


/**
 * Classe FlashMessageService
 *
 * proxy to symfony session flash bag
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 27/07/2015 à 16:26
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 * @package MCadare\Symfony\FlashMessageHandlerBundle\Service
 */
class SessionFlashMessageService implements FlashMessageServiceInterface
{

    /**
     * flash messages container
     *
     * @var FlashBagInterface
     */
    protected $flashBagService;

    /**
     * add a Flash Message
     *
     * @param FlashMessageInterface $flashMessage
     * @return mixed
     */
    public function addMessage(FlashMessageInterface $flashMessage)
    {
        $this->getFlashBagService()->add($flashMessage->getLevel(), $flashMessage->getMessage());
    }

    /**
     * remove a flash message
     *
     * @param FlashMessageInterface $flashMessage
     * @return mixed
     */
    public function deleteMessage(FlashMessageInterface $flashMessage)
    {
        // TODO: Implement deleteMessage() method.
    }

    /**
     * @return FlashBagInterface
     */
    public function getFlashBagService()
    {
        return $this->flashBagService;
    }

    /**
     * @param FlashBagInterface $flashBagService
     */
    public function setFlashBagService(FlashBagInterface $flashBagService)
    {
        $this->flashBagService = $flashBagService;
    }
}
