<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\TemplateMethod\HomePage;
use AbdallahZaghloul\DesignPatterns\Behavioral\TemplateMethod\LoginPage;
use PHPUnit\Framework\TestCase;
class TemplateMethodTest extends TestCase
{
    public function testCanRenderHomePage()
    {
        $homePage = new HomePage();
        $renderedHomePage = $homePage->render();

        $this->assertContains("<header> Home Page CSS and JS Files </header>", $renderedHomePage);
        $this->assertContains("<nav> Navigation List </nav>", $renderedHomePage);
        $this->assertContains("<body> Home News Feeds </body>", $renderedHomePage);
        $this->assertContains("<footer> Contact US </footer>", $renderedHomePage);

        $this->assertNotContains("<header> Login Page CSS and JS Files </header>", $renderedHomePage);
        $this->assertNotContains("<body> Login Form </body>", $renderedHomePage);
    }

    public function testCanRenderLoginPage()
    {
        $loginPage = new LoginPage();
        $renderedLoginPage = $loginPage->render();

        $this->assertContains("<header> Login Page CSS and JS Files </header>", $renderedLoginPage);
        $this->assertContains("<nav> Navigation List </nav>", $renderedLoginPage);
        $this->assertContains("<body> Login Form </body>", $renderedLoginPage);
        $this->assertContains("<footer> Contact US </footer>", $renderedLoginPage);

        $this->assertNotContains("<header> Home Page CSS and JS Files </header>", $renderedLoginPage);
        $this->assertNotContains("<body> Home News Feeds </body>", $renderedLoginPage);
    }

}