<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connection.php";
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $LOGIN_COLUMN_USERNAME='username';
    $LOGIN_COLUMN_PASSWORD='password';

    $stmt=$con->prepare("select count(*) from login where $LOGIN_COLUMN_USERNAME=? and $LOGIN_COLUMN_PASSWORD=?");
    $stmt->bind_param("ss",$username,$pwd);

    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();

    if($count==1){
        session_start();
        $_SESSION['id']=$username;
        header('location:student.php');
    }
    else{
        echo "<script>
alert('username and password don\'t match');
window.location='index.php';
</script>";
    }
}
?>
<html
<head>
    <title>GateSmashers</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="library/ack.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="overflow:scroll; background-image:url('library/mainback.jpg'); background-repeat:no-repeat; background-size:cover;">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="background-color:red">Gatesmashers</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="">Previous year question paper dropdown</a></li>
                <li><a href="#">handwritten notes from Admin(faculty)</a></li>
                <li><a href="#">Gates as a career nitro</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#demo">
                            <div class="modal fade" id="demo" role="dialog">
        <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Login to Gatesmashers.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="reg no">
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                    <br>
                              </div>
                                  <button type="submit" class="btn btn-success btn-block">Login</button>
                          </form>
                      </div>
                  </div>

                   <div class="col-md-6">

                       <p class="lead">Register now @ <span class="text-success">10,000/-</span></p>
                       <p><Strong>Course:</strong> GATE CSE
                          <br>
                          <Strong>Starting From: </strong>25<sup>th</sup>September(Monday)
                          <br>
                          <Strong>Course Duration: </strong>4 Months
                          <br>
                          <Strong>Course Fees: </strong>10000 INR
                          <br>
                          <Strong>Venue:34-110 </strong>34-110
                          <br>
                          <Strong>TIming: </Strong>05:10 to 06:30 PM
                          <br>
                       <br></p>

                          <p><a href="contactus.php" class="btn btn-info btn-block">Yes please, register now!</a></p>
                  </div>
              </div>
          </div>
      </div>
        </div>

                            </div>
                       </span>
                </a>
            </li>
        </ul>
    </div>
</div>
</nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="library/image0.jpg" alt="coaching">
      </div>

    <div class="item">
      <img src="library/image1.jpg" alt="coaching">
      </div>

    <div class="item">
      <img src="library/image1.jpg" alt="Coaching">
    </div>
  </div>
  
	

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="col-md-12 pad">
    <div class="col-md-3" id="pancy">
        <ul class="list-group">
            <li class="list-group-item topic">Subject</li>
            
			
			<li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-plus">&nbsp;</span>Data Structures</a>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="ds"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-plus">&nbsp;</span>Algorithm</a>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="algo"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div>
                </li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-plus">&nbsp;</span>Digital Logic</a>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="dl"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="glyphicon glyphicon-plus">&nbsp;</span>Computer Org. & Architecture</a>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="cod"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="glyphicon glyphicon-plus">&nbsp;</span>Computer Network</a>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="cn"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span class="glyphicon glyphicon-plus">&nbsp;</span>Engineering Mathematics</a>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="em"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><span class="glyphicon glyphicon-plus">&nbsp;</span>Theory of Computation</a>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="tc"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><span class="glyphicon glyphicon-plus">&nbsp;</span>Compiler Design</a>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="cd"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><span class="glyphicon glyphicon-plus">&nbsp;</span>Database</a>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="db"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>
            <li class="list-group-item shadow"><div id="accordion">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><span class="glyphicon glyphicon-plus">&nbsp;</span>Operating System</a>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body"><center><ul>
									<a id="os"><li></li></a>
									<li></li>
									</ul></center></div>
    </div></div></li>

        </ul>

    </div>
        <div class="col-md-9" id="liver">
            <div class="panel panel-info">
                <div class="panel-heading" id="content">Expected Questions</div>
                <div class="panel-body" id="belly">


                    <?php
include "connection.php";
$con->set_charset("utf8");
$create="create table if not exists expected (id int auto_increment,question varchar(300),subject varchar(20),answer varchar(5),
primary key(id))";
mysqli_query($con,$create);

$create="create table if not exists expectedAnswer(id int auto_increment,optiona varchar(20),optionb varchar(20),optionc varchar(20) ,optiond varchar(20),
primary key(id))";
mysqli_query($con,$create);                

$sql = "SELECT COUNT(*) FROM expected";
$result = mysqli_query($con,$sql);
$r = mysqli_fetch_row($result);
$numrows = $r[0];
$rowsperpage = 3; //set the range of question per page
$totalpages = ceil($numrows / $rowsperpage);

if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
    $currentpage = (int) $_GET['currentpage'];
} else {
    $currentpage = 1;
}
if ($currentpage > $totalpages) {
    $currentpage = $totalpages;
} if ($currentpage < 1) {
    $currentpage = 1;
}
$offset = ($currentpage - 1) * $rowsperpage;
$count=0;

