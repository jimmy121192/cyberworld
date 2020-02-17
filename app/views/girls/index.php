<?php require APPROOT . '/views/inc/header.php' ;?>

    

<h1>Girls</h1>
<nav class="girl-pagination" aria-label="Girl pagination">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'disabled' : null;?>">
      <a class="page-link" href="/girls?pageno=<?php echo (int)$data['current_page'] - 1;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <?php if((int)$data['total_pages'] <= 10 ) : ?>
    <?php for($i = 1; $i<= $data['total_pages']; $i++) :?>
    <li class="page-item <?php echo ($i == $data['current_page']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php endfor; ?>
    <?php endif; ?>


    <?php if((int)$data['total_pages'] > 10 ) : ?>
    

    <?php if((int)$data['current_page'] >=1 && (int)$data['current_page'] <=4) : ?>
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=3">3</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 4) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=4">4</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 5) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=5">5</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-2;?>"><?php echo (int)$data['total_pages']-2;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>


    <?php if((int)$data['current_page'] >4 && (int)$data['current_page'] <=(int)$data['total_pages']-4) : ?>
        <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <?php for($i = (int)$data['current_page']-1; $i<= (int)$data['current_page']+1; $i++) :?>
    <li class="page-item <?php echo ($i == $data['current_page']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php endfor; ?>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>


    <?php if((int)$data['current_page'] >(int)$data['total_pages']-4 && (int)$data['current_page'] <=(int)$data['total_pages']) : ?>
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=3">3</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-4) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-4;?>"><?php echo (int)$data['total_pages']-4;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-3;?>"><?php echo (int)$data['total_pages']-3;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-2;?>"><?php echo (int)$data['total_pages']-2;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>

    <?php endif; ?>



    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'disabled' : null;?>">
      <a class="page-link" href="/girls?pageno=<?php echo (int)$data['current_page'] + 1;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

<div class="row girl-container">

<?php foreach($data['girls'] as $girls): ?>
<div class="col-md-6 col-sm-12 girl-box">
<a href="<?php echo $girls->url; ?>" data-toggle="lightbox" data-gallery="girl-show">
<img class="img-fluid" src="<?php echo $girls->url;  ?>" />
</a>
<p class="girl-id badge badge-pill badge-danger"><?php echo $girls->id; ?></p>
</div>

<?php endforeach; ?>

</div>

<nav class="girl-pagination" aria-label="Girl pagination">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'disabled' : null;?>">
      <a class="page-link" href="/girls?pageno=<?php echo (int)$data['current_page'] - 1;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <?php if((int)$data['total_pages'] <= 10 ) : ?>
    <?php for($i = 1; $i<= $data['total_pages']; $i++) :?>
    <li class="page-item <?php echo ($i == $data['current_page']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php endfor; ?>
    <?php endif; ?>


    <?php if((int)$data['total_pages'] > 10 ) : ?>
    

    <?php if((int)$data['current_page'] >=1 && (int)$data['current_page'] <=4) : ?>
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=3">3</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 4) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=4">4</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 5) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=5">5</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-2;?>"><?php echo (int)$data['total_pages']-2;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>


    <?php if((int)$data['current_page'] >4 && (int)$data['current_page'] <=(int)$data['total_pages']-4) : ?>
        <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <?php for($i = (int)$data['current_page']-1; $i<= (int)$data['current_page']+1; $i++) :?>
    <li class="page-item <?php echo ($i == $data['current_page']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo $i;?>"><?php echo $i;?></a></li>
    <?php endfor; ?>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>


    <?php if((int)$data['current_page'] >(int)$data['total_pages']-4 && (int)$data['current_page'] <=(int)$data['total_pages']) : ?>
    <li class="page-item <?php echo ((int)$data['current_page'] == 1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=1">1</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=2">2</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == 3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=3">3</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-4) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-4;?>"><?php echo (int)$data['total_pages']-4;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-3) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-3;?>"><?php echo (int)$data['total_pages']-3;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-2) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-2;?>"><?php echo (int)$data['total_pages']-2;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']-1) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages']-1;?>"><?php echo (int)$data['total_pages']-1;?></a></li>
    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'active' : null ?>"><a class="page-link" href="/girls?pageno=<?php echo (int)$data['total_pages'];?>"><?php echo (int)$data['total_pages'];?></a></li>
    <?php endif; ?>

    <?php endif; ?>



    <li class="page-item <?php echo ((int)$data['current_page'] == (int)$data['total_pages']) ? 'disabled' : null;?>">
      <a class="page-link" href="/girls?pageno=<?php echo (int)$data['current_page'] + 1;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

<?php require APPROOT . '/views/inc/footer.php' ;?>