<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Clock Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Clock.php">Clock</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Clock-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Clock Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Clock.php" title="Clock is an utility class for manipulating time.">Clock</a> is an utility class for manipulating time.  
 <a href="classsf_1_1Clock.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Clock_8hpp_source.php">Clock.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:abbc959c7830ca7c3a4da133cb506d3fd"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#abbc959c7830ca7c3a4da133cb506d3fd">Clock</a> ()</td></tr>
<tr class="memdesc:abbc959c7830ca7c3a4da133cb506d3fd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#abbc959c7830ca7c3a4da133cb506d3fd"></a><br/></td></tr>
<tr class="separator:abbc959c7830ca7c3a4da133cb506d3fd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae9a02135879afbd38d034ac4a357a995"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#ae9a02135879afbd38d034ac4a357a995">GetElapsedTime</a> () const </td></tr>
<tr class="memdesc:ae9a02135879afbd38d034ac4a357a995"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the time elapsed since last reset.  <a href="#ae9a02135879afbd38d034ac4a357a995"></a><br/></td></tr>
<tr class="separator:ae9a02135879afbd38d034ac4a357a995"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae7d8de6876d51fa16675a64c649570ec"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Clock.php#ae7d8de6876d51fa16675a64c649570ec">Reset</a> ()</td></tr>
<tr class="memdesc:ae7d8de6876d51fa16675a64c649570ec"><td class="mdescLeft">&#160;</td><td class="mdescRight">Restart the timer.  <a href="#ae7d8de6876d51fa16675a64c649570ec"></a><br/></td></tr>
<tr class="separator:ae7d8de6876d51fa16675a64c649570ec"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Clock.php" title="Clock is an utility class for manipulating time.">Clock</a> is an utility class for manipulating time. </p>

<p>Definition at line <a class="el" href="Clock_8hpp_source.php#l00039">39</a> of file <a class="el" href="Clock_8hpp_source.php">Clock.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="abbc959c7830ca7c3a4da133cb506d3fd"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Clock::Clock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ae9a02135879afbd38d034ac4a357a995"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float sf::Clock::GetElapsedTime </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the time elapsed since last reset. </p>
<dl class="section return"><dt>Returns</dt><dd>Time elapsed, in seconds </dd></dl>

</div>
</div>
<a class="anchor" id="ae7d8de6876d51fa16675a64c649570ec"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::Clock::Reset </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Restart the timer. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Clock_8hpp_source.php">Clock.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
