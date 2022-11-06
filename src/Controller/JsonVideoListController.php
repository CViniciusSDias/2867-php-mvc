<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Repository\VideoRepository;

class JsonVideoListController implements Controller
{
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        header('Content-Type: application/json');
        $videoList = array_map(function (Video $video): array {
            return [
                'url' => $video->url,
                'title' => $video->title,
                'file_path' => $video->getFilePath() === null ? null : '/img/uploads/' . $video->getFilePath(),
            ];
        }, $this->videoRepository->all());
        echo json_encode($videoList);
    }
}
