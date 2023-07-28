<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Iterator;
use IteratorAggregate;
use Traversable;

/**
 *
 */
class Collection implements IteratorAggregate
{
    /**
     * @var Item[]
     */
    private array $items;
    /**
     * @var ReversibleIterator|null
     */
    public ?ReversibleIterator $iterator;

    /**
     * @param array $items
     * @param ReversibleIterator|null $iterator
     */
    public function __construct(array $items = [], ?ReversibleIterator $iterator = null)
    {
        $this->items = $items;
        $this->setIterator($iterator ?? new OddIterator($this));
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function add(Item $item): self
    {
        $this->items[] = $item;
        return $this;
    }


    /**
     * @param string $name
     * @return $this
     */
    public function remove(string $name): self
    {
        foreach ($this->items as $key => $item){
           if ($item->getName() === $name)
               unset($this->items[$key]);
        }
        return $this;
    }


    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param ReversibleIterator $iterator
     * @param bool $reverse
     * @return self
     */
    public function setIterator(ReversibleIterator $iterator, ?bool $reverse = null): self
    {
        $this->iterator = $iterator->setCollection($this)->setReverse($reverse ?? $iterator->isReverse());
        return $this;
    }

    /**
     * @return ReversibleIterator|Traversable|null
     */
    public function getIterator()
    {
        return $this->iterator;
    }

    /**
     * @return void
     */
    public function dd()
    {
        return dd($this);
    }
}