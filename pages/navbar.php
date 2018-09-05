<div class="container">
  <div class="row">
      <article class="col-12">
          <header class="mb-3 mt-4">
              <h1 class="my-0">Navbar</h1>
              <hr class="mb-0 mt-3">
          </header>

          <h2>Basic example</h2>
          <div class="example-block">
              <nav class="navbar navbar-expand-md navbar-light bg-light">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <ul class="navbar-nav">
                      <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item disabled" href="#">Disabled</a>
                          </div>
                      </li>
                      <li class="nav-item">
                          <form class="form-inline">
                              <input class="form-control mr-1" type="text" placeholder="Form on left">
                              <button class="btn btn-outline-secondary" type="button">Button</button>
                          </form>
                      </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <form class="form-inline">
                              <input class="form-control" type="text" placeholder="Form on right">
                          </form>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item disabled" href="#">Disabled</a>
                          </div>
                      </li>
                  </ul>
              </nav>
          </div>


          <h2>Responsive navbar</h2>
          <div class="example-block">
              <nav class="navbar navbar-expand-md navbar-light bg-light mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar1" aria-controls="exResponsiveNavbar1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar1">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar2" aria-controls="exResponsiveNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar2">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-danger mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar3" aria-controls="exResponsiveNavbar3" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar3">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-info mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar4" aria-controls="exResponsiveNavbar4" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar4">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar5" aria-controls="exResponsiveNavbar5" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar5">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-success mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar6" aria-controls="exResponsiveNavbar6" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar6">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-warning mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveNavbar7" aria-controls="exResponsiveNavbar7" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveNavbar7">
                      <ul class="navbar-nav">
                          <li class="nav-item active"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>

              <h3>Actived menu in dropdown menu</h3>
              <nav class="navbar navbar-expand-md navbar-light bg-light mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar1" aria-controls="exResponsiveActiveInDropdownNavbar1" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar1">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar2" aria-controls="exResponsiveActiveInDropdownNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar2">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-danger mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar3" aria-controls="exResponsiveActiveInDropdownNavbar3" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar3">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-info mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar4" aria-controls="exResponsiveActiveInDropdownNavbar4" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar4">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar5" aria-controls="exResponsiveActiveInDropdownNavbar5" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar5">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-success mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar6" aria-controls="exResponsiveActiveInDropdownNavbar6" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar6">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
              <nav class="navbar navbar-expand-md navbar-dark bg-warning mb-3">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exResponsiveActiveInDropdownNavbar7" aria-controls="exResponsiveActiveInDropdownNavbar7" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="exResponsiveActiveInDropdownNavbar7">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item active" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                          <li class="nav-item">
                              <form class="form-inline">
                                  <input class="form-control mr-1" type="text" placeholder="Form on left">
                                  <button class="btn btn-outline-secondary" type="button">Button</button>
                              </form>
                          </li>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item disabled" href="#">Disabled</a>
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>

          </div>
      </article>
  </div>
  </div>
