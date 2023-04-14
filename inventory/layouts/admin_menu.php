<?php
/**
 * layouts/admin_menu.php
 *
 * @package default
 */


?>
<ul>
  <li>
    <a href="../users/admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-flash"></i>
      <span>Components</span>
    </a>
    <ul class="nav submenu">
       
       <li><a href="../products/categories.php">Categories</a> </li>
       <li><a href="../products/products.php">Manage Components</a> </li>
       <li><a href="../products/product_search.php">Component Search</a> </li>
       <li><a href="../products/stock.php">Manage Stock</a> </li>
   </ul>
  </li>
  
  
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Reports</span>
      </a>
      <ul class="nav submenu">
        <li><a href="../reports/stock_report.php">Stock Report </a></li>
        
      </ul>
  </li>

  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-cog"></i>
      <span>User Management</span>
    </a>
    <ul class="nav submenu">
      <li><a href="../users/group.php">Manage Groups</a> </li>
      <li><a href="../users/users.php">Manage Users</a> </li>
      <li><a href="../users/log.php">System Log</a> </li>
   </ul>
  </li>

</ul>
