<?php

namespace MCadare\Symfony\FlashMessageHandlerBundle\Event;

use MCadare\FlashMessageHandler\Event\FlashMessageAwareInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Classe FlashMessageSymfonyEvent
 *
 * Symfony event for Flash messages (has to extends Symfony\Component\EventDispatcher\Event)
 *
 * Projet : mcadare_bundles
 * Fichier créé par meven.cadare le 21/07/2015 à 14:09
 *
 * @copyright Copyright mcadare_bundles © 2015, All Rights Reserved
 * @author    MCADARE
 */
class FlashMessageSymfonyEvent extends Event implements FlashMessageAwareInterface
{
    /**
     * flash message unique reference
     *
     * @var string
     */
    protected $code;

    /**
     * flash message criticity level
     *
     * @var string
     */
    protected $level;

    /**
     * associative array of pattern and values to replace in the flash message content
     *
     * @var array
     */
    protected $parameters;

    public function __construct($code, $level, $parameters = [])
    {
        $this->code       = $code;
        $this->level      = $level;
        $this->parameters = $parameters;
    }

    public function getFlashMessageCode()
    {
        return $this->code;
    }

    public function getFlashMessageParameters()
    {
        return $this->parameters;
    }

    public function getLevel()
    {
        return $this->level;
    }
}
