<?php

function escape($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'utf-8');
}