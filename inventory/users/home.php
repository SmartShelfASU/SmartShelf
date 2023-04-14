<?php
/**
 * home.php
 *
 * @package default
 */


$page_title = 'Home Page';
require_once '../includes/load.php';
if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
page_require_level(3);

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
   </div>
  </div>

  


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



      


    </div>
  </div>
 </div>
</div>
 </div>
  <div class="row">

  </div>


<?php include_once '../layouts/footer.php'; ?>
