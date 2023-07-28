<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\Momento;

/**
 *
 */
class CodeFile
{
    /**
     * @var array|string[]
     */
    private array $lines = ["<?php"];

    /**
     * @param string $line
     * @return void
     */
    public function addLine(string $line)
    {
        $this->lines[] = $line;
    }

    /**
     * @return array|string[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

}