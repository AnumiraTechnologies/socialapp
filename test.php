<html>
<head>

<script src="js/jquery-1.7.2.js"></script>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<?php
				$arr = array("kejriwal"=>"1",
							 "sachin"=>"1",
							 "Sonia Gandhi"=>"1",
							 "Hazare"=>"1",
							 "Rahul Gandhi"=>"1");
				$arr['kejriwal'] = 12;
				$arr['sachin'] = 32;
				$arr['Sonia Gandhi'] = 43;
				$arr['Hazare'] = 53;
				$arr['Rahul Gandhi'] = 53;
				$arr['others'] = 42;
				arsort($arr);
				foreach ($arr as $key=>$value) {
				echo "<br>" . $key . "->" . $value;
				}
				$json = json_encode($arr);
?>

</head>
<body>
<span id="chart">

Test

<script>
    $(document).ready(function(){
var r = 700
var bubble_layout = d3.layout.pack()
    .size([r,r])
    .padding(1.5);

var vis = d3.select("#chart").append("svg")
    .attr("width" , r)
    .attr("height", r)

//var arr = <?php echo $json; ?>;
var arr = [
   { name : '1', value: 1 }
  ,{ name : '2', value: 1 }
  ,{ name : '3', value: 1 }
  ,{ name : '4', value: 1 }
  ,{ name : '5', value: 1 }
  ,{ name : '6', value: 1 }
  ,{ name : '7', value: 1 }
  ,{ name : '8', value: 1 }
  ,{ name : '9', value: 1 }
  ,{ name : '10', value: 1 } 
  ,{ name : '11', value: 0 } //Adding more or less data elements with value 0 makes bubbles disappear
  ,{ name : '12', value: 0 }
  ,{ name : '13', value: 0 }
  ,{ name : '14', value: 0 }
  ,{ name : '15', value: 0 }
  ,{ name : '16', value: 0 }
  ,{ name : '17', value: 0 }
  ,{ name : '18', value: 0 }
  ,{ name : '19', value: 0 }
  ,{ name : '20', value: 0 }
  ,{ name : '21', value: 0 }
  ,{ name : '22', value: 0 }
  ,{ name : '23', value: 0 }
  ,{ name : '24', value: 0 }
  ,{ name : '25', value: 0 }
  ,{ name : '26', value: 0 }
  ,{ name : '27', value: 0 }
  ,{ name : '28', value: 0 }
  ,{ name : '29', value: 0 }
  ,{ name : '30', value: 0 }
  ,{ name : '31', value: 0 }
  ,{ name : '32', value: 0 }
  ,{ name : '33', value: 0 }
  ,{ name : '34', value: 0 }
  ,{ name : '35', value: 0 }
  ,{ name : '36', value: 0 }  
];
    
    

var selection = vis.selectAll("g.node")
              .data(bubble_layout.nodes({children: arr}).filter(function(d) { return !d.children; }) ); 

//Enter
//HERE
var node = selection.enter().append("g")
              .attr("class", "node")
              .attr("transform", function(d) { return "translate(" + d.x + ", " + d.y + ")"; }).filter(function(d){
      return d.value > 0;
    })  // HERE
    
node.append("circle")
    .attr("r", function(d) { return d.r; })
    .style("fill", function(d) { return 'aaaaaa'; });

node.append("text")
    .attr("text-anchor", "middle")
    .attr("dy", ".3em")
    .text(function(d) { return d.name; });

});

</script>

</body>
</html>