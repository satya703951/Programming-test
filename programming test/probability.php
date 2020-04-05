<?php
function rand50()
{
    return rand() & 1;
}
function rand75()
{
    return rand50() | rand50();
}
    for($i = 0; $i < 5; $i++)
        echo rand75();
?>