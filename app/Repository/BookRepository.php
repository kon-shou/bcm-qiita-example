<?php

namespace App\Repository;

use App\Eloquent\Book;
use Illuminate\Support\Collection;

class BookRepository
{
    public function find(int $id): ?Book
    {
        return Book::query()->find($id);
    }

    public function list(): Collection
    {
        return Book::query()->get();
    }

    public function create(string $title): Book
    {
        $book = new Book();
        $book->title = $title;

        $book->save();

        return $book;
    }

    public function delete(Book $book)
    {
        return Book::query()->find($book->id)->delete();
    }
}
