<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1NonCopyable.php">NonCopyable</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="classsf_1_1NonCopyable-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::NonCopyable Class Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Utility class that makes any derived class non-copyable.  
 <a href="classsf_1_1NonCopyable.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::NonCopyable:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1NonCopyable.png" usemap="#sf::NonCopyable_map" alt=""/>
  <map id="sf::NonCopyable_map" name="sf::NonCopyable_map">
<area href="classsf_1_1Context.php" title="Class holding a valid drawing context." alt="sf::Context" shape="rect" coords="115,56,220,80"/>
<area href="classsf_1_1Ftp.php" title="A FTP client." alt="sf::Ftp" shape="rect" coords="115,112,220,136"/>
<area href="classsf_1_1Http.php" title="A HTTP client." alt="sf::Http" shape="rect" coords="115,168,220,192"/>
<area href="classsf_1_1Lock.php" title="Automatic wrapper for locking and unlocking mutexes." alt="sf::Lock" shape="rect" coords="115,224,220,248"/>
<area href="classsf_1_1Mutex.php" title="Blocks concurrent access to shared resources from multiple threads." alt="sf::Mutex" shape="rect" coords="115,280,220,304"/>
<area href="classsf_1_1RenderTarget.php" title="Base class for all render targets (window, texture, ...)" alt="sf::RenderTarget" shape="rect" coords="115,336,220,360"/>
<area href="classsf_1_1Shader.php" title="Shader class (vertex and fragment)" alt="sf::Shader" shape="rect" coords="115,392,220,416"/>
<area href="classsf_1_1Socket.php" title="Base class for all the socket types." alt="sf::Socket" shape="rect" coords="115,448,220,472"/>
<area href="classsf_1_1Thread.php" title="Utility class to manipulate threads." alt="sf::Thread" shape="rect" coords="115,504,220,528"/>
<area href="classsf_1_1ThreadLocal.php" title="Defines variables with thread-local storage." alt="sf::ThreadLocal" shape="rect" coords="115,560,220,584"/>
<area href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering." alt="sf::Window" shape="rect" coords="115,616,220,640"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a2110add170580fdb946f887719da6860"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1NonCopyable.php#a2110add170580fdb946f887719da6860">NonCopyable</a> ()</td></tr>
<tr class="memdesc:a2110add170580fdb946f887719da6860"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a2110add170580fdb946f887719da6860"></a><br/></td></tr>
<tr class="separator:a2110add170580fdb946f887719da6860"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Utility class that makes any derived class non-copyable. </p>
<p>This class makes its instances non-copyable, by explicitely disabling its copy constructor and its assignment operator.</p>
<p>To create a non-copyable class, simply inherit from <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">sf::NonCopyable</a>.</p>
<p>The type of inheritance (public or private) doesn't matter, the copy constructor and assignment operator are declared private in <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">sf::NonCopyable</a> so they will end up being inaccessible in both cases. Thus you can use a shorter syntax for inheriting from it (see below).</p>
<p>Usage example: </p>
<div class="fragment"><div class="line"><span class="keyword">class </span>MyNonCopyableClass : <a class="code" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">sf::NonCopyable</a></div>
<div class="line">{</div>
<div class="line">    ...</div>
<div class="line">};</div>
</div><!-- fragment --><p>Deciding whether the instances of a class can be copied or not is a very important design choice. You are strongly encouraged to think about it before writing a class, and to use <a class="el" href="classsf_1_1NonCopyable.php" title="Utility class that makes any derived class non-copyable.">sf::NonCopyable</a> when necessary to prevent many potential future errors when using it. This is also a very important indication to users of your class. </p>

<p>Definition at line <a class="el" href="NonCopyable_8hpp_source.php#l00041">41</a> of file <a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a2110add170580fdb946f887719da6860"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">sf::NonCopyable::NonCopyable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>Because this class has a copy constructor, the compiler will not automatically generate the default constructor. That's why we must define it explicitely. </p>

<p>Definition at line <a class="el" href="NonCopyable_8hpp_source.php#l00053">53</a> of file <a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="NonCopyable_8hpp_source.php">NonCopyable.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
