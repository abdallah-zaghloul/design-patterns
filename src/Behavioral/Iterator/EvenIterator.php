<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Iterator;

/**
 *
 */
class EvenIterator extends ReversibleIterator
{
    /**
     * @var Collection
     */
    private Collection $collection;
    /**
     * @var int
     */
    private int $index;
    /**
     * @var bool
     */
    private bool $reverse;

    /**
     * @param Collection $collection
     * @param bool $reverse
     */
    public function __construct(Collection $collection, bool $reverse = false)
    {
        parent::__construct($reverse);
        $this->index = 1;
        $this->reverse = $reverse;
        $this->collection = $collection;
    }

    /**
     * @return void
     */
    public function rewind()
    {
        $this->index = $this->reverse ? count($this->collection->getItems()) - 2 : 1;
    }

    /**
     * @return Item|mixed
     */
    public function current()
    {
        return $this->collection->getItems()[$this->index];
    }

    /**
     * @return int|null
     */
    public function key(): ?int
    {
        return $this->index;
    }

    /**
     * @return void
     */
    public function next()
    {
        $this->index = $this->nextEven();
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->index]);
    }

    /**
     * @return int
     */
    private function nextEven(): int
    {
        $isEven = ($this->index % 2) === 0;
        $count = count($this->collection->getItems());

        if ($this->reverse){
            $nextEvenIndex = $this->index - 2;
            $end = -$count;
            if ($nextEvenIndex >= $end)
               $isEven ? $this->index = $nextEvenIndex : $this->index = $this->index - 1;
        }else{
            $nextEvenIndex = $this->index + 2;
            $end = $count;
            if ($nextEvenIndex <= $end)
                $isEven ? $this->index = $nextEvenIndex : $this->index = $this->index + 1;
        }

        return $nextEvenIndex;
    }
}