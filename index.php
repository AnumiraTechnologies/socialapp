<!DOCTYPE html>
<html>
  <head>
    <title>Social Media Analytics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-override.css" rel="stylesheet" media="screen">
<script src="js/jquery-1.7.2.js"></script>
	<script>
    $(document).ready(function(){
        $("#go").click(function () {
         $.ajax({
                type : "GET",
                url  : 'ajax/results.php',
                async: true,
                success : function(msgqn){
                $("#result").html(msgqn);			
                }
           });	
           });	
});
	</script>
  </head>
  <body>
    <div class="container-fluid">
		<div class="row">
			<div class="span12">
				<h2 class="title">Assembly Election 2014</h2>
			</div>
		</div>


<?php
if (function_exists('date_default_timezone_set')) {
        date_default_timezone_set('UTC');
}

// Include the DataSift library
require 'lib/datasift.php';

// Include the configuration - put your username and API key in this file
//require dirname(__FILE__).'/../config.php';

/**
 * This class will handle the events.
 */
class EventHandler implements DataSift_IStreamConsumerEventHandler
{
  /**
   * @var int Timeout in seconds.
   */
        private $_num = 10;
        private $a = 0;
        private $b = 0;
        private $c = 0;
        private $d = 0;
        private $e = 0;
        private $f = 0;

        /**
         * Called when the stream is connected.
         *
         * @param DataSift_StreamConsumer $consumer The consumer sending the event.
         *
         * @return void
         */
        public function onConnect($consumer)
        {
                echo 'Connected'.PHP_EOL;
        }

        /**
         * Called for each interaction consumed.
         *
         * @param DataSift_StreamConsumer $consumer    The consumer sending the
         *                                             event.
         * @param array                   $interaction The interaction data.
         * @param string                  $hash        The hash of the stream that
         *                                             matched this interaction.
         *
         * @return void
         */
        public function onInteraction($consumer, $interaction, $hash)
        {
       // echo $interaction['twitter']['user']['screen_name']."<br>";
        //echo $interaction['twitter']['text']."<br>--";
                // echo 'Country: '.$interaction['twitter']['place']['country']."<br>";
				$text = $interaction['twitter']['text'];
 				if(strpos($text,"kejriwal") !== false) { $this->a = $this->a + 1; }
				elseif(strpos($text,"sachin") !== false) { $this->b = $this->b + 1; }
				elseif(strpos($text,"Sonia Gandhi") !== false) { $this->c = $this->c + 1; }
				elseif(strpos($text,"Hazare") !== false) { $this->d = $this->d + 1; }
				elseif(strpos($text,"Rahul Gandhi") !== false) { $this->e = $this->e + 1; }
				else { $this->f = $this->f + 1; } 
                // Stop after 10
                if ($this->_num-- == 1) {
				$arr = array("kejriwal"=>"1",
							 "sachin"=>"1",
							 "Sonia Gandhi"=>"1",
							 "Hazare"=>"1",
							 "Rahul Gandhi"=>"1");
				$arr['kejriwal'] = $this->a;
				$arr['sachin'] = $this->b;
				$arr['Sonia Gandhi'] = $this->c;
				$arr['Hazare'] = $this->d;
				$arr['Rahul Gandhi'] = $this->e;
				$arr['others'] = $this->f;
				arsort($arr);
                        echo "Stopping consumer...\n";
                        echo "Printing chart...\n";
                        $consumer->stop();
?>
		<div class="row-fluid">
			<div class="span2">
				<h3>Ranking</h3>
			</div>
			<div class="span2">
				<h3>Name</h3>
			</div>
			<div class="span2">
				<h3>Count</h3>
			</div>
			<div class="span6">
				<h3>Tweets</h3>
			</div>
		</div>
<?php
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
			<div class="span6">
				<h3>Tweets</h3>
			</div>
		</div>						  
						  <?php
}			
                }
        }

        /**
         * Called for each deletion notification consumed.
         *
         * @param DataSift_StreamConsumer $consumer    The consumer sending the
         *                                             event.
         * @param array                   $interaction The interaction data.
         * @param string                  $hash        The hash of the stream that
         *                                             matched this interaction.
         *
         * @return void
         */
        public function onDeleted($consumer, $interaction, $hash)
        {
                echo 'DELETE request for interaction ' . $interaction['interaction']['id']
                        . ' of type ' . $interaction['interaction']['type']
                        . '. Please delete it from your archive.';
        }

        /**
         * Called when a status message is received.
         *
         * @param DataSift_StreamConsumer $consumer    The consumer sending the
         *                                             event.
         * @param string                  $type        The status type.
         * @param array                   $info        The data sent with the
         *                                             status message.
         */
        public function onStatus($consumer, $type, $info)
        {
                switch ($type) {
                        default:
                                echo 'STATUS: '.$type.PHP_EOL;
                                break;
                }
        }

        /**
         * Called when a warning occurs or is received down the stream.
         *
         * @param DataSift_StreamConsumer $consumer The consumer sending the event.
         * @param string $message The warning message.
         *
         * @return void
         */
        public function onWarning($consumer, $message)
        {
                echo 'WARNING: '.$message.PHP_EOL;
        }

        /**
         * Called when an error occurs or is received down the stream.
         *
         * @param DataSift_StreamConsumer consumer The consumer sending the event.
         * @param string $message The error message.
         *
         * @return void
         */
        public function onError($consumer, $message)
        {
                echo 'ERROR: '.$message.PHP_EOL;
        }

        /**
         * Called when the stream is disconnected.
         *
         * @param DataSift_StreamConsumer $consumer The consumer sending the event.
         *
         * @return void
         */
        public function onDisconnect($consumer)
        {
                echo 'Disconnected'.PHP_EOL;
        }

        /**
         * Called when the consumer stops for some reason.
         *
         * @param DataSift_StreamConsumer $consumer The consumer sending the event.
         * @param string $reason The reason the consumer stopped.
         *
         * @return void
         */
        public function onStopped($consumer, $reason)
        {
                echo PHP_EOL.'Stopped: '.$reason.PHP_EOL.PHP_EOL;
        }
}

// Authenticate
//echo "Creating user...\n";
$user = new DataSift_User('senthil123kumar', '08850cbc877a9b626bc7ebcb46556ef9');
$user->enableSSL(false);
// Create the definition
//$csdl = 'twitter.filter_level in "high" AND twitter.place.country=="India"';
$csdl = 'twitter.text cs contains_any "Rahul Gandhi,Sonia Gandhi,Hazare,kejriwal,sachin"';
//echo "Creating definition...\n  $csdl\n";
$definition = new DataSift_Definition($user, $csdl);

// Create the consumer
//echo "Getting the consumer...\n";
$consumer = $definition->getConsumer(DataSift_StreamConsumer::TYPE_HTTP, new EventHandler());

// And start consuming
//echo "Consuming...\n--\n";
$consumer->consume();

//echo "Finished consuming\n\n";

?>		

			<div class="row-fluid">
		<div class="span1">
		<div id="result"></div>
		</div>

		</div>		

	</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
