<?php 
use yii\helpers\StringHelper;
/**@var \common\models\Product $model */
?>
 
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <a href="#">
                            <img class="card-img-top" src="<?php echo $model->getImageUrl()?>" alt="" />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                            
                            <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> <?php echo $model->name?></h5>
                                    
                                    <!-- Product price-->
                                    
                                  <h5> <?php echo Yii::$app->formatter->asCurrency($model->price) ?></h5>
                                  <!-- Product description-->
                                  <div class="card-text">

                                  <?php echo $model->getShortDescription() ?>
                                  </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                   