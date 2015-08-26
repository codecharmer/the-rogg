<?php

namespace TheRogg\Domain;

abstract class Party extends Enum
{
    const Democrat    = 'Democrat';
    const Republican  = 'Republican';
    const Independent = 'Libertarian';
    const Green       = 'Green';
    const Other       = 'Other';
}