<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Momento;

/**
 *
 */
class CodeFileOriginator
{
    /**
     * @var CodeFile
     */
    private CodeFile $codeFile;

    /**
     *
     */
    public function __construct()
    {
        $this->codeFile = new CodeFile();
    }

    /**
     * @param string $line
     * @return void
     */
    public function addLine(string $line)
    {
        $this->codeFile->addLine($line);
    }

    /**
     * @return IMomento
     */
    public function save(): IMomento
    {
        return new CodeFileMomento(clone $this->codeFile);
    }

    /**
     * @param IMomento $momento
     * @return void
     */
    public function restore(IMomento $momento)
    {
        $this->codeFile = $momento->getSnapShot();
    }

    /**
     * @return CodeFile
     */
    public function getCodeFile(): CodeFile
    {
        return $this->codeFile;
    }
}