<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\Visitor;

/**
 *
 */
interface IVisitor
{
    /**
     * @param Cairo $cairo
     * @return mixed
     */
    public function visitCairo(Cairo $cairo);

    /**
     * @param London $london
     * @return mixed
     */
    public function visitLondon(London $london);

    /**
     * @param Sydney $sydney
     * @return mixed
     */
    public function visitSydney(Sydney $sydney);

    /**
     * @param Bali $bali
     * @return mixed
     */
    public function visitBali(Bali $bali);
}