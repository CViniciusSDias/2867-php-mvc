<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;

class VideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        session_start();
        if (!array_key_exists('logado', $_SESSION)) {
            header('Location: /login');
            return;
        }

        $videoList = $this->videoRepository->all();
        require_once __DIR__ . '/../../views/video-list.php';
    }
}
