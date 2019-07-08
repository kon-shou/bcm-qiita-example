import BookRepository from '~/domain/Book/BookRepository'

declare module 'vue/types/vue' {
  interface Vue {
    $bookRepository: BookRepository
  }
}