$sql = "SELECT expected.id,expected.question,expected.answer,expected.subject,expectedAnswer.optiona,
expectedAnswer.optionb,expectedAnswer.optionc,expectedAnswer.optiond
 FROM expected,expectedAnswer where expected.id=expectedAnswer.id LIMIT $offset, $rowsperpage";

$result = mysqli_query($con, $sql);
while ($list = mysqli_fetch_assoc($result)) {
    if($count%2==0)
        echo "<div class='even'>";
        else
        echo "<div class='odd'>";
    $count++;
    echo $list['id']  . " : " . $list['question'] . "  [".$list['subject']."]"."<br />";
    echo "A ".$list['optiona']."<br>";
    echo "B ".$list['optionb']."<br>";
    echo "C ".$list['optionc']."<br>";
    echo "D ".$list['optiond']."<br>";

    echo "<div class='answer' id='answer".$count."'>".$list['answer']."</div>" ;
    echo "<a href='#' id='click".$count."' onclick=$('#answer".$count."').slideToggle('slow')>View Answer</a>";
    echo "<hr></div>";
    }
$range = 3;

if ($currentpage > 1) {
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
    $prevpage = $currentpage - 1;
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
}
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
    if (($x > 0) && ($x <= $totalpages)) {
        if ($x == $currentpage) {
            echo " [<b>$x] ";
        } else {
            echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
        }
    }
}
if ($currentpage != $totalpages) {
    $nextpage = $currentpage + 1;
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
    echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
}
?>




                </div>
            </div>
        </div>

    <script>
	$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});
        $(document).ready(function()
        {$(".answer").hide();
        $("#ds").click(function()
        {$("#content").text("Data Structures");
            $("#belly").load("subject.php?sub='ds'");
        });
            $("#algo").click(function(){
                $("#content").text("Algorithms");
                $("#belly").load("subject.php?sub='algo'");
            });
            $("#dl").click(function(){
                $("#content").text("Digital Logic");
                $("#belly").load("subject.php?sub='digital'");
            });
            $("#cod").click(function(){
                $("#content").text("Computer Organisation and Architecture");
                $("#belly").load("subject.php?sub='cod'");
            });
            $("#cn").click(function(){
                $("#content").text("Computer Network");
                $("#belly").load("subject.php?sub='cn'");
            });
            $("#em").click(function(){
                $("#content").text("Engineering Mathematics");
                $("#belly").load("subject.php?sub='em'");
            });
            $("#tc").click(function(){
                $('#content').text("Theory of Computation");
                $("#belly").load("subject.php?sub='tc'");
            });
            $('#cd').click(function(){
                $('#content').text("Compiler Design");
                $("#belly").load("subject.php?sub='cd'");
            });
            $('#db').click(function(){
                $('#content').text("Database");
                $("#belly").load("subject.php?sub='db'");
            });
            $('#os').click(function(){
                $('#content').text("Operating System");
                $("#belly").load("subject.php?sub='os'");
            });
            $('#ie').click(function(){
                $('#content').text("Interview Questions");
                $("#belly").load("subject.php?sub='ie'");
            });
            $('#ads').click(function(){
                $('#content').text("Advanced Data Structures");
                $("#belly").load("subject.php?sub='ads'");
            });
            $('#dp').click(function(){
                $('#content').text("Dynamic Programming");
                $("#belly").load("subject.php?sub='dp'");
            });
            $('#ga').click(function(){
                $('#content').text("Greedy Algorhythm");
                $("#belly").load("subject.php?sub='ga'");
            });
            $('#bt').click(function(){
                $('#content').text("Backtracking");
                $("#belly").load("subject.php?sub='bt'");
            });
            $('#ps').click(function(){
                $('#content').text("Pattern Searching");
                $("#belly").load("subject.php?sub='ps'");
            });
            $('#dnc').click(function(){
                $('#content').text("Divide & Conquer");
                $("#belly").load("subject.php?sub='dnc'");
            });
            $('#goa').click(function(){
                $('#content').text("Geometric Algorithm");
                $("#belly").load("subject.php?sub='goa'");
            });
            $('#rc').click(function(){
                $('#content').text("Recursion");
                $("#belly").load("subject.php?sub='rc'");
            });
            $('#gt').click(function(){
                $('#content').text("Game Theory");
                $("#belly").load("subject.php?sub='gt'");
            });
        });
        </script>
</div>
<footer class="container-fixed text-center">

      <span style="text-align: center">
      <p>Terms and conditions.&nbsp;&nbsp;&nbsp;Terms and Condition apply.&nbsp;&nbsp;&nbsp;Please cooperate with us.</p>
          <p>&copy;&nbsp;&nbsp;&nbsp;Gatesmashers.com</p></span>

</footer>
</body>
</html>

