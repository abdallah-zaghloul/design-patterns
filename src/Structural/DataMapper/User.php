<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\DataMapper;

class User
{
    /**
     * @var string|null
     */
    private ?string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $password;


    /**
     * @param string $name
     * @param string $password
     * @param string|null $id
     */
    public function __construct(string $name , string $password, ?string $id = null)
    {
        $this->name = $name;
        $this->password = $password;
        $this->setId($id);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    /**
     * @param string|null $id
     * @return void
     */
    private function setId(?string $id = null): void
    {
        $this->id = $id ?? uniqid();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'=> $this->getId(),
            'name'=> $this->getName(),
            'password'=> $this->getPassword(),
        ];
    }
}