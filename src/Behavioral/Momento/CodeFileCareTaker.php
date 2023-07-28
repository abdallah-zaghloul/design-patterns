<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Momento;

/**
 *
 */
class CodeFileCareTaker
{
    /**
     * @var CodeFileOriginator
     */
    private CodeFileOriginator $originator;
    /**
     * @var CodeFileMomento[]
     */
    private array $momentos = [];

    /**
     * @param CodeFileOriginator $originator
     * @param CodeFileMomento[] $momentos
     */
    public function __construct(CodeFileOriginator $originator, array $momentos = [])
    {
        $this->originator = $originator;
        $this->momentos = $momentos;
    }

    /**
     * @return void
     */
    public function commit()
    {
        $this->momentos[] = $this->originator->save();
    }

    /**
     * @return void
     */
    public function rollBack()
    {
        $momento = array_pop($this->momentos);
        $this->originator->restore($momento);
    }

}