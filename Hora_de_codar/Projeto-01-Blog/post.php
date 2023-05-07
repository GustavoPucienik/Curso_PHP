<?php 
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach ( $posts as $post) {
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost["img"]?>" alt="<?= $currentPost["title"]?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate quam ac est venenatis, ut egestas metus sollicitudin. Morbi elementum odio vel augue gravida ullamcorper. Duis sed commodo justo. Fusce imperdiet varius sem eget consectetur. Aliquam id turpis id leo placerat finibus. Aenean bibendum libero sit amet velit fringilla, in auctor tortor gravida. Donec hendrerit semper sollicitudin.Suspendisse eleifend lacinia tellus eu porta. Vivamus erat sapien, rutrum imperdiet tincidunt at, facilisis at nisi. Pellentesque ornare diam lacus, ut tincidunt nisi dapibus ut. Maecenas vehicula tincidunt erat ut molestie. Praesent vel lacinia est. Nullam enim ligula, ornare euismod lacus eget, dapibus hendrerit lacus. Sed mollis massa vel tellus ultricies gravida. Vivamus eu quam nec libero tincidunt faucibus. Fusce tristique at purus cursus euismod. Nullam mattis urna in mauris pulvinar hendrerit. Suspendisse lobortis vulputate ex, vitae vestibulum velit pellentesque eu. Maecenas sem enim, luctus sit amet ipsum et, facilisis ornare mauris. Morbi facilisis ornare lorem, at eleifend arcu egestas sed.Sed ac tortor non augue lacinia posuere et libero.
            </p>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vulputate quam ac est venenatis, ut egestas metus sollicitudin. Morbi elementum odio vel augue gravida ullamcorper. Duis sed commodo justo. Fusce imperdiet varius sem eget consectetur. Aliquam id turpis id leo placerat finibus. Aenean bibendum libero sit amet velit fringilla, in auctor tortor gravida. Donec hendrerit semper sollicitudin.Suspendisse eleifend lacinia tellus eu porta. Vivamus erat sapien, rutrum imperdiet tincidunt at, facilisis at nisi. Pellentesque ornare diam lacus, ut tincidunt nisi dapibus ut. Maecenas vehicula tincidunt erat ut molestie. Praesent vel lacinia est. Nullam enim ligula, ornare euismod lacus eget, dapibus hendrerit lacus. Sed mollis massa vel tellus ultricies gravida. Vivamus eu quam nec libero tincidunt faucibus. Fusce tristique at purus cursus euismod. Nullam mattis urna in mauris pulvinar hendrerit. Suspendisse lobortis vulputate ex, vitae vestibulum velit pellentesque eu. Maecenas sem enim, luctus sit amet ipsum et, facilisis ornare mauris. Morbi facilisis ornare lorem, at eleifend arcu egestas sed.Sed ac tortor non augue lacinia posuere et et libero. Ut ullamcorper sapien sed nunc laoreet, a tincidunt elit mattis. Etiam eget tempus eros. Proin volutpat quam vel lectus varius, in facilisis augue viverra. Integer libero odio, accumsan quis nunc vel, pulvinar.
            </p>
        </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
    </main>
<?php 
    include_once("templates/footer.php");
?>