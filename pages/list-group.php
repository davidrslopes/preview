<div class="container">
  <div class="row">
      <article class="col-12">
          <header class="mb-3 mt-4">
              <h1 class="my-0">List group</h1>
              <hr class="mb-0 mt-3">
          </header>

          <h2>Basic example</h2>
          <div class="example-block">
              <ul class="list-group mb-3">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item active">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Porta ac consectetur ac</li>
                  <li class="list-group-item">Vestibulum at eros</li>
              </ul>
          </div>

          <h2>Badge</h2>
          <div class="example-block">
              <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      Cras justo odio
                      <span class="badge badge-primary badge-pill">14</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      Dapibus ac facilisis in
                      <span class="badge badge-primary badge-pill">2</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      Morbi leo risus
                      <span class="badge badge-primary badge-pill">1</span>
                  </li>
              </ul>

          </div>

          <h2>Anchors and buttons and disabled items</h2>
          <div class="example-block">
              <div class="list-group">
                  <h5 class="list-group-item">Anchors</h5>
                  <a class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center" href="#">
                      Cras justo odio
                      <span class="badge badge-primary badge-pill">14</span>
                  </a>
                  <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">
                      Dapibus ac facilisis in (without .list-group-item-action class)
                      <span class="badge badge-primary badge-pill">2</span>
                  </a>
                  <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#">
                      Morbi leo risus
                      <span class="badge badge-primary badge-pill">1</span>
                  </a>
                  <a class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center" href="#">
                      Porta ac consectetur ac
                      <span class="badge badge-primary badge-pill">4</span>
                  </a>
                  <h5 class="list-group-item">Buttons</h5>
                  <button class="list-group-item list-group-item-action disabled d-flex justify-content-between align-items-center" type="button">
                      Cras justo odio
                      <span class="badge badge-primary badge-pill">14</span>
                  </button>
                  <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" type="button">
                      Dapibus ac facilisis in
                      <span class="badge badge-primary badge-pill">2</span>
                  </button>
                  <button class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" type="button">
                      Morbi leo risus
                      <span class="badge badge-primary badge-pill">1</span>
                  </button>
                  <button class="list-group-item list-group-item-action active d-flex justify-content-between align-items-center" type="button">
                      Vestibulum at eros
                      <span class="badge badge-primary badge-pill">4</span>
                  </button>
              </div>
          </div>

          <h2>Flush</h2>
          <div class="example-block">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Morbi leo risus</li>
              </ul>
          </div>

          <h2>Contextual classes</h2>
          <div class="example-block">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="list-group">
                          <a class="list-group-item list-group-item-action list-group-item-primary" href="#">Cras vel purus tempor</a>
                          <a class="list-group-item list-group-item-action list-group-item-secondary" href="#">Ut et tristique diam</a>
                          <a class="list-group-item list-group-item-action list-group-item-success" href="#">Dapibus ac facilisis in</a>
                          <a class="list-group-item list-group-item-action list-group-item-info" href="#">Cras sit amet nibh libero</a>
                          <a class="list-group-item list-group-item-action list-group-item-warning" href="#">Porta ac consectetur ac</a>
                          <a class="list-group-item list-group-item-action list-group-item-danger" href="#">Vestibulum at eros</a>
                          <a class="list-group-item list-group-item-action list-group-item-light" href="#">Curabitur facilisis</a>
                          <a class="list-group-item list-group-item-action list-group-item-dark" href="#">Suspendisse eget</a>
                      </div>
                  </div>

              </div>
          </div>

          <h2>Custom content</h2>
          <div class="example-block">
              <div class="list-group">
                  <a class="list-group-item list-group-item-action active" href="#">
                      <h5 class="list-group-item-heading">List group item heading</h5>
                      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a class="list-group-item list-group-item-action" href="#">
                      <h5 class="list-group-item-heading">List group item heading</h5>
                      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a class="list-group-item list-group-item-action list-group-item-warning" href="#">
                      <h5 class="list-group-item-heading">List group item heading</h5>
                      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a class="list-group-item list-group-item-action list-group-item-success" href="#">
                      <h5 class="list-group-item-heading">List group item heading</h5>
                      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  </a>
              </div>
          </div>
      </article>
  </div>
</div>
