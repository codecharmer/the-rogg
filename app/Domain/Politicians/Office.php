<?php

namespace TheRogg\Domain;

abstract class Office extends Enum
{
    const Governor        = 'Governor';
    const President       = 'President';
    const Representatives = 'House of Representatives';
    const Senate          = 'Senate';
    const Unelected       = 'Unelected';
    const VicePresident   = 'Vice President';
}