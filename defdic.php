<style>
.img:hover{
    color: #424242; 
  -webkit-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -ms-transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  transition: all .3s ease-in;
  opacity: 1;
  transform: scale(2.5);
  -ms-transform: scale(2.5); /* IE 9 */
  -webkit-transform: scale(2.5); /* Safari and Chrome */

}
</style><?php
include('header.php');
include('session.php');
$user_query = mysql_query("select * from teacher where teacher_id='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
<body>
<div class="controls">
                                <button class="btn btn-success">Detecting Common Keywords in Project Proposals submitted by principal investigators Credits:V.Tamilarasi KG College of Arts & Science Under Guidance of Jeevithapriya and Karthikeyan</button>
                            </div>
  <?php include('navhead_user.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1"><ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                           <li>
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                      
                                                 
                        <li>
                            <a href="dic.php"><i class="icon-file-alt icon-large"></i>&nbsp;Project Proposal
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
			<ul class="nav  nav-pills nav-stacked">
			<li>
                            <a href="hdic.php"><i class="icon-file-alt icon-small"></i>&nbsp;BioTech Medicine
                                <div class="pull-right">
                              <i class="icon-double-angle-right icon-small"></i>
                                </div>  
                            </a></li>
			<li>
                            <a href="sdic.php"><i class="icon-file-alt icon-small"></i>&nbsp;BioTech Agriculture
                               
                            </a></li>
			<li class="active">
                            <a href="defdic.php"><i class="icon-file-alt icon-small"></i>&nbsp;BioTech Food Processing
                                 
                            </a></li>
			<li>
                            <a href="adic.php"><i class="icon-file-alt icon-small"></i>&nbsp;Biotechnology in Animal
                                
                            </a></li>
			<li>
                            <a href="dfddic.php"><i class="icon-file-alt icon-small"></i>&nbsp;Molecular Biotechnology
                                  
                            </a></li>
			<li>
                            <a href="erddic.php"><i class="icon-file-alt icon-small"></i>&nbsp;Environmental Biotechnology
                                 
                            </a></li>
			</ul>

                    </ul>
                </div>

            </div>
            <div class="span9">
                           <br></br>
                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Common Keyword Detection</strong>
                        </div>
                        <thead>
                            <tr>
				<th>Category</th>
                                <th>Keywords</th>
                                <th>Project Proposal</th>
  				<th>Photo</th>
                             </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysql_query("select * from dic where cat='BioTech Food Processing'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $word = $row['cat'];
                                ?>
                                <tr class="odd gradeX">
                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#d<?php echo $word; ?>').tooltip('show')
                                    $('#d<?php echo $word; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
                         
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#v<?php echo $word; ?>').tooltip('show')
                                    $('#v<?php echo $word; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
				<td><?php echo $row['cat']; ?></td> 
                            	<td><?php echo $row['word']; ?></td>
                            <td><?php echo $row['meaning']; ?></td> 
				  <td width="50"><img class="img" src="<?php echo $row['photo']; ?>" height="100" width="130"></td>
                           

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


