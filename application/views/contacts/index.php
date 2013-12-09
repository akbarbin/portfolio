<div class="content" id="about">
  <div class="container">
    <div class="row">
      <div class="page-space">
        <div class="span12">
          <h1 class="heading"><span><?php echo $title ?></span></h1>
          <h2 class="subheading"><span>Subheading Goes Here</span></h2>
          <div><p><a href="contacts/create">New contact</a></p></div>
          <div class="short-intro">
            <?php foreach ($contacts as $contact_item): ?>
              <div id="main">
                <?php echo $contact_item['first_name'] ?>
              </div>
              <p><a href="contacts/<?php echo $contact_item['id'] ?>">View contact</a></p>
              <p><a href="contacts/edit/<?php echo $contact_item['id'] ?>">Edit contact</a></p>
              <p><a href="contacts/destroy/<?php echo $contact_item['id'] ?>" onclick="return confirm('Are you sure delete?')">Delete contact</a><p>
              <?php endforeach ?>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>