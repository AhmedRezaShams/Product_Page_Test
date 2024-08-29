<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;1,800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Proxima Nova:wght@400;700&display=swap"
    />
  </head>
  <body>
    <div class="modal" id="myModal">
      <section class="product-image-parent">
        <img
          class="product-image-icon"
          loading="lazy"
          alt=""
          src="./public/rectangle-41@2x.png"
        />

        <div class="product-info">
          <div class="info-details">
            <div class="x-wrapper">
              <img class="x-icon" loading="lazy" alt="" src="./public/x.svg" />
            </div>
            <h3 class="embrace-sideboard1">Embrace Sideboard</h3>
            <div class="designer-info">
              <div class="designer-details">
                <div class="studio-details">
                  <div class="studio-name">
                    <a class="teixeira-design-studio1"
                      >Teixeira Design Studio</a
                    >
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
                <div class="group-div">
                  <div class="frame-child"></div>
                  <div class="wrapper2">
                    <b class="b4">-</b>
                  </div>
                  <a class="a">3</a>
                  <div class="feature-list-wrapper">
                    <b class="feature-list">+</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="actions">
        <div class="buttons">
          <button class="group-button">
            <div class="frame-item"></div>
            <div class="button-label">$268.35</div>
            <div class="buy-now-wrapper">
              <div class="buy-now">Buy Now</div>
            </div>
          </button>
          <div class="secondary-button">
            <div class="button-icon-parent">
              <div class="button-icon">$357.8</div>
              <div class="buy-now-container">
                <div class="buy-now1">Buy Now</div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <script src="{{ asset('assets/js/product_page.js') }}"></script>
  </body>
</html>
