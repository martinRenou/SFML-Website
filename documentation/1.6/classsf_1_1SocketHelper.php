<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SocketHelper Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SocketHelper.php">SocketHelper</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="classsf_1_1SocketHelper-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SocketHelper Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>This class defines helper functions to do all the non-portable socket stuff.  
 <a href="classsf_1_1SocketHelper.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Win32_2SocketHelper_8hpp_source.php">SocketHelper.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a097d978a4a15af5f17089099edc23afa"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a097d978a4a15af5f17089099edc23afa"></a>
typedef SOCKET&#160;</td><td class="memItemRight" valign="bottom"><b>SocketType</b></td></tr>
<tr class="separator:a097d978a4a15af5f17089099edc23afa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa18a7737423675d9dc270a0bc7e159de"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa18a7737423675d9dc270a0bc7e159de"></a>
typedef int&#160;</td><td class="memItemRight" valign="bottom"><b>LengthType</b></td></tr>
<tr class="separator:aa18a7737423675d9dc270a0bc7e159de"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a417a223f0362d7d33cddb47c5464dd21"><td class="memItemLeft" align="right" valign="top">static SocketType&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketHelper.php#a417a223f0362d7d33cddb47c5464dd21">InvalidSocket</a> ()</td></tr>
<tr class="memdesc:a417a223f0362d7d33cddb47c5464dd21"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the value of the invalid socket.  <a href="#a417a223f0362d7d33cddb47c5464dd21"></a><br/></td></tr>
<tr class="separator:a417a223f0362d7d33cddb47c5464dd21"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afeb8116b59837e7759b1424c998cc186"><td class="memItemLeft" align="right" valign="top">static bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketHelper.php#afeb8116b59837e7759b1424c998cc186">Close</a> (SocketType Socket)</td></tr>
<tr class="memdesc:afeb8116b59837e7759b1424c998cc186"><td class="mdescLeft">&#160;</td><td class="mdescRight">Close / destroy a socket.  <a href="#afeb8116b59837e7759b1424c998cc186"></a><br/></td></tr>
<tr class="separator:afeb8116b59837e7759b1424c998cc186"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aae3b238fa3a38edbef099dc63c22c192"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketHelper.php#aae3b238fa3a38edbef099dc63c22c192">SetBlocking</a> (SocketType Socket, bool Block)</td></tr>
<tr class="memdesc:aae3b238fa3a38edbef099dc63c22c192"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set a socket as blocking or non-blocking.  <a href="#aae3b238fa3a38edbef099dc63c22c192"></a><br/></td></tr>
<tr class="separator:aae3b238fa3a38edbef099dc63c22c192"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae2ff906f79b41d5ad3a208811a8b2868"><td class="memItemLeft" align="right" valign="top">static Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketHelper.php#ae2ff906f79b41d5ad3a208811a8b2868">GetErrorStatus</a> ()</td></tr>
<tr class="memdesc:ae2ff906f79b41d5ad3a208811a8b2868"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the last socket error status.  <a href="#ae2ff906f79b41d5ad3a208811a8b2868"></a><br/></td></tr>
<tr class="separator:ae2ff906f79b41d5ad3a208811a8b2868"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>This class defines helper functions to do all the non-portable socket stuff. </p>
<p>This class is meant for internal use only </p>

<p>Definition at line <a class="el" href="Win32_2SocketHelper_8hpp_source.php#l00041">41</a> of file <a class="el" href="Win32_2SocketHelper_8hpp_source.php">Win32/SocketHelper.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="afeb8116b59837e7759b1424c998cc186"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static bool sf::SocketHelper::Close </td>
          <td>(</td>
          <td class="paramtype">SocketType&#160;</td>
          <td class="paramname"><em>Socket</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Close / destroy a socket. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Socket</td><td>: Socket to close</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True on success </dd></dl>

</div>
</div>
<a class="anchor" id="ae2ff906f79b41d5ad3a208811a8b2868"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static Socket::Status sf::SocketHelper::GetErrorStatus </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the last socket error status. </p>
<dl class="section return"><dt>Returns</dt><dd>Status corresponding to the last socket error </dd></dl>

</div>
</div>
<a class="anchor" id="a417a223f0362d7d33cddb47c5464dd21"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static SocketType sf::SocketHelper::InvalidSocket </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the value of the invalid socket. </p>
<dl class="section return"><dt>Returns</dt><dd>Unique value of the invalid socket </dd></dl>

</div>
</div>
<a class="anchor" id="aae3b238fa3a38edbef099dc63c22c192"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void sf::SocketHelper::SetBlocking </td>
          <td>(</td>
          <td class="paramtype">SocketType&#160;</td>
          <td class="paramname"><em>Socket</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>Block</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Set a socket as blocking or non-blocking. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Socket</td><td>: Socket to modify </td></tr>
    <tr><td class="paramname">Block</td><td>: New blocking state of the socket </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Win32_2SocketHelper_8hpp_source.php">Win32/SocketHelper.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
