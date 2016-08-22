<?php

namespace LanguageServer\Protocol\Window;

class ShowMessageParams
{
    /**
     * The message type. See {@link MessageType}
     *
     * @var int
     */
    public $type;

    /**
     * The actual message
     *
     * @var string
     */
    public $message;

    /**
     * The message action items to present.
     *
     * @var MessageActionItem[]|null
     */
    public $actions;
}