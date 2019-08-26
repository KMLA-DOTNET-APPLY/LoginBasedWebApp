var app = new Vue({
  el: '#app',
  data: {
    product: 'Korean Book',
    image: './assets/korean-book-front.jpg',
    inStock: true,
    details: ["KMLA textbook", "Slightly Used", "For students and teachers"],
    variants: [
      {
        variantId: 0001,
        variantSide: "front"
      },
      {
        variantId: 0002,
        variantSide: "back"
      }
    ],
  }
})
