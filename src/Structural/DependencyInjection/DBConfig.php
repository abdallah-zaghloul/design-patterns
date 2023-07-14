<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\DependencyInjection;

class DBConfig
{
    /**
     * @var string
     */
    private string $databaseType = 'mysql';

    /**
     * @var string
     */
    private string $host;

    /**
     * @var string
     */
    private string $userName;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var string
     */
    private string $port;

    /**
     * @var string
     */
    private string $databaseName;

    /**
     * @param string $databaseType
     * @param string $host
     * @param string $userName
     * @param string $password
     * @param string $port
     * @param string $databaseName
     */
    public function __construct(string $databaseType,string $host, string $userName, string $password, string $port, string $databaseName)
    {
        $this->databaseType = $databaseType;
        $this->host = $host;
        $this->userName = $userName;
        $this->password = $password;
        $this->port = $port;
        $this->databaseName = $databaseName;
    }

    /**
     * @return string
     */
    public function getDatabaseType(): string
    {
        return $this->databaseType;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }


}