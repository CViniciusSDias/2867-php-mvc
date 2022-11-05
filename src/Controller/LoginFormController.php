<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LoginFormController implements Controller
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . '/../../views/login-form.php';
    }
}
