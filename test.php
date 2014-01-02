
<!DOCTYPE html>
<head>
<title>Bubble My Page Visualization - http://www.news.com - using D3js.org</title>
<meta charset="utf-8">
<style>

text {
  font: 10px sans-serif;
}

table
{
border-collapse:collapse;
}
table,th, td
{
border: 1px solid gray;
}

</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-212620-1']);
  _gaq.push(['_setDomainName', 'infocaptor.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!--http://www.infocaptor.com-->
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"         type="text/javascript"></script>

<script>
   $(document).ready(function () 
	   {
	   
var page_text='                              CNET  News                            English     English Español      Reviews      Top Categories More Categories   Car Tech Cell Phones Desktops Digital Cameras Home Audio Laptops Printers Tablets Televisions Forums   Appliances Camcorders Cell Phone Accessories E-book Readers Games   Gear GPS Hard Drives   Storage Headphones Home Video Internet Access   Monitors MP3 Players Networking   Wi-Fi Peripherals Software Wearable Tech Web Hosting         You are here: News       Latest News Mobile Startups Cutting Edge Internet   Media Security   Privacy Business Tech Crave   Apple Microsoft Politics   Law Tech Culture Blogs Video Photos RSS        Download       Windows Software Mac Software iOS Apps Android Apps The Download Blog        CNET TV       Most Popular New Releases Products Tech Shows How To Appliances Car Tech Cell Phones Tablets   Always On Apple Byte CNET On Cars CNET Top 5 CNET Update Googlicious Next Big Thing The 404 XCAR        How To       Appliances Computers Home Theater Photography Privacy Productivity Security Smartphones Tablets Web How To Video        Deals       Today s Deals Coupon Codes Marketplace Blog                    Log In | Join      Facebook Timeline options  Log In Join CNET Sign in with             Facebook Timeline options   My profile Log out                                      Home News      listen up          Will streaming music ever make money? 2014 may tell Online streaming music grew in popularity and reach in 2013, but examples of those doing it profitably are still scarce. Here s what may make next year different.              Apple and Google s mobile war: A photographic timeline pictures Get refreshed on the biggest moves from Google and Apple in the still-raging smartphone war. Video: iOS vs. Android -- the psychology that fuels the phone wars              New malware roosting place: Inside SD Cards? A pair of security researchers have figured out how to subvert tiny controller chips in flash-memory storage devices, an approach that could expose people s private data.    Top Technology News         HP adds 5,000 jobs to layoff plan  Computer giant is increasing the number of positions it expects to eliminate as part of a years-long turnaround plan.          Why  monster porn  needs love too  Do romance books with sexy dinosaurs, centaurs, Cthulhu, and aliens send your heart racing? After some such e-books get yanked by online booksellers, Crave s Bonnie Burton explains their appeal.          Netflix streaming purge for 1/1?   War Games  and the original  Dark Shadows  among the dozens of movie and TV shows set to expire, according to a list posted to Reddit.Netflix tests cheaper single-screen streaming plan          2013: The year in pictures  pictures From human biology to humanoid robots, we take you on a visual journey back through the year, with innovation an overriding theme.        Tech to expect in 2014  video From a gadget that lets you use your heartbeat as a password to devices with curved screens, CNET s Kara Tsuboi tells us what s in store for 2014.         Latest News   0 new posts  Refresh          Uber warns users of New Year s Eve surge pricing    Shortly after the ball drops and champagne corks are popped, the price for a ride with the car service will skyrocket. The company now explains to users how to avoid these fare hikes. more News  Dara Kerr  2 hours ago       Sony troubles persist: Factories said to be target of staff cuts    Sony is trying to make its consumer electronics business profitable. And that appears to require more cuts at production facilities. more News  Brooke Crothers  2 hours ago     Security camera captures video of massive blazing fireball    A fiery meteor catches the attention of more than 1,200 US residents -- some say it was as bright as the sun and others note it gave off sonic effects and delayed booms. more News  Dara Kerr  4 hours ago              HP adds another 5,000 jobs to layoff plan for 34,000 total    Computer giant is increasing the number of positions it expects to eliminate as part of a years-long turnaround plan. more News  Steven Musil  5 hours ago     Netflix tests cheaper single-screen streaming plan    Most users pay $7.99 to stream videos on two devices; but now the service is letting some new customers opt to pay $6.99 to stream on one device. more News  Dara Kerr  5 hours ago     New malware roosting place: Inside your SD Card?    A pair of security researchers have figured out how to subvert tiny controller chips in flash-memory storage devices, an approach that could expose people s private data. more News  Stephen Shankland  6 hours ago     IBM s 5 in 5: The five ideas that will change your life    From DNA medical treatments to digital guardians, IBM s annual  5 in 5  list looks at the things that will change our lives in the next five years. more News  Aliah Git  7 hours ago     Authors Guild appeals decision in Google Books copyright suit    The trade association for authors appeals a judge s decision to dismiss its lawsuit against the Web giant for scanning and digitizing millions of books without copyright holders  permission. more News  Dara Kerr  7 hours ago     Tech to expect in 2014            2014 could finally be the year Apple puts out its iWatch. But that s not the only new tech we re expecting next year. From a gadget that lets you use your heartbeat as a password to devices with curved screens, CNET s Kara Tsuboi tells us what s in store. more Video  Kara Tsuboi  8 hours ago     Tip: Copy search results directly from Spotlight    The Spotlight search results offer more options than just opening a located item. more How-to  Topher Kessler  8 hours ago     Top 5 most upgrade-worthly internal drives of 2013    CNET editor Dong Ngo picks the best internal drives for 2013 that make excellent storage replacements for your your aging computer. more Gadget  Dong Ngo  9 hours ago     BlackBerry CEO: We ll focus on enterprise, BBM in 2014    The latest executive to sit at the top of BlackBerry goes back to the drawing board for what could be the beleaguered phone maker s last grasp at survival. more News  Rachel King  9 hours ago     CES 2014: We ll take you there    From stellar panels to on-stage torture tests, CNET s CES 2014 coverage will make you rethink your definition of technology. Find out what we have in store for the first and largest tech show of the year. more News  Lindsey Turrentine  9 hours ago     Sexy beasts: Why  monster porn  needs love too    Do romance books with sexy dinosaurs, centaurs, Cthulhu, and aliens send your heart racing? After some such e-books get yanked by online booksellers, Crave s Bonnie Burton explains their appeal. more Feature  Bonnie Burton  9 hours ago     33 percent of Americans reject evolution    A Pew survey suggests that evolutionary skeptics continue to be out there. They are many. more News  Chris Matyszczyk  9 hours ago     See more content                         Hottest Reviews       Our favorite Windows laptop of the year Starting at $899.00  4.0 stars         The PlayStation 4 is here. Should you buy it now? Starting at $598.99  3.5 stars         The Xbox One is truly ambitious Starting at $499.99  3.5 stars         iPad Mini with Retina Display: Why it wins Starting at $399.00  4.5 stars             Featured Posts              Surveilling the new year: The NSA story moves into 2014 Politics and Law               Why Google Glass is the most personal tech you ll never own Tech Culture              5 apps to help you stick to your New Year s resolutions               Shark photobombs kids? Technically Incorrect               Nine tech torments I d like to see fixed in 2014 Business Tech              Most Popular    Teen, upset at not getting iPhone for Xmas, allegedly pulls knife on dad 3kFacebook Likes    Relax in this $30,000  Star Trek  Enterprise basement 560Tweets    NSA reportedly planted spyware on electronics equipment 349Google Plus Shares                                      CBS Interactive Inc. All rights reserved. Privacy Policy Ad Choice Terms of Use Mobile User Agreement   Visit other CBS Interactive sites:  Select Site CBS Cares CBS Films CBS Radio CBS.com CBS Interactive CBSNews.com CBSSports.com CHOW Clicker CNET College Network GameSpot Help.com Last.fm MaxPreps Metacritic MetroLyrics Moneywatch mySimon Radio.com Search.com Shopper.com Showtime SmartPlanet TechRepublic TV.com TVGuide.com UrbanBaby ZDNet     Moneywatch | CHOW | CNET.com | CNET Channel | GameSpot | International Media | mySimon | Search.com | TechRepublic | TV.com | ZDNet          Reviews All Reviews Camcorders Car Tech Cell Phones Digital Cameras GPS Laptops TVs   News All News Business Tech Crave Cutting Edge Green Tech Security Wireless   Downloads Add Your Software All Downloads Mac Mobile Software Deals Webware Windows   CNET TV All Videos Always On Apple Byte Most Popular CNET Top 5 CNET Update Prizefight   More About CBS Interactive About CNET CNET Deals CNET en Espa ol CNET Forums CNET Mobile CNET Site Map Corrections Help Center Permissions   Follow us via... Facebook Twitter Google+ YouTube LinkedIn Tumblr Pinterest Newsletters RSS                                                                 ';
//alert(page_text);
var diameter = 600 - 30,
    limit=5000,
    format = d3.format(",d"),
    color = d3.scale.category20c();

var bubble = d3.layout.pack()
    .sort(null)
    .size([diameter, diameter])
    .padding(1.5);

var svg = d3.select("#svgid").append("svg")
    .attr("width", diameter)
    .attr("height", diameter)
    .attr("class", "bubble");

	
var data=[
["Tea","Coffee","Soda","Chips","Milk","Chocolate","Beer","Wine","Tobacco","gold","silver"],
[130,30,200,40,230,150,80,65,20,10,100]
];	

var stopwords = {"com":1,"amp":1,"http":1,"href":1,"statuses":1,"search":1,"ago":1,"link":1,"hours":1,"comments":1,"a":1, "about":1, "above":1, "above":1, "across":1, "after":1, "afterwards":1, "again":1, "against":1, "all":1, "almost":1, "alone":1, "along":1, "already":1, "also":1,"although":1,"always":1,"am":1,"among":1, "amongst":1, "amoungst":1, "amount":1,  "an":1, "and":1, "another":1, "any":1,"anyhow":1,"anyone":1,"anything":1,"anyway":1, "anywhere":1, "are":1, "around":1, "as":1,  "at":1, "back":1,"be":1,"became":1, "because":1,"become":1,"becomes":1, "becoming":1, "been":1, "before":1, "beforehand":1, "behind":1, "being":1, "below":1, "beside":1, "besides":1, "between":1, "beyond":1, "bill":1, "both":1, "bottom":1,"but":1, "by":1, "call":1, "can":1, "cannot":1, "cant":1, "co":1, "con":1, "could":1, "couldnt":1, "cry":1, "de":1, "describe":1, "detail":1, "do":1, "done":1, "down":1, "due":1, "during":1, "each":1, "eg":1, "eight":1, "either":1, "eleven":1,"else":1, "elsewhere":1, "empty":1, "enough":1, "etc":1, "even":1, "ever":1, "every":1, "everyone":1, "everything":1, "everywhere":1, "except":1, "few":1, "fifteen":1, "fify":1, "fill":1, "find":1, "fire":1, "first":1, "five":1, "for":1, "former":1, "formerly":1, "forty":1, "found":1, "four":1, "from":1, "front":1, "full":1, "further":1, "get":1, "give":1, "go":1, "had":1, "has":1, "hasnt":1, "have":1, "he":1, "hence":1, "her":1, "here":1, "hereafter":1, "hereby":1, "herein":1, "hereupon":1, "hers":1, "herself":1, "him":1, "himself":1, "his":1, "how":1, "however":1, "hundred":1, "ie":1, "if":1, "in":1, "inc":1, "indeed":1, "interest":1, "into":1, "is":1, "it":1, "its":1, "itself":1, "keep":1, "last":1, "latter":1, "latterly":1, "least":1, "less":1, "ltd":1, "made":1, "many":1, "may":1, "me":1, "meanwhile":1, "might":1, "mill":1, "mine":1, "more":1, "moreover":1, "most":1, "mostly":1, "move":1, "much":1, "must":1, "my":1, "myself":1, "name":1, "namely":1, "neither":1, "never":1, "nevertheless":1, "next":1, "nine":1, "no":1, "nobody":1, "none":1, "noone":1, "nor":1, "not":1, "nothing":1, "now":1, "nowhere":1, "of":1, "off":1, "often":1, "on":1, "once":1, "one":1, "only":1, "onto":1, "or":1, "other":1, "others":1, "otherwise":1, "our":1, "ours":1, "ourselves":1, "out":1, "over":1, "own":1,"part":1, "per":1, "perhaps":1, "please":1, "put":1, "rather":1, "re":1, "same":1, "see":1, "seem":1, "seemed":1, "seeming":1, "seems":1, "serious":1, "several":1, "she":1, "should":1, "show":1, "side":1, "since":1, "sincere":1, "six":1, "sixty":1, "so":1, "some":1, "somehow":1, "someone":1, "something":1, "sometime":1, "sometimes":1, "somewhere":1, "still":1, "such":1, "system":1, "take":1, "ten":1, "than":1, "that":1, "the":1, "their":1, "them":1, "themselves":1, "then":1, "thence":1, "there":1, "thereafter":1, "thereby":1, "therefore":1, "therein":1, "thereupon":1, "these":1, "they":1, "thickv":1, "thin":1, "third":1, "this":1, "those":1, "though":1, "three":1, "through":1, "throughout":1, "thru":1, "thus":1, "to":1, "together":1, "too":1, "top":1, "toward":1, "towards":1, "twelve":1, "twenty":1, "two":1, "un":1, "under":1, "until":1, "up":1, "upon":1, "us":1, "very":1, "via":1, "was":1, "we":1, "well":1, "were":1, "what":1, "whatever":1, "when":1, "whence":1, "whenever":1, "where":1, "whereafter":1, "whereas":1, "whereby":1, "wherein":1, "whereupon":1, "wherever":1, "whether":1, "which":1, "while":1, "whither":1, "who":1, "whoever":1, "whole":1, "whom":1, "whose":1, "why":1, "will":1, "with":1, "within":1, "without":1, "would":1, "yet":1, "you":1, "your":1, "yours":1, "yourself":1, "yourselves":1, "the":1};

var title=[];
var users=[];
var comments=[];
var score=[];
var wordList=[]; //each word one entry and contains the total count [ {cnt:30,title_list:[3,5,9],
var wordCount=[];
var wordMap={};
var wordIdList=[];
var wordTitleMap=[];
var minVal=10000;
var maxVal=-230;
var regex=/\s|\.|,|;|[^a-zA-Z0-9]/g;
var words;
var wordId=0;
var wordStr="";
var titleID=0;
var tokens=page_text.split(regex);
var totalWords=tokens.length;
for (var i=0;i<tokens.length ;i++)
{
  wordStr=tokens[i];
  try
  {
  
  {

	if (typeof(wordStr)!="undefined" && wordStr.length>2)
	{
	   wordStr=wordStr.toLowerCase();
	   if (stopwords[wordStr]==1 ) 
	   {
	     continue; //skip the stop words;
	   }
	   
		if (typeof(wordMap[wordStr])=="undefined"  )
		{
		  
		  wordList.push(wordStr);
		  wordCount.push(1);
		  wordMap[wordStr]=wordId;
		  wordIdList.push(wordId);
		  wordId++;
		  
		}
		else
		{
		  wordCount[wordMap[wordStr]]++;
		}
	}	
  }
  }
  catch (err)
  {
  
  }
  



	
}

wordIdList.sort(function(x, y)
	{ 
		return -wordCount[x] + wordCount[y] 
	}
);

var wordPercentStr="<p>Total words on the page="+totalWords+" , Words used in Visualization="+wordId+"</p>";
wordPercentStr+="<table><tr><td>Word</td><td>Occurence/count</td><td>Good Density (%)</td><td>Gross Density (%)</td></tr>";
var wi=0;
var density;
var grossDensity;
for (var wp=0; wp<wordIdList.length;wp++)
{
  wi=wordIdList[wp];
  density=" "+(wordCount[wi]*100/wordId);
  density=density.substr(0,6);
  grossDensity=(" "+(wordCount[wi]*100/totalWords)).substr(0,6);
  wordPercentStr+="<tr>";
  wordPercentStr+="<td>"+wordList[wi]+"</td><td>"+wordCount[wi]+"</td><td>"+density+"</td><td>"+grossDensity+"</td>";
  wordPercentStr+="</tr>";
}
wordPercentStr+="</table>";
$("#topwords").html(wordPercentStr);
$("#countbox").text(wordId);

minVal=10000;
maxVal=-100;
for (var wi=0; wi<wordList.length; wi++)
{
	if (minVal>wordCount[wi] ) minVal=wordCount[wi];
	if (maxVal<wordCount[wi] ) maxVal=wordCount[wi];
	
}
var data=[
//["Tea","Coffee","Soda","Chips","Milk","Chocolate","Beer","Wine","Tobacco","gold","silver"],
//[130,30,200,40,230,150,80,65,20,10,100]
//users,
//score
wordList,
wordCount
];

var dobj=[];

for (var di=0;di<data[0].length;di++)
{
  dobj.push({"key":di,"value":data[1][di]});
  
  
  
}
	display_pack({children: dobj});
//d3.json("flare.json", function(error, root) 
function display_pack(root)
{
  var node = svg.selectAll(".node")
      .data(bubble.nodes(root)
      .filter(function(d) { return !d.children; }))
    .enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; })
	  .style("fill", function(d) { return color(data[0][d.key]); })
	  	.on("mouseover", function(d,i)
	{
		d3.select(this).style("fill", "gold"); 
		showToolTip(" "+data[0][i]+"<br>"+data[1][i]+" ",d.x+d3.mouse(this)[0]+50,d.y+d3.mouse(this)[1],true);
		//console.log(d3.mouse(this));
	})
	.on("mousemove", function(d,i)
	{

		tooltipDivID.css({top:d.y+d3.mouse(this)[1],left:d.x+d3.mouse(this)[0]+50});
		//showToolTip("<ul><li>"+data[0][i]+"<li>"+data[1][i]+"</ul>",d.x+d3.mouse(this)[0]+10,d.y+d3.mouse(this)[1]-10,true);
		//console.log(d3.mouse(this));
	})	
    .on("mouseout", function()
	{
		d3.select(this).style("fill", function(d) { return color(data[0][d.key]); });
		showToolTip(" ",0,0,false);
	})	
	;

  /*node.append("title")
      .text(function(d) { return data[0][d.key] + ": " + format(d.value); });
*/
  node.append("circle")
      .attr("r", function(d) { return d.r; })
	  ;
      //.style("fill", function(d) { return color(data[0][d.key]); });

  node.append("text")
      .attr("dy", ".3em")
      .style("text-anchor", "middle")
	  .style("fill","black")
      .text(function(d) { return data[0][d.key].substring(0, d.r / 3); });
}
//);



function showToolTip(pMessage,pX,pY,pShow)
{
  if (typeof(tooltipDivID)=="undefined")
  {
             tooltipDivID =$('<div id="messageToolTipDiv" style="position:absolute;display:block;z-index:10000;border:2px solid black;background-color:rgba(0,0,0,0.8);margin:auto;padding:3px 5px 3px 5px;color:white;font-size:12px;font-family:arial;border-radius: 5px;vertical-align: middle;text-align: center;min-width:50px;overflow:auto;"></div>');

		$('body').append(tooltipDivID);
  }
  if (!pShow) { tooltipDivID.hide(); return;}
  //MT.tooltipDivID.empty().append(pMessage);
  tooltipDivID.html(pMessage);
  tooltipDivID.css({top:pY,left:pX});
  tooltipDivID.show();
}

//d3.select(self.frameElement).style("height", diameter + "px");

}
) //document ready

