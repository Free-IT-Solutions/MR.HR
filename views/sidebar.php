<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav" style="padding-right: 0;">    
        <li>
          <a href="#subPages1" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="lnr lnr-file-empty"></i> <span>الموظفون</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages1" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="lnr lnr-user"></i> <span>الموظفون</span></a></li>
            </ul>
          </div>
        </li>      

        <li>
          <a href="#subPages2" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="fa fa-bank"></i> <span>البنوك</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages2" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
              <li><a href="bank.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة البنوك</span></a></li>
              <li><a href="addBank.php" class="<?php echo ($HR=='bank') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة بنك</span></a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#subPages3" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="fa fa-institution"></i> <span>الأفرع</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages3" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة الأفرع</span></a></li>
            <li><a href="addBranch.php" class="<?php echo ($HR=='branch') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة فرع</span></a></li>
           </ul>
          </div>
        </li>    


        <li>
          <a href="#subPages4" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="fa fa-building-o"></i> <span>الأقسام</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages4" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة الأقسام</span></a></li>
            <li><a href="addSections.php" class="<?php echo ($HR=='section') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة قسم</span></a></li>
            </ul>
          </div>
        </li>   
        
        <li>
          <a href="#subPages5" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="fa fab fa-bitcoin"></i> <span>البدلات</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages5" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة البدلات</span></a></li>
            <li><a href="addBonus.php" class="<?php echo ($HR=='bonus') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة بدل</span></a></li>
            </ul>
          </div>
        </li>     
        
        <li>
          <a href="#subPages6" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="fa fas fa-calculator"></i> <span>الحسومات</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages6" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة الحسومات</span></a></li>
            <li><a href="addDiscount.php" class="<?php echo ($HR=='discount') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة حسم</span></a></li>
            </ul>
          </div>
        </li>  

        <li>
          <a href="#subPages7" data-toggle="collapse" class="<?php echo ($HR=='profile') ? 'active' : 'collapsed'; ?>">
          <i class="lnr lnr-apartment"></i> <span>شركات التأمين</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
          </a>
          <div id="subPages7" class="<?php echo ($HR=='profile') ? 'collapse in' : 'collapse'; ?>">
            <ul class="nav">
            <li><a href="employee.php" class="<?php echo ($HR=='employee') ? '' : ''; ?>"><i class="fa fa-eercast"></i> <span>قائمة شركات التأمين</span></a></li>
            <li><a href="addInsurance.php" class="<?php echo ($HR=='insurance') ? 'active' : ''; ?>"><i class="fa fa-eercast"></i> <span>إضافة شركة تأمين</span></a></li>
            </ul>
          </div>
        </li>  

        
        
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
