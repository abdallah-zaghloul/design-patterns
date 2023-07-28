<?php /** @noinspection DuplicatedCode */

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\AgeSpecification;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\CV;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\LanguageSpecification;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\MandatorySpecification;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\OptionalSpecification;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\SkillSpecification;
use AbdallahZaghloul\DesignPatterns\Behavioral\Specification\YearsOfExperienceSpecification;
use PHPUnit\Framework\TestCase;
class SpecificationTest extends TestCase
{
    private YearsOfExperienceSpecification $seniorExperienceSpecification;
    private YearsOfExperienceSpecification $juniorExperienceSpecification;
    private AgeSpecification $seniorAgeSpecification;
    private AgeSpecification $juniorAgeSpecification;
    private LanguageSpecification $phpSpecification;
    private LanguageSpecification $javaSpecification;
    private SkillSpecification $gitSpecification;
    private MandatorySpecification $seniorSpecification;
    private MandatorySpecification $juniorSpecification;
    private OptionalSpecification $optionalSpecification;

    protected function setUp()
    {
        parent::setUp();

        $this->seniorExperienceSpecification = new YearsOfExperienceSpecification(5);
        $this->juniorExperienceSpecification = new YearsOfExperienceSpecification(2);

        $this->seniorAgeSpecification = new AgeSpecification(35,40);
        $this->juniorAgeSpecification = new AgeSpecification(22,30);

        $this->phpSpecification = new LanguageSpecification("PHP");
        $this->javaSpecification = new LanguageSpecification("JAVA");

        $this->gitSpecification = new SkillSpecification("Git");
        $this->optionalSpecification = new OptionalSpecification($this->phpSpecification, $this->javaSpecification);


        $this->seniorSpecification = new MandatorySpecification(
            $this->seniorExperienceSpecification,
            $this->seniorAgeSpecification,
            $this->gitSpecification,
            $this->optionalSpecification
        );

        $this->juniorSpecification = new MandatorySpecification(
            $this->juniorExperienceSpecification,
            $this->juniorAgeSpecification,
            $this->gitSpecification,
            $this->optionalSpecification
        );
    }

    public function testCanHireSeniorBackEndDeveloper()
    {
        $cv = new CV(7, 38, ['Git','Docker'],['PHP','JAVA']);
        $this->assertEquals(true, $this->seniorSpecification->isSatisfied($cv));
    }

    public function testCanRejectSeniorBackEndDeveloper()
    {
        $cv = new CV(2, 15, ['Git','Docker'],['JavaScript','GoLang']);
        $this->assertEquals(false, $this->seniorSpecification->isSatisfied($cv));
    }


    public function testCanHireJuniorBackEndDeveloper()
    {
        $cv = new CV(2, 24, ['Git'],['PHP']);
        $this->assertEquals(true, $this->juniorSpecification->isSatisfied($cv));
    }

    public function testCanRejectJuniorBackEndDeveloper()
    {
        $cv = new CV(1, 15, ['Git'],['PHP']);
        $this->assertEquals(false, $this->juniorSpecification->isSatisfied($cv));
    }



}