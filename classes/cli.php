<?php
namespace vendor;

class Cli
{
    public function readFromCli()
    {
        $handle = $this->retrieveStdinResource();

        return $this->readInputFromStdin($handle);
    }

    private function retrieveStdinResource()
    {
        return fopen ("php://stdin","r");
    }

    private function readInputFromStdin($handle)
    {
        if (false === $handle) return false;

        return fgets($handle);
    }
}