</script>


</head>
<body style="font-family:arial;">
<div id="infobox" style="color:gray;font-size:14px;">[<span id="urlbox" style=""><a href="http://www.news.com" rel="nofollow" >http://www.news.com</a></span>], No of Characters:74075 , Number of words:<span id="countbox">3342</span></div>

<div id="socialbox" style="float:right;">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_linkedin" style="cursor:pointer"></a>
<a class="addthis_button_facebook" style="cursor:pointer"></a>
<a class="addthis_button_twitter" style="cursor:pointer"></a>
<a class="addthis_button_reddit" style="cursor:pointer"></a>

<a class="addthis_button_email" style="cursor:pointer"></a>

<a class="addthis_button_compact"></a>
<!--a class="addthis_counter addthis_bubble_style"></a-->
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-511ab711513fbf8f"></script>
<!-- AddThis Button END -->
</div>



 
<div id="svgid">
</div>

<p></p><br>		
		Did you like this visualization ? Click on <g:plusone count="false"  href="http://www.infocaptor.com"></g:plusone> to boost it up. 
<br><br>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<div id="word_list">
</div>
<div>
<!--p style="color:blue;">Type URL address of any website and see the magic unfolds!</p-->
<form name="input" action="http://www.infocaptor.com/bubble-my-page" method="get">
URL: <input type="text" name="url" style="width:300px;">
Size:<input type="text" name="size" value=800>


<input type="submit" value="Visualize">
<a href="http://www.infocaptor.com/bubble-my-page?size=600&mode=showembed&url=http://www.news.com" target="_blank">Get HTML Code for Embedding</a>

</form>
<br>
<p>
<strong>NOTE:</strong> Certain websites behind https or some blocked content may not be visualized
</div>

<div>
<br><br>
<h2>Bubble my Page - This service is provided by InfoCaptor</h2>
<blockquote>

"InfoCaptor  <a href="http://www.infocaptor.com">Dashboards</a> can Extract information from your database and
visualize it any way you want.
<br>Enterprise <a href="http://www.infocaptor.com">Dashboard Software</a> @ small business pricing."
</blockquote>
<br><br>
<h3><a href="http://www.infocaptor.com/dashboard/visualize-your-data-from-database-tables-into-bubble-pack-layout-using-d3js">Visualize your table data into bubbles</a></h3>
</div>

		<p>Following text was used for the visualization - Raw data (snippet)</p>
<p>
NOTE:
<ol>
<li>Only the first 100,000 bytes are read from any page, if your page is longer than 100k bytes then the rest of the content is ignored
<li>All words less than 2 letters are ignored
<li>Stop words are ignored
<li>Content behind <strong>https://</strong> is not accessible. Some sites and web pages are blocked at server
<li>Gross density is based on the total words including the 2 letter words. (word count/total number of words on the page)
<li>Good Density is based on the number of words displayed in the bubble visualization. (word count/total number of words selected for visualization)
</ol>
</p>
<div id="topwords"></div>

<div id="allwordsbox" style="font-size:13px;font-family:arial;">
                              CNET  News                            English     English Español      Reviews      Top Categories More Categories   Car Tech Cell Phones Desktops Digital Cameras Home Audio Laptops Printers Tablets Televisions Forums   Appliances Camcorders Cell Phone Accessories E-book Readers Games   Gear GPS Hard Drives   Storage Headphones Home Video Internet Access   Monitors MP3 Players Networking   Wi-Fi Peripherals Software Wearable Tech Web Hosting         You are here: News       Latest News Mobile Startups Cutting Edge Internet   Media Security   Privacy Business Tech Crave   Apple Microsoft Politics   Law Tech Culture Blogs Video Photos RSS        Download       Windows Software Mac Software iOS Apps Android Apps The Download Blog        CNET TV       Most Popular New Releases Products Tech Shows How To Appliances Car Tech Cell Phones Tablets   Always On Apple Byte CNET On Cars CNET Top ..............................................<br>
......................................................<br>
......................................................<br>
.........s Metacritic MetroLyrics Moneywatch mySimon Radio.com Search.com Shopper.com Showtime SmartPlanet TechRepublic TV.com TVGuide.com UrbanBaby ZDNet     Moneywatch | CHOW | CNET.com | CNET Channel | GameSpot | International Media | mySimon | Search.com | TechRepublic | TV.com | ZDNet          Reviews All Reviews Camcorders Car Tech Cell Phones Digital Cameras GPS Laptops TVs   News All News Business Tech Crave Cutting Edge Green Tech Security Wireless   Downloads Add Your Software All Downloads Mac Mobile Software Deals Webware Windows   CNET TV All Videos Always On Apple Byte Most Popular CNET Top 5 CNET Update Prizefight   More About CBS Interactive About CNET CNET Deals CNET en Espa ol CNET Forums CNET Mobile CNET Site Map Corrections Help Center Permissions   Follow us via... Facebook Twitter Google+ YouTube LinkedIn Tumblr Pinterest Newsletters RSS                                                                 
</div>
<div>
<h3><a href="http://www.infocaptor.com/dashboard/visualize-your-data-from-database-tables-into-bubble-pack-layout-using-d3js">Visualize your table data into bubbles</a></h3>
</div>
		

Your website content analysed into bubbles at
<a href="http://www.infocaptor.com/bubble_viz/newscom.html">http://www.infocaptor.com/bubble_viz/newscom.html</a> #seo #dashboards #visualization #beautiful #data
</body>
</html>