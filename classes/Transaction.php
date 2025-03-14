<?php

namespace classes;

interface Transaction
{
    public function deposit($amount);
    public function withdraw($amount);
}