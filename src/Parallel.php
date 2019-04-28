<?php

namespace Rubix\ML;

interface Parallel
{
    /**
     * Set the maximum number of processes to run in parallel.
     *
     * @param int $n
     */
    public function setWorkers(int $n) : void;

    /**
     * Return the maximum number of workers.
     *
     * @return int
     */
    public function workers() : int;
}