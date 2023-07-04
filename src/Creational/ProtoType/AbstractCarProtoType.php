<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\ProtoType;

abstract class AbstractCarProtoType
{
    /**
     * @var string $model
     */
    private string $model;

    /**
     * @var mixed $flag
     */
    private string $flag;

    /**
     * @return mixed
     */
    abstract public function __clone();

    /**
     * @param string $flag
     */
    public function setFlag(string $flag): void
    {
        $this->flag = $flag;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
}