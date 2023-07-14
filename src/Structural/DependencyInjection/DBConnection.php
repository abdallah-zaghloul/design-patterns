<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\DependencyInjection;

class DBConnection
{
    /**
     * @var DBConfig
     */
    private DBConfig $config;

    /**
     * @param DBConfig $config
     */
    public function __construct(DBConfig $config)
    {
        $this->config = $config;
    }


    /**
     * @return string
     */
    public function getConnectionString(): string
    {
        return sprintf("%s://%s:%s@%s:%s/%s",
            $this->config->getDatabaseType(),
            $this->config->getUserName(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort(),
            $this->config->getDatabaseName(),
        );

    }

}