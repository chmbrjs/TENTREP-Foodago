<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Current Tray';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootssnipp.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
<div class="row">
	 <br>
            <div class="col-md-12">

                            <div class="col-md-8">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h4>Current Tray</h4></div>
                        <div class="panel-body">
                           <table class="table borderless">
                            <thead>
                                <tr>
                                    <td><strong>Your Tray: # item</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://lorempixel.com/460/250/" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading"> Product Name</h5>
                                                 <h5 class="media-heading"> Product Code</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$32.99</td>
                                    <td class="text-right"><button type="button" class="btn btn-danger">Remove</button></td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://lorempixel.com/460/250/" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading"> Product Name</h5>
                                                 <h5 class="media-heading"> Product Code</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right"> $32.99</td>
                                    <td class="text-right"><button type="button" class="btn btn-danger">Remove</button></td>
                                </tr>
                            </tbody>
                        </table> 
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
                <div class="col-md-4">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Review Order</h4>
                        </div>
                        <div class="panel-body">
                                <div class="col-md-12">
                                    <strong>Subtotal (# item)</strong>
                                    <div class="pull-right"><span>$</span><span>200.00</span></div>
                                </div>
                                <div class="col-md-12">
                                    <strong>Tax</strong>
                                    <div class="pull-right"><span>$</span><span>200.00</span></div>
                                </div>
                                <div class="col-md-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$</span><span>150.00</span></div>
                                    <hr>
                                </div>
                                
                                <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                                
                        </div>
                        
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                </div>
                </div>
</div>
</body>
</html>