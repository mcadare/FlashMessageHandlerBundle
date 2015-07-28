FlashMessageHandlerBundle
===================


FlashMessageHandlerBundle is an FlashMessageHandler integration bundle for Symfony.

It gives you the possibilty to declare your flash messages like so:

    flash_message_handler:
	    MSG_ORDER_AJOUT_OK: "Votre commande n<id> a bien ete enregistree"
	    MSG_ORDER_AJOUT_KO: "Une erreur s'est produite lors de l'enregistrement de la commande n<id>"
	    MSG_ORDER_AJOUT_ATTENTE: "Votre commande  n<id> est en attente de traitement"

The goal of this bundle is to manage flash messages via fired events.
example:
	

    $dispatcher = $this->container->get('event_dispatcher');

	 $flashMessageEvent = new FlashMessageEvent(
	     $code,
	     $level,
	     $parameters
	 );
	
	 $dispatcher->dispatch(Events::FLASH_MESSAGE, $flashMessageEvent);

This events can be configured and fired in an automated way thanks to the EventHubBunble.
