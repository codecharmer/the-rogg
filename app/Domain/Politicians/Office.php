<?php

namespace TheRogg\Domain;

abstract class Office extends Enum
{
    const Governor       = 'Governor';
    const President      = 'President';
    const Representative = 'Representative';
    const Senator        = 'Senator';
    const Unelected      = 'Unelected';
    const VicePresident  = 'Vice President';
}