
<?php include '../asset/header.php' ?>

<div class="container">
  <h1 class="display-1">Display 1</h1>
  <h1 class="display-2">Display 2</h1>
  <h1 class="display-3">Display 3</h1>
  <h1 class="display-4">Display 4</h1>

  <legend>Customizing Heading</legend>
  <h3>
    This is the main title  <small class="text-muted">this is a description</small>
  </h3>

  <legend>Lead Class</legend>
  <p class="lead">
    here's some text with the .lead class to make this paragraph look a bit different and standout.
  </p>

  <legend>Working With List</legend>
  <ul class="list-unstyled">
    <li>item</li>
    <li>item</li>
    <li>item</li>
    <li>item</li>
    <li>item</li>
  </ul>

  <ul class="list-unstyled">
    <li>item
      <ul>
        <li>child item</li>
        <li>child item</li>
        <li>child item</li>
        <li>child item</li>
      </ul>
    </li>
    <li>item</li>
    <li>item</li>
    <li>item</li>
    <li>item</li>
  </ul>

  <legend>Creating Inline List</legend>
  <ul class="list-inline">
    <li class="list-inline-item">item</li>
    <li class="list-inline-item">item</li>
    <li class="list-inline-item">item</li>
    <li class="list-inline-item">item</li>
    <li class="list-inline-item">item</li>
  </ul>

  <legend>Using Description List</legend>
  <dl class="dl-horizontal">
    <dt class="col-sm-3">term 1</dt>
    <dd class="col-sm-9">this is a description</dd>
    <dt class="col-sm-3">term 2</dt>
    <dd class="col-sm-9">this is a different description</dd>
    <dt class="col-sm-3 text-truncate">this is a really long term name</dt>
    <dd class="col-sm-9">this is one last description</dd>
  </dl>

  <legend>Making Image Responsive</legend>
  <img src="../asset/images/cat.jpeg" class="img-fluid" alt="Responsive Image">
  <hr>
  <img src="../asset/images/cat4.jpg" class="rounded float-left" alt="Image Rounded">
  <img src="../asset/images/cat5.jpg" class="rounded float-right" alt="Image Circle">
  <img src="../asset/images/cat6.jpg" class="img-thumbnail mx-auto d-block" alt="Image Thumbnail">
</div>
<?php include '../asset/footer.php' ?>
