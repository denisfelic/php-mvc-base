<?php


/**
 * Method site
 *
 * @param string|null $param 
 *
 * @return string
 */
function site(string $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }

    return SITE["root"];
}



/**
 * Method asset
 *
 * @param string $path 
 *
 * @return string
 */
function asset(string $path): string
{
    return SITE["root"] . "/views/assets/$path";
}


function flash(string $type, string $message): ?string
{
    /**
     * create a new message
     */
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
        return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
    }


    return null;
}
