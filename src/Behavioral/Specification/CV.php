<?php
namespace AbdallahZaghloul\DesignPatterns\Behavioral\Specification;

/**
 *
 */
class CV
{
    /**
     * @var int
     */
    private int $yearsOfExperience;
    /**
     * @var int
     */
    private int $age;
    /**
     * @var array
     */
    private array $skills;
    /**
     * @var array
     */
    private array $languages;

    /**
     * @param int $yearsOfExperience
     * @param int $age
     * @param array $skills
     * @param array $languages
     */
    public function __construct(int $yearsOfExperience, int $age, array $skills, array $languages)
    {
        $this->yearsOfExperience = $yearsOfExperience;
        $this->age = $age;
        $this->skills = $skills;
        $this->languages = $languages;
    }

    /**
     * @return int
     */
    public function getYearsOfExperience(): int
    {
        return $this->yearsOfExperience;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

}