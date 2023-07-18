<?php

namespace ojy\LoginErrorFixer;

final class _AuthenticationData{

    /** @required */
    public string $displayName;

    /** @required */
    public string $identity;

    public string $titleId = ""; //TODO: find out what this is for

    /** @required */
    public string $XUID;

    /** @required  */
    public string $sandboxId;
}