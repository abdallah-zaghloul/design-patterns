<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Iterator;
use Iterator;

/**
 *
 */
abstract class ReversibleIterator implements Iterator
{
    /**
     * @var bool
     */
    private bool $reverse;
    /**
     * @var Collection
     */
    private Collection $collection;

    /**
     * @param bool $reverse
     */
    public function __construct(bool $reverse = false)
    {
        $this->reverse = $reverse;
    }


    /**
     * @param bool $reverse
     * @return $this
     */
    public function setReverse(bool $reverse): self
    {
        $this->reverse = $reverse;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReverse(): bool
    {
        return $this->reverse;
    }

    /**
     * @return Collection
     */
    public function getCollection(): Collection
    {
        return $this->collection;
    }


    /**
     * @param Collection $collection
     * @return $this
     */
    public function setCollection(Collection $collection): self
    {
        $this->collection = $collection;
        return $this;
    }
}