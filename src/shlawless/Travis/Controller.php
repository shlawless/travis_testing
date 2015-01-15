<?php

namespace shlawless\Travis;

use Symfony\Component\HttpFoundation\Request;

class Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function indexAction(Request $request)
    {
        if ($request->get('format')) {
            return json_encode(['format' => $request->get('format')]);
        }

    }
}