<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Strategy\Base64Encryption;
use AbdallahZaghloul\DesignPatterns\Behavioral\Strategy\EncryptionContext;
use AbdallahZaghloul\DesignPatterns\Behavioral\Strategy\Md5Encryption;
use PHPUnit\Framework\TestCase;
class StrategyTest extends TestCase
{
   private const DATA = "test data";
   private EncryptionContext $encryptionContext;
   private Base64Encryption $base64Encryption;
   private Md5Encryption $md5Encryption;

   protected function setUp()
   {
       parent::setUp();

       $this->base64Encryption = new Base64Encryption();
       $this->md5Encryption = new Md5Encryption();
       $this->encryptionContext = new EncryptionContext($this->base64Encryption);
   }

   public function testCanUseBase64Encryption()
   {
       $this->encryptionContext->setStrategy($this->base64Encryption);
       [$alg, $encryptedString] = ["base64", base64_encode(self::DATA)];
       $this->assertEquals($encryptedString, $this->encryptionContext->encryptString(self::DATA)['data']);
       $this->assertEquals($alg, $this->encryptionContext->encryptString(self::DATA)['alg']);
   }

   public function testCanUseMd5Encryption()
   {
       $this->encryptionContext->setStrategy($this->md5Encryption);
       [$alg, $encryptedString] = ["md5", md5(self::DATA)];
       $this->assertEquals($encryptedString, $this->encryptionContext->encryptString(self::DATA)['data']);
       $this->assertEquals($alg, $this->encryptionContext->encryptString(self::DATA)['alg']);
   }

   public function testCanUseMultipleEncryptionStrategy()
   {
       $this->encryptionContext->setStrategy($this->md5Encryption);
       ["alg" => $md5Alg, "data" => $md5EncryptedString] = $this->encryptionContext->encryptString(self::DATA);

       $this->encryptionContext->setStrategy($this->base64Encryption);
       ["alg" => $base64Alg, "data" => $base64EncryptedString] = $this->encryptionContext->encryptString(self::DATA);

       $this->assertNotEquals($md5Alg, $base64Alg);
       $this->assertNotEquals($md5EncryptedString, $base64EncryptedString);
   }
}