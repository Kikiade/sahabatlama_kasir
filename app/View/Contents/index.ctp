<!-- Title area -->
 <div class="titleArea">
  <div class="wrapper">
    <div class="pageTitle">
      <h5>Content</h5>
        <span>Sahabat lama cuci management system</span>
          </div>
           <div class="middleNav">
             <ul>
               <li class="mUser"><a href="http://localhost/sl_kasir/VehicleCategoryCosts/Add" title=""><span class="users"></span></a>
                <ul class="mSub1">
                 </ul>
               </li>
             </ul>
           </div>
   </div>
 </div>


<div id="rightSide">
<div class="line"></div>
    
<!-- Main content wrapper -->
 <div class="wrapper">
 <br />
	<!-- Breadcrumbs -->
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                 <li>
                      <a href="#">Dashboard</a>
                 </li>
                 <li>
                      <a href="#">Content stuff</a>
                 </li>
                 <li>
                      <a href="#">Tables</a>
                 </li>
                 <li class="current"><a href="#">Current page</a></li>
            </ul>
        </div>

        <div class="widget">
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
             <thead>
                <tr>
                    <td><center><?php echo $this->Paginator->sort('id','ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('News Content','Model ID');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('type', 'Type');?></center></td>
		    <td><center><?php echo $this->Paginator->sort('host', 'Host');?></center></td>
                    <td><center><?php echo $this->Paginator->sort('url', 'URL');?></center></td>
                    <td><center>Action</center></td>
                </tr>
              </thead>  
                <?php foreach ($contents as $content): ?>
                <tbody>
                    <tr>
                        <td><?php echo $newscontent ['NewsContent']['id']; ?></td>
                        <td><?php echo $newscontent ['NewsContent']['title']; ?></td>
                        <td><?php echo $newscontent ['NewsContent']['description']; ?></td>
                        <td><?php echo $newscontent ['NewsContent']['posted']; ?></td>
                        <td><?php echo $newscontent ['NewsCategory']['name']; ?></td>
                        <td>
                            <?php
                                if($newscontent['NewsContent']['status'] == 0)
                                    {
                                        echo 'Not Active';
                                    }
                                        else{
                                            echo 'Active';
                                    } 
                            ?>
                        </td>
                        <td><?php echo $newscontent ['NewsContent']['created']; ?></td>
                        <td>
                            <?php
                                echo $this->Html->link('View', array('action' => 'view', $newscontent['NewsContent']['id']));
                            ?>
                            <?php
                                echo $this->Html->link('Edit', array('action' => 'edit', $newscontent['NewsContent']['id']));
                            ?>  
                            <?php
                                echo $this->Html->link('Delete', array('action' => 'delete', $newscontent['NewsContent']['id']));
                            ?>
                        </td>
                    </tr>
                 </tbody>    
                 <?php endforeach ;?>
                 <?php unset($newscontent);?>
            </table>
            </div>
              <div class="pagination">
            	<ul class="pages">
                  <?php
                        echo $this->Paginator->prev(__('<'), array(
							'tag' => 'li',
							'class' => 'prev disabled'
						));
                        echo $this->Paginator->numbers(array(
															  'separator' => ' ',
															  'tag' => 'li',
															  'currentClass' => 'active',
                      ));
                        echo $this->Paginator->next(__('>'), array(
							'tag' => 'li',
							'class' => 'next disabled'
						)
                      );
                  ?>
               </ul>
           </div>
	</div>		