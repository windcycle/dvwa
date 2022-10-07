<?php 
$this->load->view("layout/head");
?>
<body>
    <!-- Tampilkan semua produk -->
        <div class="row">
        <!-- looping products -->
            <?php foreach($barang as $b) : ?>
                <div class="col-sm-3 col-md-3">
                    <div class="thumbnail">

                   
                    <?= '<img src="uploads/'.$b->image.'" alt="item" width="100%" max-height="100%" height="200px">'?>

                        <div class="caption">
                            <h3 style="min-heightk:60px;"><?=$b->nama?></h3>
                            <p><?=$b->description?></p>
                            <p>Rp. <?=$b->price?></p>
                            <p>
                                <?=anchor('home/add_to_cart/' . $b->id, 'Buy' , [
                                    'class'    => 'btn btn-primary',
                                    'role'    => 'button'
                                ])?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>  
        <div>
</body>
</html>