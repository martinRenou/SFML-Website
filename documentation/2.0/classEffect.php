<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
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
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#pro-static-methods">Static Protected Member Functions</a> &#124;
<a href="classEffect-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">Effect Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">
<div id="dynsection-0" onclick="return toggleVisibility(this)" class="dynheader closed" style="cursor:pointer;">
  <img id="dynsection-0-trigger" src="closed.png" alt="+"/> Inheritance diagram for Effect:</div>
<div id="dynsection-0-summary" class="dynsummary" style="display:block;">
</div>
<div id="dynsection-0-content" class="dyncontent" style="display:none;">
 <div class="center">
  <img src="classEffect.png" usemap="#Effect_map" alt=""/>
  <map id="Effect_map" name="Effect_map">
<area href="classsf_1_1Drawable.php" title="Abstract base class for objects that can be drawn to a render target." alt="sf::Drawable" shape="rect" coords="0,0,82,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ae32eb1cdf66ea8865dc01720499cde5f"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="ae32eb1cdf66ea8865dc01720499cde5f"></a>
const std::string &amp;&#160;</td><td class="memItemRight" valign="bottom"><b>getName</b> () const </td></tr>
<tr class="separator:ae32eb1cdf66ea8865dc01720499cde5f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7f926c8c6b21664461745f4c62cf7d0b"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a7f926c8c6b21664461745f4c62cf7d0b"></a>
void&#160;</td><td class="memItemRight" valign="bottom"><b>load</b> ()</td></tr>
<tr class="separator:a7f926c8c6b21664461745f4c62cf7d0b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a857a5b45439813ecc71e8e931c98f6a2"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a857a5b45439813ecc71e8e931c98f6a2"></a>
void&#160;</td><td class="memItemRight" valign="bottom"><b>update</b> (float time, float x, float y)</td></tr>
<tr class="separator:a857a5b45439813ecc71e8e931c98f6a2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a955d86ffcc94f55949edcb0d46b36f5f"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classEffect.php#a955d86ffcc94f55949edcb0d46b36f5f">draw</a> (<a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a> &amp;target, <a class="el" href="classsf_1_1RenderStates.php">sf::RenderStates</a> states) const </td></tr>
<tr class="memdesc:a955d86ffcc94f55949edcb0d46b36f5f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Draw the object to a render target.  <a href="#a955d86ffcc94f55949edcb0d46b36f5f"></a><br/></td></tr>
<tr class="separator:a955d86ffcc94f55949edcb0d46b36f5f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a2a4eaf667af8ea6498b77fe532c5a43d"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a2a4eaf667af8ea6498b77fe532c5a43d"></a>
static void&#160;</td><td class="memItemRight" valign="bottom"><b>setFont</b> (const <a class="el" href="classsf_1_1Font.php">sf::Font</a> &amp;font)</td></tr>
<tr class="separator:a2a4eaf667af8ea6498b77fe532c5a43d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a6c1c4ec803a1aa5dcbd34a6cf92fd8d5"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a6c1c4ec803a1aa5dcbd34a6cf92fd8d5"></a>
&#160;</td><td class="memItemRight" valign="bottom"><b>Effect</b> (const std::string &amp;name)</td></tr>
<tr class="separator:a6c1c4ec803a1aa5dcbd34a6cf92fd8d5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-static-methods"></a>
Static Protected Member Functions</h2></td></tr>
<tr class="memitem:a406376adb93215da98a51e7eeb4658e6"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a406376adb93215da98a51e7eeb4658e6"></a>
static const <a class="el" href="classsf_1_1Font.php">sf::Font</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><b>getFont</b> ()</td></tr>
<tr class="separator:a406376adb93215da98a51e7eeb4658e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock">
<p>Definition at line <a class="el" href="Effect_8hpp_source.php#l00015">15</a> of file <a class="el" href="Effect_8hpp_source.php">Effect.hpp</a>.</p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a955d86ffcc94f55949edcb0d46b36f5f"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void Effect::draw </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1RenderTarget.php">sf::RenderTarget</a> &amp;&#160;</td>
          <td class="paramname"><em>target</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1RenderStates.php">sf::RenderStates</a>&#160;</td>
          <td class="paramname"><em>states</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Draw the object to a render target. </p>
<p>This is a pure virtual function that has to be implemented by the derived class to define how the drawable should be drawn.</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">target</td><td>Render target to draw to </td></tr>
    <tr><td class="paramname">states</td><td>Current render states </td></tr>
  </table>
  </dd>
</dl>

<p>Implements <a class="el" href="classsf_1_1Drawable.php#a90d2c88bba9b035a0844eccb380ef631">sf::Drawable</a>.</p>

<p>Definition at line <a class="el" href="Effect_8hpp_source.php#l00044">44</a> of file <a class="el" href="Effect_8hpp_source.php">Effect.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="Effect_8hpp_source.php">Effect.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
