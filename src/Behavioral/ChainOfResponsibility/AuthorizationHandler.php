<?php

namespace AbdallahZaghloul\DesignPatterns\Behavioral\ChainOfResponsibility;

/**
 *
 */
class AuthorizationHandler extends Handler
{
    /**
     * @param Request $request
     * @return Request
     */
    public function handle(Request $request): Request
    {
        $request->setHandler(self::class);
        $id = $request->getId();

        if (isset($id) && $id < 10){
            $request->setAuthorized(true);
            $request->setDone(true);
        }

        return parent::handle($request);
    }

}