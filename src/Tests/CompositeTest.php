<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\Composite\BigBox;
use AbdallahZaghloul\DesignPatterns\Structural\Composite\GiftBox;
use AbdallahZaghloul\DesignPatterns\Structural\Composite\SimpleBox;
use PHPUnit\Framework\TestCase;
class CompositeTest extends TestCase
{
    public function testCanGetTotalPriceOfPackageTree()
    {
        [$item_1 , $item_2] = [(new SimpleBox(300)) , (new SimpleBox(200))];
        $bigBox = (new BigBox([$item_1 , $item_2]));
        $this->assertEquals(500, $bigBox->getPrice());
    }

    public function testCanGetTotalPriceOfPackageTreeWithActions()
    {
        [$item_1 , $item_2] = [(new SimpleBox(300)) , (new SimpleBox(200))];
        $bigBox = (new BigBox([$item_1 , $item_2]));
        $giftBox = (new GiftBox(100 , 50));
        $bigBox->add($giftBox);
        $bigBox->remove($item_2);
        $this->assertEquals(450, $bigBox->getPrice());
    }

}