<?php
/**
 * admin.php
 *
 * @package default
 */


$page_title = 'Admin Home Page';
require_once '../includes/load.php';

page_require_level(1);

$c_categories     = count_by_id('categories');
$c_products       = count_by_id('products');
$c_sales          = count_by_id('sales');
$c_customers          = count_by_id('customers');
$products_sold   = find_highest_selling_product('10');
$recent_products = find_recent_product_added('5');
$recent_sales    = find_recent_sale_added('5')
?>
<?php include_once '../layouts/header.php'; ?>

<script>
function closePanel()
{
  var x = document.getElementById("myDIV");
  if (x.style.display === "none")
  {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>
  








  <div class="row" id="myDIV">
   <div class="col-md-12">
      <div class="panel">
        <div class="pull-right">
		<a href="#" onclick="closePanel();" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Close"><i class="glyphicon glyphicon-remove"></i></a>
        </div>

        <div class="jumbotron text-center">
           <h3>Welcome to our database!</h3> - Brooke, Naysan, Makena, Dylan, and Ray
        </div>

      </div>
   </div>
  </div>




          <tbody>

            <?php foreach ($products_sold as  $product_sold): ?>

              <tr>
                <td><?php echo first_character($product_sold['name']); ?></td>
                <td><?php echo (int)$product_sold['totalSold']; ?></td>
                <td><?php echo (int)$product_sold['totalQty']; ?></td>
              </tr>

            <?php endforeach; ?>


          <tbody>
         </table>
       </div>
     </div>
Component Categories


   </div>
<!--     *************************     -->
   


         <?php foreach ($recent_sales as  $recent_sale): ?>
         <tr>
           <td class="text-center"><?php echo count_id();?></td>
           <td>
            <a href="../sales/edit_sale.php?id=<?php echo (int)$recent_sale['id']; ?>">
             <?php echo first_character($recent_sale['name']); ?>
           </a>
           </td>
           <td><?php echo ucfirst($recent_sale['date']); ?></td>
           <td><?php echo formatcurrency( first_character($recent_sale['price']), $CURRENCY_CODE); ?></td>
        </tr>

       <?php endforeach; ?>


       </tbody>
     </table>
    </div>
   </div>
  </div>
<!--     *************************     -->

  
        </strong>
      </div>
      <div class="panel-body">

        <div class="list-group">


      


    </div>
  </div>
 </div>
</div>
 </div>
  <div class="row">

  </div>


<?php include_once '../layouts/footer.php'; ?>
