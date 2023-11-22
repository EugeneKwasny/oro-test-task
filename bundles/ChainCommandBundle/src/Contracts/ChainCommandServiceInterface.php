<?php

namespace App\Contracts;

interface ChainCommandServiceInterface
{
    public function addToChain();

    public function isInChain();
}