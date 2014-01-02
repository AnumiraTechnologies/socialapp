<?php
session_start();
if(!isset($_SESSION['bdid'])) { echo "Authentication failed !"; } else {
?>

    <script type="text/javascript" src="d3.js?2.2.0"></script>
    <style type="text/css">

@import url("style.css?1.10.0");
@import url("syntax.css?1.6.0");

    </style>
<?php
if (function_exists('date_default_timezone_set')) {
        date_default_timezone_set('UTC');
}

require 'lib/datasift.php';

class EventHandler implements DataSift_IStreamConsumerEventHandler
{

        private $_num = 10;
        private $a = 0;
        private $b = 0;
        private $c = 0;
        private $d = 0;
        private $e = 0;

        public function onConnect($consumer)
        {

        }

        public function onInteraction($consumer, $interaction, $hash)
        {
				$text = $interaction['twitter']['text'];
 				if(strpos($text,"kejriwal") !== false) { $this->a = $this->a + 1; }
				elseif(strpos($text,"sachin") !== false) { $this->b = $this->b + 1; }
				elseif(strpos($text,"Sonia Gandhi") !== false) { $this->c = $this->c + 1; }
				elseif(strpos($text,"AAP") !== false) { $this->d = $this->d + 1; }
				elseif(strpos($text,"Rahul Gandhi") !== false) { $this->e = $this->e + 1; }
				else { $this->f = $this->f + 1; } 

                if ($this->_num-- == 1) {
						$arr = array("kejriwal"=>"1",
							 "sachin"=>"1",
							 "Sonia Gandhi"=>"1",
							 "AAP"=>"1",
							 "Rahul Gandhi"=>"1");
				$arr['kejriwal'] = $this->a;
				$arr['sachin'] = $this->b;
				$arr['Sonia Gandhi'] = $this->c;
				$arr['AAP'] = $this->d;
				$arr['Rahul Gandhi'] = $this->e;
				arsort($arr);

                        $consumer->stop();

$i = 0;
						  foreach ($arr as $key=>$value) {
						  $i++;
						  ?>
		<div class="row-fluid">
			<div class="span2">
				<h3><?php echo $i; ?></h3>
			</div>
			<div class="span2">
				<h3><?php echo $key; ?></h3>
			</div>
			<div class="span2">
				<h3><?php echo $value; ?></h3>
			</div>
		</div>						  
						  <?php
}			
?>
			<div class="row-fluid">
		<div class="span8">
<div id='chart'> </div>
<link href='bubble.css' rel='stylesheet' type='text/css' />
<script src='d3.layout.js?2.2.0' type='text/javascript'> </script>
<script>
var r = 560,
    format = d3.format(",d"),
    fill = d3.scale.category20c();

var bubble = d3.layout.pack()
    .sort(null)
    .size([r, r]);

var vis = d3.select("#chart").append("svg:svg")
    .attr("width", r)
    .attr("height", r)
    .attr("class", "bubble");


var json = {
     "name": "Elections 2014",
     "children": [
      {"name": "kejriwal", "size": <?php echo ($this->a / 10); ?>},
      {"name": "sachin", "size": <?php echo ($this->b / 10); ?>},
      {"name": "Sonia Gandhi", "size": <?php echo ($this->c / 10); ?>},
      {"name": "AAP", "size": <?php echo ($this->d / 10); ?>},
      {"name": "Rahul Gandhi", "size": <?php echo ($this->e / 10); ?>}
     ]
    };

  var node = vis.selectAll("g.node")
      .data(bubble.nodes(classes(json))
      .filter(function(d) { return !d.children; }))
    .enter().append("svg:g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

  node.append("svg:title")
      .text(function(d) { return d.className});

  node.append("svg:circle")
      .attr("r", function(d) { return d.r; })
      .style("fill", function(d) { return fill(d.packageName); });

  node.append("svg:text")
      .attr("text-anchor", "middle")
      .attr("dy", ".3em")
      .text(function(d) { return d.className.substring(0, d.r / 3); });


// Returns a flattened hierarchy containing all leaf nodes under the root.
function classes(root) {
  var classes = [];

  function recurse(name, node) {
    if (node.children) node.children.forEach(function(child) { recurse(node.name, child); });
    else classes.push({packageName: name, className: node.name, value: node.size});
  }

  recurse(null, root);
  return {children: classes};
}
</script>

		</div>

		</div>
<?php
                }
        }

        public function onDeleted($consumer, $interaction, $hash)
        {

        }

        public function onStatus($consumer, $type, $info)
        {
                switch ($type) {
                        default:

                                break;
                }
        }

        public function onWarning($consumer, $message)
        {

        }

        public function onError($consumer, $message)
        {

        }

        public function onDisconnect($consumer)
        {

        }

        public function onStopped($consumer, $reason)
        {

        }
}


$user = new DataSift_User('senthil123kumar', '08850cbc877a9b626bc7ebcb46556ef9');
$user->enableSSL(false);

$csdl = 'twitter.text cs contains_any "Rahul Gandhi,Sonia Gandhi,AAP,kejriwal,sachin"';
$definition = new DataSift_Definition($user, $csdl);

$consumer = $definition->getConsumer(DataSift_StreamConsumer::TYPE_HTTP, new EventHandler());

$consumer->consume(); 

}
?>		