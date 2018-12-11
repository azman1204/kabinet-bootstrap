<?php include '../asset/header.php' ?>

<div class="container">
  <legend>Buttons</legend>
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-secondary">Secondary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-link">Link</button>

  <legend>Outlined Buttons</legend>
  <button type="button" class="btn btn-outline-primary">Primary</button>
  <button type="button" class="btn btn-outline-secondary">Secondary</button>
  <button type="button" class="btn btn-outline-success">Success</button>
  <button type="button" class="btn btn-outline-info">Info</button>
  <button type="button" class="btn btn-outline-warning">Warning</button>
  <button type="button" class="btn btn-outline-danger">Danger</button>

  <legend>Button Group</legend>
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
  </div>

  <legend>Button Group Vertical</legend>
  <div class="btn-group-vertical" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary">Left</button>
    <button type="button" class="btn btn-secondary">Middle</button>
    <button type="button" class="btn btn-secondary">Right</button>
  </div>

  <div class="btn-group">
    <button id="my-btn" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
    <div class="dropdown-menu" aria-labelledby="my-btn">
      <a class="dropdown-item" href="#">Link</a>
      <a class="dropdown-item" href="#">Link Two</a>
      <a class="dropdown-item" href="#">Link Three</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Link Four</a>
    </div>
  </div>
</div>

<?php include '../asset/footer.php' ?>
