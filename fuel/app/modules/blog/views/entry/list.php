
<div class="rows">
    <a href="<?php echo \Fuel\Core\Router::get("blog_add") ?>" class="btn btn-default">Add Blog</a>
    <button onclick="BlogController.showOverlay()" class="btn btn-default">show Overlay</button>
</div>
<br>
<table class="table table-hover">
    <thead>
        <tr style="background-color: #DDD">
        <th>#</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Ghi chú</th>
        <th class='text-center'>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($post) && count($post)>0){
          $i=1;
          foreach($post as $key => $value){?>
        <tr>
            <td><?php echo $i++;?></td>
            <td>
               <?php echo $value['title']?>
            </td>
            <td><?php echo $value['body']?></td>
            <td><?php echo $value['note']?></td>
            <td class='text-center'>                
                <a class="btn btn-link" href="<?php echo \Fuel\Core\Router::get("blog_edit").'/'.$value['id'];?>">Edit</a>
                <button class="btn btn-link" onclick="BlogController.deleteBlog(<?php echo $value['id']?>)">Delete</button>
            </td>
      </tr>
      <?php }}else{ ?>      
    <td colspan="5" class='text-center'><?php echo "Không có dữ liệu!" ?></td>
      <?php } ?>
    </tbody>
  </table>
    <div class="rows">        
        <nav class='text-right'>
            <?php echo $pagination;?>
        </nav>                        
    </div>