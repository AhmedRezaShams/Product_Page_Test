<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
  <!-- <script src="{{ asset('assets/js/product_page.js') }}"></script> -->

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;1,800&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Proxima Nova:wght@400;700&display=swap" />
</head>

<body>

  <div class="product-page">
    <section class="columns-parent">
      <header class="columns">
        <div class="fashionhub-wrapper">
          <a class="fashionhub">FashionHub</a>
        </div>
        <div class="right-column" data-bs-toggle="modal" data-bs-target="#Product_modal">

          <div class="rectangle-parent" style="cursor: pointer;">
            <div class="frame-child"></div>
            <img class="image-icon" loading="lazy" alt="" src="{{ asset('assets/image/frame.svg') }}" />

          </div>



          <!-- <div class="wrapper">
            <img class="icon" loading="lazy" alt="" src="{{ asset('assets/image/3.svg') }}" />
          </div> -->
        </div>
      </header>
      <div class="carousel-navigation">
        <div class="rectangle-group">

          <div class="carousel">
            <div class="carousel-large">
              <img id="largeImage" src="{{ asset('product-image/' . $products->first()->image) }}" alt="Large Image">
            </div>
            <div class="carousel-thumbnails">
              @foreach ($products->take(4)  as $product)
          <img class="thumbnail" src="{{ asset('product-image/'. $product->image) }}"
          alt="Thumbnail {{ $loop->index + 1 }}"
          onclick="updateProductDetails('{{ $product->image }}', '{{ $product->name }}', '{{ $product->description }}', '{{ $product->price }}', '{{ $product->subtitle }}','{{$product->benefits}}','{{ $product->details }}')">
         
        @endforeach
        
            </div>

          </div>



          <div class="frame-parent">
            <!-- <div class="home-parent">
                <a class="home">Home</a>
                <img
                  class="category-list-icon"
                  alt=""
                  src="{{ asset('assets/image/frame-1.svg') }}" 
                />

                <a class="decoration">Decoration</a>
                <img
                  class="category-list-icon"
                  alt=""
                  src="{{ asset('assets/image/frame-1.svg') }}" 
                />

                <a class="furniture">Furniture</a>
                <img
                  class="category-list-icon"
                  alt=""
                  src="{{ asset('assets/image/frame-1.svg') }}" 
                />

                <a class="storage">Storage</a>
                <img
                  class="category-list-icon"
                  alt=""
                  src="{{ asset('assets/image/frame-1.svg') }}" 
                />

                <a class="sideboard">Sideboard</a>
              </div> -->
            <div class="home-parent">
              <a class="home" href="#">Home</a>
              <img class="category-list-icon" alt="Home Icon" src="{{ asset('assets/image/frame-1.svg') }}" />

              <a class="decoration" href="#">Decoration</a>
              <img class="category-list-icon" alt="Decoration Icon" src="{{ asset('assets/image/frame-1.svg') }}" />

              <a class="furniture" href="#">Furniture</a>
              <img class="category-list-icon" alt="Furniture Icon" src="{{ asset('assets/image/frame-1.svg') }}" />

              <a class="storage" href="#">Storage</a>
              <img class="category-list-icon" alt="Storage Icon" src="{{ asset('assets/image/frame-1.svg') }}" />

              <a class="sideboard" href="#">Sideboard</a>
            </div>

            <div class="product-title">
              <h2 class="embrace-sideboard"  id="product-name">{{$product->name }}</h2>
              <div class="teixeira-design-studio" id="productSubtitle">{{ $product->subtitle}}</div>
            </div>
            <div class="frame-inner"></div>
            <div class="rating-container-wrapper">
              <div class="rating-container">
                <div class="rating-stars">
                  <b class="stars" id="productPrice">${{ $products->first()->price }}</b>
                </div>
                <div class="recommendation">
                  <div class="review-count-parent">
                    <div class="review-count">
                      <img class="category-list-icon" alt="" src="{{ asset('assets/image/frame-5.svg') }}" />

                      <div class="recommendation-label">4.8</div>
                    </div>
                    <button class="review-count1">
                      <img class="category-list-icon" alt="" src="{{ asset('assets/image/frame-6.svg') }}" />

                      <div class="reviews">67 Reviews</div>
                    </button>
                  </div>
                  <div class="of-buyers-have-container">
                    <span class="span">93%</span>
                    <span class="of-buyers-have">
                      of buyers have recommended this.</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-inner"></div>
            <div class="choose-a-color">Choose a Color</div>
            <div class="color-options">
              <div class="color-swatches-parent">
                <div class="color-swatches">
                  <div class="color-swatch" style="background-color: #ECDECC;"></div>
                  <div class="color-swatch" style="background-color: #BBD278;"></div>
                  <div class="color-swatch" style="background-color: #BBC1F8;"></div>
                  <div class="color-swatch" style="background-color: #FFD3F8;"></div>
                  <div class="color-swatch" style="background-color: #FFD3F8; border-radius: 50%;
    background: linear-gradient(to bottom,#FFD3F8 50% , #BBD278 50%);"></div>
                </div>

                <div class="rectangle-div"></div>
              </div>
              <!-- Other elements remain unchanged -->
            </div>
            <!-- <div class="color-picker">
              <div class="choose-a-color">Choose a Color</div>
              <div class="color-options">
                <div class="color-swatches-parent">
                  <div class="color-swatches">
                    <div class="swatch"></div>
                    <img class="vector-stroke-icon" loading="lazy" alt=""
                      src="{{ asset('assets/image/vector-stroke.svg') }}" />
                  </div>
                  <div class="rectangle-div"></div>
                </div>
                <div class="rectangle-container">
                  <div class="frame-child1"></div>
                  <div class="frame-child2"></div>
                </div>
                <div class="rectangle-container">
                  <div class="frame-child3"></div>
                  <div class="frame-child2"></div>
                </div>
                <div class="rectangle-container">
                  <div class="frame-child5"></div>
                  <div class="frame-child2"></div>
                </div>
                <div class="rectangle-container">
                  <div class="frame-child7"></div>
                  <div class="frame-child2"></div>
                </div>
              </div>
            </div> -->

            <div class="frame-inner"></div>
            <div class="size-picker">
              <div class="choose-a-size">Choose a Size</div>
              <div class="size-options">
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="small" class="size-radio">
                  </div>
                  <div class="small">Small</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="medium" class="size-radio">
                  </div>
                  <div class="small">Medium</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="large" class="size-radio">
                  </div>
                  <div class="small">Large</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="extra large" class="size-radio">
                  </div>
                  <div class="small">Extra large</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="xxl" class="size-radio">
                  </div>
                  <div class="small">XXL</div>
                </button>
              </div>

            </div>
            <div class="frame-inner"></div>
            <div class="content">

              <div class="rectangle-parent4">
                <div class="frame-child15">
                
                </div>
                <div class="input-wrapper">
                  <button class="decrement-button"><b class="input">-</b></button>
                </div>
                <b class="quantity-label">0</b>
                <div class="small-size-inner">
                  <button class="increment-button"><b class="b">+</b></button>
                </div>
              </div>


              <div class="rectangle-parent5" id="add-to-cart-button">
                <div class="frame-child16"></div>
                <div class="cart-label" id="price-label">${{ $products->first()->price }}</div>
                <div class="add-button">
                  <div class="add-to-cart">Add To Cart</div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>
    <section class="product-details">
      <div class="main-parent">
        <div class="main">
          <div class="product-info">
            <div class="description-container-parent">
              <div class="description-container">
                <div class="title-container">


                  <div class="image-carousel">
                    <div class="description-icon-parent">
                      <div class="description-icon"></div>
                      <div class="description">Description</div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="description-image">
                <div class="description-image-child"></div>
                <div class="image-placeholder"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="product-description-parent">
          <h3 class="product-description">Product Description</h3>
          <div class="when-its-colder" id="productDescription">
          {{ $products->first()->description }}
          </div>
        </div>
        <div class="more-details">
          <h3 class="benefits">Benifits</h3>
          <div class="benefits-list">
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" loading="lazy" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="durable-leather-is" id="product-benifits" >
              {{ $products->first()->benefits }}
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="water-repellent-finish-and">
                Water-repellent finish and internal membrane help keep your
                feet dry.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="toe-piece-with">
                Toe piece with star pattern adds durability.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="synthetic-insulation-helps">
                Synthetic insulation helps keep you warm.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="originally-designed-for">
                Originally designed for performance hoops, the Air unit
                delivers lightweight cushioning.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="plush-tongue-wraps">
                Plush tongue wraps over the ankle to help keep out the
                moisture and cold.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="rubber-outsole-with">
                Rubber outsole with aggressive traction pattern adds durable
                grip.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="durable-leather-is">
                Durable leather is easily cleanable so you can keep your look
                fresh.
              </div>
            </div>
          </div>
        </div>
        <div class="more-details">
          <h3 class="product-description">Product Details</h3>
          <div class="benefits-list">
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="not-intended-for" id="product-details">
              {{ $products->first()->details }}
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="water-repellent-finish-and">
                Water-repellent finish and internal membrane help keep your
                feet dry.
              </div>
            </div>
          </div>
        </div>
        <div class="more-details">
          <h3 class="product-description">More Details</h3>
          <div class="benefits-list">
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="lunarlon-midsole-delivers">
                Lunarlon midsole delivers ultra-plush responsiveness
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="encapsulated-air-sole-heel">
                Encapsulated Air-Sole heel unit for lightweight cushioning
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="colour-shown-ale">
                Colour Shown: Ale Brown/Black/Goldtone/Ale Brown
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="{{ asset('assets/image/check-icon.svg') }}" />
              </div>
              <div class="style-805899-202">Style: 805899-202</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="{{ asset('assets/js/product_page.js') }}"></script>
  <div class="modal fade" id="Product_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class=" modal-dialog modal-xl row d-flex justify-content-center" style="z-index: 20">
      <div class="modal-content col-sm-12 col-md-12 col-lg-8"
        style="margin-top: 150px; margin-left: 150px; z-index: 20">

        <div class="modal-body">
          <section class="product-image-parent">
            <img class="product-image-icon" loading="lazy" alt="" src="{{ asset('assets/image/R6.svg') }}" />

            <div class="product-info">
              <div class="info-details">

                <div class="x-wrapper">
                  <button data-bs-dismiss="modal" aria-label="Close">
                    <img class="x-icon" loading="lazy" alt="" src="{{ asset('assets/image/X.svg') }}" />
                  </button>
                </div>
                <h3 class="embrace-sideboard1">Embrace Sideboard</h3>
                <div class="designer-info">
                  <div class="designer-details">
                    <div class="studio-details">
                      <div class="studio-name">
                        <a class="teixeira-design-studio1">Teixeira Design Studio</a>
                        <div class="size-info">
                          <div class="size-details">
                            <div class="size-icon"></div>
                            <div class="size-details-inner">
                              <div class="medium-wrapper">
                                <a class="medium">Medium</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="rectangle-parent4">
                      <div class="frame-child15">

                      </div>
                      <div class="input-wrapper">
                        <button class="decrement-button"><b class="input">-</b></button>
                      </div>
                      <b class="quantity-label">3</b>
                      <div class="small-size-inner">
                        <button class="increment-button"><b class="b">+</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="actions">
            <div class="buttons">
              <div class="rectangle-parent5" id="add-to-cart-button">
                <div class="frame-child16"></div>
                <div class="cart-label" id="price-label">$268.35</div>
                <div class="add-button">
                  <div class="add-to-cart">Buy Now</div>
                </div>
              </div>
             
            </div>
          </section>
        </div>


      </div>
    </div>
    <script>
      
    </script>
  </div>
 
  <script src="{{ asset('assets/js/product_page.js') }}"></script>
  <script>
     function updateProductDetails(image, name, description, price, subtitle, benifits, details) {
      
      document.getElementById('largeImage').src = '{{ asset('product-image') }}/' + image;
      document.getElementById('product-name').innerText = name;
      document.getElementById('productDescription').innerText = description;
      document.getElementById('productPrice').innerText = price;
      document.getElementById('productSubtitle').innerText = subtitle;
      document.getElementById('product-benifits').innerText = benifits;
      document.getElementById('product-details').innerText = details;
     
      updatePriceLabel(price);


    }
    function updatePriceLabel(basePrice) {
    const quantity = parseInt(document.querySelector('.quantity-label').textContent, 10) || 1; // Default to 1 if quantity not set
    const priceLabel = document.getElementById('price-label');
    const finalPrice = (basePrice * quantity) + (basePrice * quantity * 0.25) ; // Adjust calculation as needed
    priceLabel.textContent = `$${finalPrice.toFixed(2)}`;
}
document.addEventListener('DOMContentLoaded', () => {
    // Reference to the price label and add to cart button
    const priceLabel = document.getElementById('price-label');
    const addToCartButton = document.getElementById('add-to-cart-button');
    const quantityLabel = document.querySelector('.quantity-label');

    // Initial price (set this to 0 or the price of the initially selected product)
    let price = 0;

    // Event listener for the button to change the price dynamically
    addToCartButton.addEventListener('click', () => {
        // Example: Increase price by $10 on each click (not sure if needed in your use case)
        updatePriceLabel(price + 10);
    });

    // Event listener for quantity change
    quantityLabel.addEventListener('DOMSubtreeModified', function() {
        // Calculate new price based on quantity and current product price
        updatePriceLabel(parseFloat(document.getElementById('productPrice').innerText));
    });
});
  </script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>


</html>