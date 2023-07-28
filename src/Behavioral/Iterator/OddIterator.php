<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Iterator;

/**
 *
 */
class OddIterator extends ReversibleIterator
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
    public function __construct(Collection $collection , bool $reverse = false)
    {
        parent::__construct($reverse);
        $this->index = 0;
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    /**
     * @return void
     */
    public function rewind()
    {
        $this->index = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
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
        $this->index = $this->nextOdd();
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
    private function nextOdd(): int
    {
        $isOdd = ($this->index % 2) !== 0;
        $count = count($this->collection->getItems());

        if ($this->reverse){
            $nextOddIndex = $this->index - 2;
            $end = -$count;
            if ($nextOddIndex >= $end)
               $isOdd ? $this->index = $nextOddIndex : $this->index = $this->index - 1;
        }else{
            $nextOddIndex = $this->index + 2;
            $end = $count;
            if ($nextOddIndex <= $end)
                $isOdd ? $this->index = $nextOddIndex : $this->index = $this->index + 1;
        }

        return $nextOddIndex;
    }
}