<?php
include('header.php');
include ('session.php');
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
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li>
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                    
                      
                        <li><a href="dic.php"><i class="icon-file-alt icon-large"></i>&nbsp;Project Proposals
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                       


                    </ul>
                </div>

            </div>
            <div class="span9">





                <a href="teacher_class.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br>
                <br>

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;Add Project Proposal</strong>
                </div>
                <div class="hero-unit-2">
                    <form class="form-horizontal" method="POST">
                       

                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Category</label>
                            <div class="controls">
				<div class="controls">
                           				
								<select name="cat" id="inputEmail" placeholder="cat">
	    <option value="BioTech Medicine">BioTech Medicine</option>
		 <option value="BioTech Agriculture">BioTech Agriculture</option>
		  <option value="BioTech Food Processing">BioTech Food Processing</option>
		   <option value="Biotechnology in Animal">Biotechnology in Animal</option>
		   <option value="Molecular Biotechnology">Molecular Biotechnology</option>
		     <option value="Environmental Biotechnology">Environmental Biotechnology</option>
	    </select>
                       		</div>
                            </div>
                        </div>

                     <div class="control-group">
                            <label class="control-label" for="inputEmail">Keywords</label>
                            <div class="controls">
				<div class="controls">
                            	<input type="text" name="word" id="inputEmail" placeholder="Keyword">
                       		</div>
                            </div>
                        </div>


			<div class="control-group">
                            <label class="control-label" for="inputEmail">Project Proposal</label>
                            <div class="controls">
				<div class="controls">
                            	<input type="text" name="meaning" id="inputEmail" placeholder="Proposal">
                       		</div>
                            </div>
                        </div>


			<div class="control-group">
                            <label class="control-label" for="inputEmail">Upload Image</label>
                            <div class="controls">
				<div class="controls">
                            <input type="text" name="photo" id="inputEmail" placeholder="photo">
                       		</div>
                            </div>
                        </div>




                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="save_class" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Project Proposal</button>
                            </div>
                            <?php
                            if (isset($_POST['save_class'])) {
                               
                                $cat = $_POST['cat'];
                                $word = $_POST['word'];
                                $meaning = $_POST['meaning'];
 				$photo = $_POST['photo'];

				mysql_query("insert into dic (cat,word,meaning,photo) values('$cat','$word','$meaning','$photo')") or die(mysql_error());
                                header('location:dic.php');
                            }
                            ?>
                        </div>
                    </form>
                </div>




                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


