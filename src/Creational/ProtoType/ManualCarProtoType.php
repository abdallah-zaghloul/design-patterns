<?php
namespace AbdallahZaghloul\DesignPatterns\Creational\ProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    /**
     * @return void
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
        // Type Your Creation Logic Here
        $this->setModel('Manual');
        $this->setFlag('Manual Car Flag No '.rand(0,999));
    }
}