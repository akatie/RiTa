<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.o../xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>RiMarkov</title>
<link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
  <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
  <script language="javascript" src="../js/highlight.js"></script>
	</head>

	<body>

<?php include("../header.php"); ?>

  
<div class="gd-section pad-large"> 
<div class="gd-center pad-large"> 
<div class="row">
				<div class="refbar span3">
					<div id="index">
						<!-- begin publish.classesIndex -->
						<h3></h3>
						<ul class="classList" >
							<br />
							<li style="top:60px;left:50px">
								<a href="index.php">Back to index</a>
							</li>
						</ul>
						<!-- end publish.classesIndex -->
					</div>
				</div>
				
		        <div class="span12">

		
		<div class="reference row">
		<div id="content">
			
<!-- ============================== class title ============================ -->
			<h2 class="classTitle">
				RiMarkov
			</h2>
<!-- ============================== class summary ========================== -->			
			
            <table cellpadding="0" cellspacing="0" border="0" class="ref-item">
			   <tr class="">
			      <th scope="row">Description</th>
			      <!-- DESCRIPTION  -->
			      <td>
			      	<p>
				Performs text generation via Markov chains (aka n-grams)
with options to process single characters, words, sentences, and 
arbitrary regular expressions.
</p> 
<p>
Provides a variety of methods specifically 
designed for text-generation.
</p>
</td>
		        </tr>   
		<tr class="">
          <th scope="row">Examples</th>
          <td><div class="example"> 
			    <!-- EXAMPLES  -->
			    <!-- EXAMPLE IMAGE  -->
			    <!-- <img src="../alpha_.gif" alt="example pic" /> -->
	     <pre class="margin">
rm = new RiMarkov(3);

rm.loadText(theText);
 
sentences = rm.generateSentences(10);

for (int i = 0; i < sentences.length; i++) {
	println(sentences[i]);
}</pre>
            </div></td>
        </tr> 
			  
			    <tr class="">
			      <th scope="row">Syntax</th>
			      <!-- SYNTAX  -->
			      <td>
<pre>
// Constructs a sentence-generating Markov-chain and set its n-factor.

RiMarkov(int nFactor)


// Also sets a flag determining whether the model will attempt to recognize 
// and parse (English) sentences (default=true)

RiMarkov(int nFactor, boolean recognizeSentences)


// Also sets a flag to allow duplicates in the generated output (default=true)

RiMarkov(int nFactor, boolean recognizeSentences, boolean allowDuplicates)

</pre>
		</tr>
		        
		 <tr class="">
	      <th scope="row">Parameters</th>
	      <td><table cellpadding="0" cellspacing="0" border="0" class="sub-table">
	        <tr class="">
	          <!-- PARAMETERS  -->
	          <th width="25%" scope="row" class="nobold">&nbsp; int</th>
	          <td width="75%">nFactor</td>
            </tr>
            			        <tr class="">
	          <!-- PARAMETERS  -->
	          <th width="25%" scope="row" class="nobold">&nbsp; boolean</th>
	          <td width="75%">recognizeSentences</td>
            </tr>
                			        <tr class="">
	          <!-- PARAMETERS  -->
	          <th width="25%" scope="row" class="nobold">&nbsp; boolean</th>
	          <td width="75%">allowDuplicates</td>
            </tr>
                			        
	        </table>
	        </td>
		  </tr>
                
			    <tr class="">
			      <th scope="row">Platform</th>
			      <!-- SYNTAX  -->
			      <td>Java / Javascript</td>
		        </tr>
				<tr class='Note' style='display:none'>
			      <th scope="row">Note</th>
			      <!-- SYNTAX  -->
			      <td></td>
		        </tr>
									
						<tr class="">
							<th scope="row"></th>
							<td></td>
						</tr>
						
								      </table>

 </div>
</div> 
</div>
</div>
    </div>
</div>



<?php include("../footer.php"); ?>
<!-- 
End Site Content 
-->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>

<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://rednoise.org/al/piwik/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

</body>
</html>