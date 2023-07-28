<?php /** @noinspection PhpLanguageLevelInspection */

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Strategy;

use JetBrains\PhpStorm\ArrayShape;

/**
 *
 */
abstract class Strategy
{
    /**
     * @var string
     */
    protected string $alg;

    /**
     *
     */
    public function __construct()
    {
        $this->alg = $this->getAlg();
    }

    /**
     * @return string
     */
    abstract public function getAlg(): string;

    /**
     * @param string $data
     * @return array
     */
    abstract public function encrypt(string $data): array;
}