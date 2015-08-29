<?php

namespace TheRogg\Domain;

abstract class Party extends Enum
{
    const Democrat    = 'Democrat';
    const Republican  = 'Republican';
    const Libertarian = 'Libertarian';
    const Independent = 'Independent';
    const Green       = 'Green';
    const Other       = 'Other';
}