<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\Adapter;

class EngineAdapter implements IEngine
{
    /**
     * @var IThirdPartyEngine
     */
    private IThirdPartyEngine $engine;

    /**
     * @param IThirdPartyEngine $engine
     */
    public function __construct(IThirdPartyEngine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return string
     */
    public function startEngine(): string
    {
        return $this->engine->startTurbo();
    }
}