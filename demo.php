<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesold.css">
    <!-- endbuild -->
    <title>Travel Go: Different Route</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="./index.php"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="./payment.html"><span class="fa fa-money fa-lg"></span> Transaction</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Travel Go</h1>
                    <p>The sky's the limit! We'll show you the world. Sandy beaches to snowy peaks. Get with us and get away.</p>
                </div>
                <div class="col-12 col-sm align-self-center">
                    <img src="img/logo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <ol class="col-12 breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item">Different Route</li>
                    </ol>
                    <h3>Different Route</h3>
                    <hr>
                </div>
            </div>
        </div>
	<?php

class Node
{
    public $name;
    public $linked = array();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function link_to(Node $node, $also = true)
    {
        if (!$this->linked($node)) $this->linked[] = $node;
        if ($also) $node->link_to($this, false);
        return $this;
    }

    private function linked(Node $node)
    {
        foreach ($this->linked as $l) { if ($l->name === $node->name) return true; }
        return false;
    }

    public function not_visited_nodes($visited_names)
    {
        $ret = array();
        foreach ($this->linked as $l) {
            if (!in_array($l->name, $visited_names)) $ret[] = $l;
        }
        return $ret;
    }
}


$srinagar = new Node('srinagar');
$ludhiana = new Node('ludhiana');
$jaipur = new Node('jaipur');
$ahmedabad = new Node('ahmedabad');
$mumbai = new Node('mumbai');
$bangalore = new Node('bangalore');
$kochi = new Node('kochi');
$chennai = new Node('chennai');
$vizag = new Node('vizag');
$durgapur = new Node('durgapur');
$guwahati = new Node('guwahati');
$lucknow = new Node('lucknow');
$gangtok = new Node('gangtok');



$srinagar->link_to($ludhiana);
$ludhiana->link_to($jaipur);
$jaipur->link_to($ahmedabad);
$ahmedabad->link_to($mumbai);
$mumbai->link_to($bangalore);
$bangalore->link_to($kochi);
$kochi->link_to($chennai);
$chennai->link_to($vizag);
$vizag->link_to($durgapur);
$durgapur->link_to($guwahati);
$guwahati->link_to($gangtok);
$gangtok->link_to($lucknow);
$lucknow->link_to($srinagar);
$jaipur->link_to($kochi);
$mumbai->link_to($lucknow);
$ahmedabad->link_to($lucknow);
$mumbai->link_to($vizag);
$lucknow->link_to($vizag);




function dfs(Node $node, Node $destination, $path = '', $visited = array())
{
    $visited[] = $node->name;
    $not_visited = $node->not_visited_nodes($visited);
    $temp=0;
    if (empty($not_visited)) 
    {
        if($node->name==$destination->name)
        { $temp=1;}
        if($temp==1){
        echo 'path : ' . $path . ' >> ' . $node->name ."<br>";}
        
        return;
    }

    foreach ($not_visited as $n) dfs($n, $destination, $path . ' >> ' . $node->name, $visited);
}


$temp1=$_POST["source"];
$temp2=$_POST["destination"];

if($temp1=="srinagar")
    $source=$srinagar;
elseif($temp1=="ludhiana")
    $source=$ludhiana;
elseif($temp1=="jaipur")
    $source=$jaipur;
elseif($temp1=="ahmedabad")
    $source=$ahmedabad;
elseif($temp1=="mumbai")
    $source=$mumbai;
elseif($temp1=="bangalore")
    $source=$bangalore;
elseif($temp1=="kochi")
    $source=$kochi;
elseif($temp1=="chennai")
    $source=$chennai;
elseif($temp1=="vizag")
    $source=$vizag;
elseif($temp1=="durgapur")
    $source=$durgapur;
elseif($temp1=="guwahati")
    $source=$guwahati;
elseif($temp1=="lucknow")
    $source=$lucknow;
elseif($temp1=="gangtok")
    $source=$gangtok;



if($temp2=="srinagar")
    $destination=$srinagar;
elseif($temp2=="ludhiana")
    $destination=$ludhiana;
elseif($temp2=="jaipur")
    $destination=$jaipur;
elseif($temp2=="ahmedabad")
    $destination=$ahmedabad;
elseif($temp2=="mumbai")
    $destination=$mumbai;
elseif($temp2=="bangalore")
    $destination=$bangalore;
elseif($temp2=="kochi")
    $destination=$kochi;
elseif($temp2=="chennai")
    $destination=$chennai;
elseif($temp2=="vizag")
    $destination=$vizag;
elseif($temp2=="durgapur")
    $destination=$durgapur;
elseif($temp2=="guwahati")
    $destination=$guwahati;
elseif($temp2=="lucknow")
    $destination=$lucknow;
elseif($temp2=="gangtok")
    $destination=$gangtok;

dfs($source,$destination);
?>

</div>
<br>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        Mumbai<br>
                        <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:travelgo.gmail.com">travelgo.gmail.com</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2018 Travel Go</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <!-- build:js js/main.js -->
   
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <!-- endbuild -->
</body>

</html>

