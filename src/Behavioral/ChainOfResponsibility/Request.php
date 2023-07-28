<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 *
 */
class Request
{
    /**
     * @var bool
     */
    private bool $done = false;

    /**
     * @var int|null
     */
    private ?int $id = null;

    /**
     * @var bool
     */
    private bool $authorized = false;

    /**
     * @var bool
     */
    private bool $authenticated = false;

   /**
     * @var string|null
     */
    private ?string $handler = null;

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->done;
    }

    /**
     * @param bool $done
     */
    public function setDone(bool $done): void
    {
        $this->done = $done;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return bool
     */
    public function isAuthorized(): bool
    {
        return $this->authorized;
    }

    /**
     * @param bool $authorized
     */
    public function setAuthorized(bool $authorized): void
    {
        $this->authorized = $authorized;
    }

    /**
     * @return string|null
     */
    public function getHandler(): ?string
    {
        return $this->handler;
    }

    /**
     * @param string|null $handler
     */
    public function setHandler(?string $handler): void
    {
        $this->handler = $handler;
    }

    /**
     * @return bool
     */
    public function isAuthenticated(): bool
    {
        return $this->authenticated;
    }

    /**
     * @param bool $authenticated
     */
    public function setAuthenticated(bool $authenticated): void
    {
        $this->authenticated = $authenticated;
    }

}