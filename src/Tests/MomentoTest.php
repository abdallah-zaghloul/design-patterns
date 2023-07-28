<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Momento\CodeFileCareTaker;
use AbdallahZaghloul\DesignPatterns\Behavioral\Momento\CodeFileOriginator;
use PHPUnit\Framework\TestCase;
class MomentoTest extends TestCase
{
    private CodeFileOriginator $originator;
    private CodeFileCareTaker $careTaker;
    private array $lines;
    protected function setUp()
    {
        parent::setUp();
        $this->originator = new CodeFileOriginator();
        $this->careTaker = new CodeFileCareTaker($this->originator);
        $this->lines = $this->originator->getCodeFile()->getLines();
    }

    public function testCanSaveCodeFileUpdates()
    {
        $newLine = '$name = "save";';
        $this->lines[] = $newLine;
        $this->originator->addLine($newLine);
        $this->careTaker->commit();
        $codeFile = $this->originator->getCodeFile();
        $this->assertEquals(2, count($codeFile->getLines()));
        $this->assertEquals($this->lines, $codeFile->getLines());
    }


    public function testCanRestoreCodeFileUpdates()
    {
        $restore = '$name = "restore";';
        $updates = '$name = "updates";';
        $this->lines[] = $restore;

        $this->originator->addLine($restore);
        $this->careTaker->commit();
        $this->originator->addLine($updates);
        $codeFile = $this->originator->getCodeFile();

        $updatedLines = array_merge($this->lines,[$updates]);

        $this->assertEquals($updatedLines,$codeFile->getLines());

        $this->careTaker->rollBack();
        $codeFile = $this->originator->getCodeFile();

        $this->assertEquals(2, count($codeFile->getLines()));
        $this->assertEquals($this->lines, $codeFile->getLines());
    }



}