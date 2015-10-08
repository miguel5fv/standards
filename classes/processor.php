<?php
namespace vendor;

use vendor/Cli;

class Processor
{
    CONST   A = 1;
    CONST   B = 1;
    CONST   C = 1;
    CONST   E = 2.718;

    protected $injection;

    public function __construct(array $injection)
    {
        $this->injection  = $injection;
    }

    public function run()
    {
        $input  = $this->injection['cli']->readFromCli();
        if (!$this->isNumeric($input)) return false;

        return $this->gauss($input);
    }

    private function gauss($incognita)
    {
        return self::A * self::E - pow($incognita - self::B, 2)/(2 * pow(self::C, 2));
    }

    private function isNumeric($string)
    {
        return is_numeric($string);
    }
}
