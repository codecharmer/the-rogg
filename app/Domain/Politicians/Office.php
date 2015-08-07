<?php

namespace TheRogg\Domain;

abstract class Office extends Enum
{
    const Senate          = 'Senate';
    const Representatives = 'House of Representatives';
    const Unelected       = 'Unelected';
}