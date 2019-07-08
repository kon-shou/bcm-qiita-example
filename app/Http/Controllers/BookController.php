<?php

namespace App\Http\Controllers;

use App\Repository\BookRepository;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function list()
    {
        return $this->bookRepository->list();
    }

    public function create(Request $request)
    {
        $title = $request->get('title');
        if (!$title) {
            throw new ValidationException('titleは必須です');
        }

        return $this->bookRepository->create($title);
    }

    public function delete(int $id)
    {
        $book = $this->bookRepository->find($id);
        if (!$book) {
            throw new ValidationException('削除対象のbookが存在しません');
        }

        $this->bookRepository->delete($book);

        return [];
    }
}
