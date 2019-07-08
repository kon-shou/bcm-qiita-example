import BookRepository from '~/domain/Book/BookRepository'

export default (context, inject) => {
  const bookRepository = new BookRepository(context.$axios)

  inject('bookRepository', bookRepository)
}
