<div class="container">
  <div class="row">
      <article class="col-12">
          <header class="mb-3 mt-4">
              <h1 class="my-0">Forms</h1>
              <hr class="mb-0 mt-3">
          </header>

          <h2>Basic example</h2>
          <div class="example-block">
              <form>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input id="exampleInputEmail1" class="form-control" type="email" placeholder="Enter email" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input id="exampleInputPassword1" class="form-control" type="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <label for="exampleSelect1">Example select</label>
                      <select id="exampleSelect1" class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleSelect2">Example multiple select</label>
                      <select id="exampleSelect2" class="form-control" multiple>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleTextarea1">Example textarea</label>
                      <textarea id="exampleTextarea1" class="form-control" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFile1">File input</label>
                      <input id="exampleInputFile1" class="form-control-file" type="file" aria-describedby="fileHelp">
                      <small id="fileHelp1" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                  </div>
                  <fieldset class="form-group">
                      <legend>Radio buttons</legend>
                      <div class="form-check">
                          <label class="form-check-label">
                              <input id="optionsRadios1" class="form-check-input" type="radio" name="optionsRadios" value="option1" checked>
                              Option 1
                          </label>
                      </div>
                      <div class="form-check">
                          <label class="form-check-label">
                              <input id="optionsRadios2" class="form-check-input" type="radio" name="optionsRadios" value="option2">
                              Option 2
                          </label>
                      </div>
                      <div class="form-check disabled">
                          <label class="form-check-label">
                              <input id="optionsRadios3" class="form-check-input" type="radio" name="optionsRadios" value="option3" disabled>
                              Option 3 is disabled
                          </label>
                      </div>
                  </fieldset>
                  <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          Check box 1
                      </label>
                  </div>
                  <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox">
                          Check box 2
                      </label>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <button class="btn btn-secondary" type="reset">Reset</button>
              </form>
          </div>
          <h3>Input types</h3>
          <div class="example-block">
              <div class="form-group row">
                  <label for="example-input-types-form-control-text" class="col-4 col-sm-2 col-form-label">Text</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-text" class="form-control" type="text" value="Input text value" autocomplete="off">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-password" class="col-4 col-sm-2 col-form-label">Password</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-password" class="form-control" type="password" value="myPa$sW0rd">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-color" class="col-4 col-sm-2 col-form-label">Color</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-color" class="form-control" type="color" value="#FF860B">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-date" class="col-4 col-sm-2 col-form-label">Date</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-date" class="form-control" type="date" value="2018-05-31">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-datetime-local" class="col-4 col-sm-2 col-form-label">Datetime-local</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-datetime-local" class="form-control" type="datetime-local" value="2018-05-31T12:41:47">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-email" class="col-4 col-sm-2 col-form-label">Email</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-email" class="form-control" type="email" value="someone@email.tld" autocomplete="off">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-month" class="col-4 col-sm-2 col-form-label">Month</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-month" class="form-control" type="month" value="2018-05">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-number" class="col-4 col-sm-2 col-form-label">Number</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-number" class="form-control" type="number" min="0" max="255" value="65">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-range" class="col-4 col-sm-2 col-form-label">Range</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-range" class="form-control" type="range" min="1" max="500" value="100">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-serch" class="col-4 col-sm-2 col-form-label">Serch</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-serch" class="form-control" type="serch" value="Search query" autocomplete="off">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-tel" class="col-4 col-sm-2 col-form-label">Tel</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-tel" class="form-control" type="tel" value="02-111-1111" autocomplete="off">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-time" class="col-4 col-sm-2 col-form-label">Time</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-time" class="form-control" type="time" value="12:41:47">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-url" class="col-4 col-sm-2 col-form-label">Url</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-url" class="form-control" type="url" value="http://omnicommediagroup.pt" autocomplete="off">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="example-input-types-form-control-week" class="col-4 col-sm-2 col-form-label">Week</label>
                  <div class="col-8 col-sm-10">
                      <input id="example-input-types-form-control-week" class="form-control" type="week" value="2018-W22">
                  </div>
              </div>

              <p class="mb-0"><small><a href="http://www.w3schools.com/html/html_form_input_types.asp" target="reference_input_types" rel="nofollow">Reference</a></small></p>
          </div>

          <h2>Inline forms</h2>
          <h3>Visible labels</h3>
          <div class="example-block">
              <form class="form-inline">
                  <div class="form-group">
                      <label class="mr-2" for="exampleInputName2">Name</label>
                      <input id="exampleInputName2" class="form-control mr-2" type="text" placeholder="Jane Doe">
                  </div>
                  <div class="form-group">
                      <label class="mr-2" for="exampleInputEmail2">Email</label>
                      <input id="exampleInputEmail2" class="form-control mr-2" type="email" placeholder="jane.doe@example.com">
                  </div>
                  <button class="btn btn-primary" type="submit">Send invitation</button>
              </form>
          </div>
          <h3>Hidden labels</h3>
          <div class="example-block">
              <form class="form-inline">
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputName3">Name</label>
                      <input id="exampleInputName2" class="form-control mr-2" type="text" placeholder="Jane Doe">
                  </div>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputEmail3">Email</label>
                      <input id="exampleInputEmail2" class="form-control mr-2" type="email" placeholder="jane.doe@example.com">
                  </div>
                  <button class="btn btn-primary" type="submit">Send invitation</button>
              </form>
          </div>
          <h3>Static controls</h3>
          <div class="example-block">
              <form class="form-inline">
                  <div class="form-group">
                      <label class="sr-only">Email</label>
                      <p class="form-control-plaintext mr-2">email@example.com</p>
                  </div>
                  <div class="form-group">
                      <label class="sr-only" for="inlineInputPassword1">Password</label>
                      <input id="inlineInputPassword1" class="form-control mr-2" type="password" placeholder="Password">
                  </div>
                  <button class="btn btn-primary" type="submit">Confirm identity</button>
              </form>
          </div>
          <h3>Help text inline</h3>
          <div class="example-block">
              <form class="form-inline">
                  <div class="form-group">
                      <label class="mr-2" for="inlineInputPassword2">Password</label>
                      <input id="inlineInputPassword2" class="form-control mr-2" type="password" aria-describedby="passwordHelpInline">
                      <small id="passwordHelpInline" class="text-muted">
                          Must be 8-20 characters long.
                      </small>
                  </div>
              </form>
          </div>

          <h2>Using the grids</h2>
          <div class="example-block">
              <form>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleInputEmail4">Email</label>
                      <div class="col-sm-10">
                          <input id="exampleInputEmail4" class="form-control" type="email" placeholder="Enter email" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleInputPassword2">Password</label>
                      <div class="col-sm-10">
                          <input id="exampleInputPassword2" class="form-control" type="password" placeholder="Password">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleSelect3">Example select</label>
                      <div class="col-sm-10">
                          <select id="exampleSelect3" class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleSelect4">Example multiple select</label>
                      <div class="col-sm-10">
                          <select id="exampleSelect4" class="form-control" multiple>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleTextarea2">Example textarea</label>
                      <div class="col-sm-10">
                          <textarea id="exampleTextarea2" class="form-control" rows="3"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="exampleInputFile2">File input</label>
                      <div class="col-sm-10">
                          <input id="exampleInputFile2" class="form-control-file" type="file" aria-describedby="fileHelp">
                          <small id="fileHelp2" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                      </div>
                  </div>
                  <fieldset class="form-group row">
                      <legend class="col-form-legend col-sm-2">Radio buttons</legend>
                      <div class="col-sm-10">
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input id="optionsRadios4" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option1" checked>
                                  Option1
                              </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input id="optionsRadios5" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option2">
                                  Option 2
                              </label>
                          </div>
                          <div class="form-check disabled">
                              <label class="form-check-label">
                                  <input id="optionsRadios6" class="form-check-input" type="radio" name="optionsRadiosGrid" value="option3" disabled>
                                  Option 3 is disabled
                              </label>
                          </div>
                      </div>
                  </fieldset>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Checkbox</label>
                      <div class="col-sm-10">
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">
                                  Check box 1
                              </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">
                                  Check box 2
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Static controls</label>
                      <div class="col-sm-10">
                          <p class="form-control-static">email@example.com</p>
                      </div>
                  </div>
                  <hr>
                  <h4>Disabled inputs</h4>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="input-text-disabled-example">Disabled input</label>
                      <div class="col-sm-10">
                          <input id="input-text-disabled-example" class="form-control" type="text" name="input-disabled" value="disabled input text" disabled="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="input-select-disabled-example">Disabled select</label>
                      <div class="col-sm-10">
                          <select id="input-select-disabled-example" class="form-control" name="select-disabled" disabled="">
                              <option value="">-- please select --</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Disabled checkbox</label>
                      <div class="col-sm-10">
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" disabled="">
                                  Check box 1
                              </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" disabled="">
                                  Check box 2
                              </label>
                          </div>
                      </div>
                  </div>
                  <hr>
                  <h4>Readonly inputs</h4>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="input-text-readonly-example">Readonly input</label>
                      <div class="col-sm-10">
                          <input id="input-text-readonly-example" class="form-control" type="text" name="input-readonly" value="readonly input text" readonly="">
                      </div>
                  </div>
                  <hr>
                  <h4>Control sizing</h4>
                  <div class="form-group row">
                      <label class="col-form-label col-form-label-sm col-sm-2" for="input-text-size-sm-example">Small input</label>
                      <div class="col-sm-10">
                          <input id="input-text-size-sm-example" class="form-control form-control-sm" type="text" name="input-sm" value="small input text">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-form-label-lg col-sm-2" for="input-text-size-lg-example">Large input</label>
                      <div class="col-sm-10">
                          <input id="input-text-size-lg-example" class="form-control form-control-lg" type="text" name="input-lg" value="large input text">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-form-label-sm col-sm-2" for="input-select-size-sm-example">Small select</label>
                      <div class="col-sm-10">
                          <select id="input-select-size-sm-example" class="form-control form-control-sm" name="select">
                              <option value="small select">small select</option>
                              <option value="small select">small select</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-form-label-lg col-sm-2" for="input-select-size-lg-example">Large select</label>
                      <div class="col-sm-10">
                          <select id="input-select-size-lg-example" class="form-control form-control-lg" name="select">
                              <option value="small select">small select</option>
                              <option value="small select">small select</option>
                          </select>
                      </div>
                  </div>
                  <hr>
                  <h4>Checkbox and radio inline</h4>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">checkbox</label>
                      <div class="col-sm-10">
                          <label class="form-check-inline">
                              <input id="inlineCheckbox1" class="form-check-input" type="checkbox" value="option1"> 1
                          </label>
                          <label class="form-check-inline">
                              <input id="inlineCheckbox2" class="form-check-input" type="checkbox" value="option2"> 2
                          </label>
                          <label class="form-check-inline">
                              <input id="inlineCheckbox3" class="form-check-input" type="checkbox" value="option3"> 3
                          </label>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">radio</label>
                      <div class="col-sm-10">
                          <label class="form-check-inline">
                              <input id="inlineRadio1" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option1"> 1
                          </label>
                          <label class="form-check-inline">
                              <input id="inlineRadio2" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option2"> 2
                          </label>
                          <label class="form-check-inline">
                              <input id="inlineRadio3" class="form-check-input" type="radio" name="inlineRadioOptionsInline" value="option3"> 3
                          </label>
                      </div>
                  </div>
                  <hr>
                  <h4>Validation</h4>
                  <div class="form-group row has-success">
                      <label class="col-form-label col-sm-2" for="input-text-validation-success-example">Input with success</label>
                      <div class="col-sm-10">
                          <input id="input-text-validation-success-example" class="form-control form-control-success" type="text" name="input-validation">
                          <div class="form-control-feedback">Success! You've done it.</div>
                          <small class="form-text text-muted">Example help text that remains unchanged.</small>
                      </div>
                  </div>
                  <div class="form-group row has-warning">
                      <label class="col-form-label col-sm-2" for="input-text-validation-warning-example">Input with warning</label>
                      <div class="col-sm-10">
                          <input id="input-text-validation-warning-example" class="form-control form-control-warning" type="text" name="input-validation">
                          <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                          <small class="form-text text-muted">Example help text that remains unchanged.</small>
                      </div>
                  </div>
                  <div class="form-group row has-danger">
                      <label class="col-form-label col-sm-2" for="input-text-validation-danger-example">Input with danger</label>
                      <div class="col-sm-10">
                          <input id="input-text-validation-danger-example" class="form-control form-control-danger" type="text" name="input-validation">
                          <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                          <small class="form-text text-muted">Example help text that remains unchanged.</small>
                      </div>
                  </div>
                  <fieldset class="form-group row">
                      <legend class="col-form-legend col-sm-2">Radio validation</legend>
                      <div class="col-sm-10">
                          <div class="form-check has-success">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option1" checked>
                                  Option1  success!
                              </label>
                          </div>
                          <div class="form-check has-warning">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option2">
                                  Option 2 warning
                              </label>
                          </div>
                          <div class="form-check has-danger">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="optionsRadiosValidation" value="option3">
                                  Option 3 danger
                              </label>
                          </div>
                      </div>
                  </fieldset>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Checkbox validation</label>
                      <div class="col-sm-10">
                          <div class="form-check has-success">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" checked="">
                                  Check box 1  success!
                              </label>
                          </div>
                          <div class="form-check has-warning">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">
                                  Check box 2 warning
                              </label>
                          </div>
                          <div class="form-check has-danger">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox">
                                  Check box 3 danger
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-primary" type="submit">Submit</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </div>
              </form>
          </div>

          <h2>Custom forms</h2>
          <h3>Check boxes and radios</h3>
          <div class="example-block">
              <form>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Checkbox inline</label>
                      <div class="col-sm-10">
                          <div class="custom-control custom-checkbox custom-control-inline">
                              <input id="customCheck1" class="custom-control-input" type="checkbox">
                              <label class="custom-control-label" for="customCheck1">Check box 1</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                              <input id="customCheck2" class="custom-control-input" type="checkbox">
                              <label class="custom-control-label" for="customCheck2">Check box 2</label>
                          </div>
                          <div class="custom-control custom-checkbox custom-control-inline">
                              <input id="customCheck3" class="custom-control-input" type="checkbox" disabled="">
                              <label class="custom-control-label" for="customCheck3">Check box 3 disabled</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Checkbox stacked</label>
                      <div class="col-sm-10">
                          <div class="custom-control custom-checkbox">
                              <input id="customCheck4" class="custom-control-input" type="checkbox">
                              <label class="custom-control-label" for="customCheck4">Check box 4</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                              <input id="customCheck5" class="custom-control-input" type="checkbox">
                              <label class="custom-control-label" for="customCheck5">Check box 5</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                              <input id="customCheck6" class="custom-control-input" type="checkbox" disabled="">
                              <label class="custom-control-label" for="customCheck6">Check box 6 disabled</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Radio inline</label>
                      <div class="col-sm-10">
                          <div class="custom-control custom-radio custom-control-inline">
                              <input id="customRadio1" class="custom-control-input" type="radio" name="radioCustom1">
                              <label class="custom-control-label" for="customRadio1">Option1</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                              <input id="customRadio2" class="custom-control-input" type="radio" name="radioCustom1">
                              <label class="custom-control-label" for="customRadio2">Option 2</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                              <input id="customRadio3" class="custom-control-input" type="radio" name="radioCustom1" disabled="">
                              <label class="custom-control-label" for="customRadio3">Option 3 disabled</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Radio stacked</label>
                      <div class="col-sm-10">
                          <div class="custom-control custom-radio">
                              <input id="customRadio4" class="custom-control-input" type="radio" name="radioCustom2">
                              <label class="custom-control-label" for="customRadio4">Option4</label>
                          </div>
                          <div class="custom-control custom-radio">
                              <input id="customRadio5" class="custom-control-input" type="radio" name="radioCustom2">
                              <label class="custom-control-label" for="customRadio5">Option 5</label>
                          </div>
                          <div class="custom-control custom-radio">
                              <input id="customRadio6" class="custom-control-input" type="radio" name="radioCustom2" disabled="">
                              <label class="custom-control-label" for="customRadio6">Option 6 disabled</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-primary" type="submit">Submit</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </div>
              </form>
          </div>
          <h3>Select menu</h3>
          <div class="example-block">
              <form>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Select box</label>
                      <div class="col-sm-10">
                          <select class="custom-select">
                              <option selected>Escolha</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Select box (large)</label>
                      <div class="col-sm-10">
                          <select class="custom-select custom-select-lg">
                              <option selected>Escolha</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Select box (small)</label>
                      <div class="col-sm-10">
                          <select class="custom-select custom-select-sm">
                              <option selected>Escolha</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Select box (multiple)</label>
                      <div class="col-sm-10">
                          <select class="custom-select" multiple="">
                              <option selected>Escolha</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-primary" type="submit">Submit</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </div>
              </form>
          </div>
          <h3>Range</h3>
          <div class="example-block">
              <form>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2" for="customRange1">Example range</label>
                      <div class="col-sm-10">
                          <input type="range" class="custom-range" id="customRange1">
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-primary" type="submit">Submit</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </div>
              </form>
          </div>
          <h3>File browser</h3>
          <div class="example-block">
              <form>
                  <div class="form-group row">
                      <label class="col-form-label col-sm-2">Input file</label>
                      <div class="col-sm-10">
                          <div class="custom-file">
                              <input id="customfile" class="custom-file-input" type="file">
                              <label class="custom-file-label" for="customfile">Escolha ficheiro</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button class="btn btn-primary" type="submit">Submit</button>
                          <button class="btn btn-secondary" type="reset">Reset</button>
                      </div>
                  </div>
              </form>
          </div>
      </article>
  </div>
  </div>
