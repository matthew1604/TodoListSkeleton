<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class TodoListController
{
    #[Route('/tasks', name: 'get_todos')]
    public function tasks(): Response
    {
        $todos = [
            ['id' => 1, 'title' => 'Faire les courses', 'completed' => false],
            ['id' => 2, 'title' => 'Promener le chien', 'completed' => false],
            ['id' => 3, 'title' => 'Lire un livre', 'completed' => true],
        ];

        return new JsonResponse($todos);
    }
}
