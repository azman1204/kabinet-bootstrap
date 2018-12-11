<?php include '../asset/header.php' ?>

<div class="container">
  <legend>Form</legend>
  <form>
    <fieldset class="form-group">
      <label>Text Label</label>
      <input type="text" class="form-control" placeholder="Enter Text">
      <small class="text-muted">This is some help text.</small>
    </fieldset>
    <fieldset class="form-group">
      <label>Select dropdown</label>
      <select class="form-control">
        <option>one</option>
        <option>two</option>
        <option>three</option>
        <option>four</option>
        <option>five</option>
      </select>
    </fieldset>
    <fieldset class="form-group">
      <label>Textarea</label>
      <textarea class="form-control" rows="3"></textarea>
    </fieldset>
    <fieldset class="form-group">
      <label>File input</label>
      <input type="file" class="form-control-file">
      <small class="text-muted">This is some help text. Supported file typesare: .png</small>
    </fieldset>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option 1
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option 2
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Checkbox
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <legend>Inline Form</legend>
  <form class="form-inline">
    <div class="form-group mr-1">
      <label class="sr-only"> Name &nbsp;</label>
      <input type="text" class="form-control" placeholder="Mike Smith">
    </div>
    <div class="form-group mr-1">
      <label class="sr-only"> Email &nbsp;</label>
      <input type="email" class="form-control" placeholder="mike@gmail.com">
    </div>
    <label class="checkbox-inline mr-1">
      <input type="checkbox" value="option1"> Remember me?
    </label>
    <label class="radio-inline mr-1">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Yes
    </label>
    <label class="radio-inline mr-1">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
    </label>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <input class="form-control form-control-lg mb-1 mt-1" type="text" placeholder="formcontrol-lg">
  <input class="form-control mb-1" type="text" placeholder="Default input, No class required">
  <input class="form-control form-control-sm" type="text" placeholder="formcontrol-sm">

  <legend>Form Component Width</legend>
  <div class="row">
    <div class="col-md-12 mb-1">
      <input type="text" class="form-control" placeholder="full width">
    </div>
  </div>
  <div class="row mb-1">
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="half width">
    </div>
  </div>

  <legend>Form Validation</legend>
  <div class="form-group">
    <label for="s1">Input with success</label>
    <input type="text" class="form-control is-valid" id="s1">
    <div class="valid-feedback">
      bla..bla
    </div>
  </div>
  <div class="form-group">
    <label class="form-control-label">Input with warning</label>
    <input type="text" class="form-control is-invalid">
    <div class="invalid-feedback">
      bla..bla
    </div>
  </div>
  <div class="form-group">
    <label class="form-control-label">Input with danger</label>
    <input type="text" class="form-control">
  </div>
</div>
<?php include '../asset/footer.php' ?>
