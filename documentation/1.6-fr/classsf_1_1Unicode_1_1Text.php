<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Unicode::Text Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Unicode.php">Unicode</a></li><li class="navelem"><a class="el" href="classsf_1_1Unicode_1_1Text.php">Text</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classsf_1_1Unicode_1_1Text-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Unicode::Text Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>This class is an abstract definition of a unicode text, it can be converted from and to any kind of string and encoding.  
 <a href="classsf_1_1Unicode_1_1Text.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Unicode_8hpp_source.php">Unicode.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a017c3a2990bf1c74927992462b3fd599"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Unicode_1_1Text.php#a017c3a2990bf1c74927992462b3fd599">Text</a> ()</td></tr>
<tr class="memdesc:a017c3a2990bf1c74927992462b3fd599"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor (empty text)  <a href="#a017c3a2990bf1c74927992462b3fd599"></a><br/></td></tr>
<tr class="separator:a017c3a2990bf1c74927992462b3fd599"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b772d62641ea43b075552028caaf44c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Unicode_1_1Text.php#a6b772d62641ea43b075552028caaf44c">Text</a> (const char *Str)</td></tr>
<tr class="memdesc:a6b772d62641ea43b075552028caaf44c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the unicode text from any type of string.  <a href="#a6b772d62641ea43b075552028caaf44c"></a><br/></td></tr>
<tr class="separator:a6b772d62641ea43b075552028caaf44c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9e6bab756302cebfa98b58cd95e8b6e7"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9e6bab756302cebfa98b58cd95e8b6e7"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const wchar_t *Str)</td></tr>
<tr class="separator:a9e6bab756302cebfa98b58cd95e8b6e7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af05eab720cc599f8b9572756b053e130"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af05eab720cc599f8b9572756b053e130"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const Uint8 *Str)</td></tr>
<tr class="separator:af05eab720cc599f8b9572756b053e130"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa0f1e071880330c7acc3f84ff76e6daa"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="aa0f1e071880330c7acc3f84ff76e6daa"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const Uint16 *Str)</td></tr>
<tr class="separator:aa0f1e071880330c7acc3f84ff76e6daa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abf5491d1d6cb22ea0fb680af1243cc8f"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="abf5491d1d6cb22ea0fb680af1243cc8f"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const Uint32 *Str)</td></tr>
<tr class="separator:abf5491d1d6cb22ea0fb680af1243cc8f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af480599e5580f6b4908339bd530f04ac"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af480599e5580f6b4908339bd530f04ac"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const std::string &amp;Str)</td></tr>
<tr class="separator:af480599e5580f6b4908339bd530f04ac"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a86fb86f2df7d23ed9fa1491bd4169f51"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a86fb86f2df7d23ed9fa1491bd4169f51"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const std::wstring &amp;Str)</td></tr>
<tr class="separator:a86fb86f2df7d23ed9fa1491bd4169f51"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a4616a0bc48fb5d15882d931f0d6ec2"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9a4616a0bc48fb5d15882d931f0d6ec2"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const <a class="el" href="classsf_1_1Unicode.php#a3c6081f88e93693ff8e713053982a9f9">Unicode::UTF8String</a> &amp;Str)</td></tr>
<tr class="separator:a9a4616a0bc48fb5d15882d931f0d6ec2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a664867eaa68383fec5a2ba3b53f1dcc3"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a664867eaa68383fec5a2ba3b53f1dcc3"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const Unicode::UTF16String &amp;Str)</td></tr>
<tr class="separator:a664867eaa68383fec5a2ba3b53f1dcc3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a32195b91dbc71592f4354a7100656ca9"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a32195b91dbc71592f4354a7100656ca9"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Text</b> (const Unicode::UTF32String &amp;Str)</td></tr>
<tr class="separator:a32195b91dbc71592f4354a7100656ca9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9302e7ef822329a4485b536d245da9e4"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1Unicode_1_1Text.php#a9302e7ef822329a4485b536d245da9e4">operator std::string</a> () const </td></tr>
<tr class="memdesc:a9302e7ef822329a4485b536d245da9e4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Operator to cast the text to any type of string.  <a href="#a9302e7ef822329a4485b536d245da9e4"></a><br/></td></tr>
<tr class="separator:a9302e7ef822329a4485b536d245da9e4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6a836e272d024827ce814e61a5c998bf"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6a836e272d024827ce814e61a5c998bf"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>operator std::wstring</b> () const </td></tr>
<tr class="separator:a6a836e272d024827ce814e61a5c998bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af87e912241e239901f6ec34cdfc514ed"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="af87e912241e239901f6ec34cdfc514ed"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>operator Unicode::UTF8String</b> () const </td></tr>
<tr class="separator:af87e912241e239901f6ec34cdfc514ed"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a067d4861d3ae8ff54f2c2a0b85c8fe16"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a067d4861d3ae8ff54f2c2a0b85c8fe16"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>operator Unicode::UTF16String</b> () const </td></tr>
<tr class="separator:a067d4861d3ae8ff54f2c2a0b85c8fe16"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3abc98d6d05787b9102da2e0d0ed4bea"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a3abc98d6d05787b9102da2e0d0ed4bea"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>operator const Unicode::UTF32String &amp;</b> () const </td></tr>
<tr class="separator:a3abc98d6d05787b9102da2e0d0ed4bea"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>This class is an abstract definition of a unicode text, it can be converted from and to any kind of string and encoding. </p>

<p>Definition at line <a class="el" href="Unicode_8hpp_source.php#l00063">63</a> of file <a class="el" href="Unicode_8hpp_source.php">Unicode.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a017c3a2990bf1c74927992462b3fd599"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Unicode::Text::Text </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor (empty text) </p>

</div>
</div>
<a class="anchor" id="a6b772d62641ea43b075552028caaf44c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Unicode::Text::Text </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>Str</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the unicode text from any type of string. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Str</td><td>: <a class="el" href="classsf_1_1String.php" title="String defines a graphical 2D text, that can be drawn on screen.">String</a> to convert </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a9302e7ef822329a4485b536d245da9e4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::Unicode::Text::operator std::string </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Operator to cast the text to any type of string. </p>
<dl class="section return"><dt>Returns</dt><dd>Converted string </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Unicode_8hpp_source.php">Unicode.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
