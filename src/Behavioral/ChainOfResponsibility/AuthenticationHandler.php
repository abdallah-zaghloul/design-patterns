<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 *
 */
class AuthenticationHandler extends Handler
{

    /**
     * @param Request $request
     * @return Request
     */
    public function handle(Request $request): Request
    {
        $request->setHandler(self::class);

        if ($request->getId()){
            $request->setAuthenticated(true);
            $this->getNext() ?? $this->setNext(new AuthorizationHandler());
        }

        return parent::handle($request);
    }
}