<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LoginFormController implements Controller
{
    public function processaRequisicao(): void
    {
        if ($_SESSION['logado'] === true) {
            header('Location: /');
            return;
        }
        require_once __DIR__ . '/../../views/login-form.php';
    }
}
