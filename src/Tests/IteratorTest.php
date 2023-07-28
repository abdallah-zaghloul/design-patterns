<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Iterator\Collection;
use AbdallahZaghloul\DesignPatterns\Behavioral\Iterator\EvenIterator;
use AbdallahZaghloul\DesignPatterns\Behavioral\Iterator\Item;
use AbdallahZaghloul\DesignPatterns\Behavioral\Iterator\OddIterator;
use PHPUnit\Framework\TestCase;
class IteratorTest extends TestCase
{

    /**
     * @var Collection
     */
    private Collection $collection;

    /**
     * @var string[]
     */
    private array $expectedOddNames;

    /**
     * @var string[]
     */
    private array $expectedReversedOddNames;

    /**
     * @var string[]
     */
    private array $expectedEvenNames;

    /**
     * @var string[]
     */
    private array $expectedReversedEvenNames;


    protected function setUp()
    {
        parent::setUp();

        $items = [
            new Item($penName = 'pen','red pen'),
            new Item($rulerName = 'ruler','plastic ruler'),
            new Item($paperName = 'paper','A4 paper'),
            new Item($bookName = 'book','science book')
        ];

        $this->collection = new Collection($items);

        $this->expectedOddNames = [$penName, $paperName];
        $this->expectedReversedOddNames = [$bookName, $rulerName];

        $this->expectedEvenNames = [$rulerName, $bookName];
        $this->expectedReversedEvenNames = [$paperName, $penName];
    }

    public function testCanUseOddIterator()
    {
        $oddIterator = new OddIterator($this->collection);
        $this->collection->setIterator($oddIterator);

        $collectionOddNames = [];
        foreach ($this->collection as $item){
            $collectionOddNames[] = $item->getName();
        }

        $this->assertEquals($this->expectedOddNames, $collectionOddNames);
    }

    public function testCanUseReversedOddIterator()
    {
        $reversedOddIterator = new OddIterator($this->collection,true);
        $this->collection->setIterator($reversedOddIterator);

        $reversedCollectionOddNames = [];
        foreach ($this->collection as $item){
            $reversedCollectionOddNames[] = $item->getName();
        }

        $this->assertEquals($this->expectedReversedOddNames, $reversedCollectionOddNames);
    }

    public function testCanUseEvenIterator()
    {
        $evenIterator = new EvenIterator($this->collection);
        $this->collection->setIterator($evenIterator);
        $collectionEvenNames = [];
        foreach ($this->collection as $item){
            $collectionEvenNames[] = $item->getName();
        }

        $this->assertEquals($this->expectedEvenNames, $collectionEvenNames);
    }

    public function testCanUseReversedEvenIterator()
    {
        $reversedEvenIterator = new EvenIterator($this->collection, true);
        $this->collection->setIterator($reversedEvenIterator);
        $reversedCollectionEvenNames = [];
        foreach ($this->collection as $item){
            $reversedCollectionEvenNames[] = $item->getName();
        }

        $this->assertEquals($this->expectedReversedEvenNames, $reversedCollectionEvenNames);
    }

}