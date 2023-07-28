<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Momento;

/**
 *
 */
class CodeFileMomento implements IMomento
{
    /**
     * @var CodeFile
     */
    private CodeFile $snapShot;

    /**
     * @param CodeFile $codeFile
     */
    public function __construct(CodeFile $codeFile)
    {
        $this->snapShot = $codeFile;
    }

    /**
     * @return CodeFile
     */
    public function getSnapShot(): CodeFile
    {
        return $this->snapShot;
    }
}