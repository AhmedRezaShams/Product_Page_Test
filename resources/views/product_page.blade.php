<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

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
        <div class="right-column">
          <div class="rectangle-parent">
            <div class="frame-child"></div>
            <img class="image-icon" loading="lazy" alt="" src="{{ asset('assets/image/frame.svg') }}" />
          </div>
          <div class="wrapper">
            <img class="icon" loading="lazy" alt="" src="{{ asset('assets/image/3.svg') }}" />
          </div>
        </div>
      </header>
      <div class="carousel-navigation">
        <div class="rectangle-group">

          <div class="carousel">
            <div class="carousel-large">
              <img id="largeImage" src="{{ asset('assets/image/main.svg') }}" alt="Large Image">
            </div>
            <div class="carousel-thumbnails">
              <img class="thumbnail" src="{{ asset('assets/image/R7.svg') }}" alt="Thumbnail 1"
                onclick="changeImage('assets/image/R7.svg')">
              <img class="thumbnail" src="{{ asset('assets/image/R5.svg') }}" alt="Thumbnail 2"
                onclick="changeImage('assets/image/R5.svg')">
              <img class="thumbnail" src="{{ asset('assets/image/R6.svg') }}" alt="Thumbnail 3"
                onclick="changeImage('assets/image/R6.svg')">
              <img class="thumbnail" src="{{ asset('assets/image/R8.svg') }}" alt="Thumbnail 4"
                onclick="changeImage('assets/image/R8.svg')">
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
              <h2 class="embrace-sideboard">Embrace Sideboard</h2>
              <div class="teixeira-design-studio">Teixeira Design Studio</div>
            </div>
            <div class="frame-inner"></div>
            <div class="rating-container-wrapper">
              <div class="rating-container">
                <div class="rating-stars">
                  <b class="stars">$71.56</b>
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
                  <div class="color-swatch" style="background-color: #FFD3F8;"></div>
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
                    <input type="radio" name="size" value="small" class="size-radio">
                  </div>
                  <div class="small">Medium</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="small" class="size-radio">
                  </div>
                  <div class="small">Large</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="small" class="size-radio">
                  </div>
                  <div class="small">Extra large</div>
                </button>
                <button class="small-size">
                  <div class="small-size-inner">
                    <input type="radio" name="size" value="small" class="size-radio">
                  </div>
                  <div class="small">XXL</div>
                </button>
              </div>

            </div>
            <div class="frame-inner"></div>
            <div class="content">
             
              <div class="rectangle-parent4">
                <div class="frame-child15">
                  <!-- Optional: Add styling or content for this element -->
                </div>
                <div class="input-wrapper">
                  <button class="decrement-button"><b class="input">-</b></button>
                </div>
                <b class="quantity-label">3</b>
                <div class="small-size-inner">
                  <button class="increment-button"><b class="b">+</b></button>
                </div>
              </div>
              

              <div class="rectangle-parent5">
                <div class="frame-child16"></div>
                <div class="cart-label">$268.35</div>
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
          <div class="when-its-colder">
            When it's colder than the far side of the moon and spitting rain
            too, you've still got to look good. From water-repellent leather
            to a rugged outsole, the Lunar Force 1 adapts AF-1 style, so you
            can keep your flame burning when the weather hits. Metal lace
            hardware and extended tongue bring mountain boot toughness, while
            the star-studded toe design gives your look the edge
          </div>
        </div>
        <div class="more-details">
          <h3 class="benefits">Benefits</h3>
          <div class="benefits-list">
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" loading="lazy" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="durable-leather-is">
                Durable leather is easily cleanable so you can keep your look
                fresh.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="water-repellent-finish-and">
                Water-repellent finish and internal membrane help keep your
                feet dry.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="toe-piece-with">
                Toe piece with star pattern adds durability.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="synthetic-insulation-helps">
                Synthetic insulation helps keep you warm.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="originally-designed-for">
                Originally designed for performance hoops, the Air unit
                delivers lightweight cushioning.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="plush-tongue-wraps">
                Plush tongue wraps over the ankle to help keep out the
                moisture and cold.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="rubber-outsole-with">
                Rubber outsole with aggressive traction pattern adds durable
                grip.
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
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
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="not-intended-for">
                Not intended for use as Personal Protective Equipment (PPE)
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
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
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="lunarlon-midsole-delivers">
                Lunarlon midsole delivers ultra-plush responsiveness
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="encapsulated-air-sole-heel">
                Encapsulated Air-Sole heel unit for lightweight cushioning
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="colour-shown-ale">
                Colour Shown: Ale Brown/Black/Goldtone/Ale Brown
              </div>
            </div>
            <div class="benefit-items">
              <div class="check-icon-wrapper">
                <img class="check-icon" alt="" src="./public/check-icon.svg" />
              </div>
              <div class="style-805899-202">Style: 805899-202</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <script src="{{ asset('assets/js/product_page.js') }}"></script>
</body>


</html>