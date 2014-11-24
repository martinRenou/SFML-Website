<?php
    $version = '2.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::VideoMode Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1VideoMode.php">VideoMode</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#related">Related Functions</a> &#124;
<a href="classsf_1_1VideoMode-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::VideoMode Class Reference<div class="ingroups"><a class="el" href="group__window.php">Window module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">VideoMode</a> defines a video mode (width, height, bpp)  
 <a href="classsf_1_1VideoMode.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a04c9417e5c304510bef5f6aeb03f6ce1"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a04c9417e5c304510bef5f6aeb03f6ce1">VideoMode</a> ()</td></tr>
<tr class="memdesc:a04c9417e5c304510bef5f6aeb03f6ce1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a04c9417e5c304510bef5f6aeb03f6ce1"></a><br/></td></tr>
<tr class="separator:a04c9417e5c304510bef5f6aeb03f6ce1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a46c35ed41de9e115661dcd529d64e9d3"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a46c35ed41de9e115661dcd529d64e9d3">VideoMode</a> (unsigned int modeWidth, unsigned int modeHeight, unsigned int modeBitsPerPixel=32)</td></tr>
<tr class="memdesc:a46c35ed41de9e115661dcd529d64e9d3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Construct the video mode with its attributes.  <a href="#a46c35ed41de9e115661dcd529d64e9d3"></a><br/></td></tr>
<tr class="separator:a46c35ed41de9e115661dcd529d64e9d3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa64ff5420dde3b31c24b9c4e2be9cd9c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#aa64ff5420dde3b31c24b9c4e2be9cd9c">isValid</a> () const </td></tr>
<tr class="memdesc:aa64ff5420dde3b31c24b9c4e2be9cd9c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tell whether or not the video mode is valid.  <a href="#aa64ff5420dde3b31c24b9c4e2be9cd9c"></a><br/></td></tr>
<tr class="separator:aa64ff5420dde3b31c24b9c4e2be9cd9c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:ac1be160a4342e6eafb2cb0e8c9b18d44"><td class="memItemLeft" align="right" valign="top">static <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#ac1be160a4342e6eafb2cb0e8c9b18d44">getDesktopMode</a> ()</td></tr>
<tr class="memdesc:ac1be160a4342e6eafb2cb0e8c9b18d44"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the current desktop video mode.  <a href="#ac1be160a4342e6eafb2cb0e8c9b18d44"></a><br/></td></tr>
<tr class="separator:ac1be160a4342e6eafb2cb0e8c9b18d44"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6815b9b3b35767d5b4563fbed4bfc67b"><td class="memItemLeft" align="right" valign="top">static const std::vector<br class="typebreak"/>
&lt; <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &gt; &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a6815b9b3b35767d5b4563fbed4bfc67b">getFullscreenModes</a> ()</td></tr>
<tr class="memdesc:a6815b9b3b35767d5b4563fbed4bfc67b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve all the video modes supported in fullscreen mode.  <a href="#a6815b9b3b35767d5b4563fbed4bfc67b"></a><br/></td></tr>
<tr class="separator:a6815b9b3b35767d5b4563fbed4bfc67b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a9b3b2ad2cac6b9c266823fb5ed506d90"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a9b3b2ad2cac6b9c266823fb5ed506d90">width</a></td></tr>
<tr class="memdesc:a9b3b2ad2cac6b9c266823fb5ed506d90"><td class="mdescLeft">&#160;</td><td class="mdescRight">Video mode width, in pixels.  <a href="#a9b3b2ad2cac6b9c266823fb5ed506d90"></a><br/></td></tr>
<tr class="separator:a9b3b2ad2cac6b9c266823fb5ed506d90"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5a88d44c9470db7474361a42a189342d"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a5a88d44c9470db7474361a42a189342d">height</a></td></tr>
<tr class="memdesc:a5a88d44c9470db7474361a42a189342d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Video mode height, in pixels.  <a href="#a5a88d44c9470db7474361a42a189342d"></a><br/></td></tr>
<tr class="separator:a5a88d44c9470db7474361a42a189342d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa080f1ef96a1008d58b1920eceb189df"><td class="memItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#aa080f1ef96a1008d58b1920eceb189df">bitsPerPixel</a></td></tr>
<tr class="memdesc:aa080f1ef96a1008d58b1920eceb189df"><td class="mdescLeft">&#160;</td><td class="mdescRight">Video mode pixel depth, in bits per pixels.  <a href="#aa080f1ef96a1008d58b1920eceb189df"></a><br/></td></tr>
<tr class="separator:aa080f1ef96a1008d58b1920eceb189df"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="related"></a>
Related Functions</h2></td></tr>
<tr><td class="ititle" colspan="2"><p>(Note that these are not member functions.) </p>
</td></tr>
<tr class="memitem:aca24086fd94d11014f3a0b5ca9a3acd6"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#aca24086fd94d11014f3a0b5ca9a3acd6">operator==</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:aca24086fd94d11014f3a0b5ca9a3acd6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of == operator to compare two video modes.  <a href="#aca24086fd94d11014f3a0b5ca9a3acd6"></a><br/></td></tr>
<tr class="separator:aca24086fd94d11014f3a0b5ca9a3acd6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a34b5c266a7b9cd5bc95de62f8beafc5a"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a34b5c266a7b9cd5bc95de62f8beafc5a">operator!=</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:a34b5c266a7b9cd5bc95de62f8beafc5a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of != operator to compare two video modes.  <a href="#a34b5c266a7b9cd5bc95de62f8beafc5a"></a><br/></td></tr>
<tr class="separator:a34b5c266a7b9cd5bc95de62f8beafc5a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a54cc77c0b6c4b133e0147a43d6829b13"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a54cc77c0b6c4b133e0147a43d6829b13">operator&lt;</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:a54cc77c0b6c4b133e0147a43d6829b13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of &lt; operator to compare video modes.  <a href="#a54cc77c0b6c4b133e0147a43d6829b13"></a><br/></td></tr>
<tr class="separator:a54cc77c0b6c4b133e0147a43d6829b13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5b894cab5f2a3a14597e4c6d200179a4"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a5b894cab5f2a3a14597e4c6d200179a4">operator&gt;</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:a5b894cab5f2a3a14597e4c6d200179a4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of &gt; operator to compare video modes.  <a href="#a5b894cab5f2a3a14597e4c6d200179a4"></a><br/></td></tr>
<tr class="separator:a5b894cab5f2a3a14597e4c6d200179a4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa094b7b9ae4c0194892ebda7b4b9bb37"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#aa094b7b9ae4c0194892ebda7b4b9bb37">operator&lt;=</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:aa094b7b9ae4c0194892ebda7b4b9bb37"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of &lt;= operator to compare video modes.  <a href="#aa094b7b9ae4c0194892ebda7b4b9bb37"></a><br/></td></tr>
<tr class="separator:aa094b7b9ae4c0194892ebda7b4b9bb37"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6e3d91683fcabb88c5b640e9884fe3df"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1VideoMode.php#a6e3d91683fcabb88c5b640e9884fe3df">operator&gt;=</a> (const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;left, const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;right)</td></tr>
<tr class="memdesc:a6e3d91683fcabb88c5b640e9884fe3df"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of &gt;= operator to compare video modes.  <a href="#a6e3d91683fcabb88c5b640e9884fe3df"></a><br/></td></tr>
<tr class="separator:a6e3d91683fcabb88c5b640e9884fe3df"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">VideoMode</a> defines a video mode (width, height, bpp) </p>
<p>A video mode is defined by a width and a height (in pixels) and a depth (in bits per pixel).</p>
<p>Video modes are used to setup windows (<a class="el" href="classsf_1_1Window.php" title="Window that serves as a target for OpenGL rendering.">sf::Window</a>) at creation time.</p>
<p>The main usage of video modes is for fullscreen mode: indeed you must use one of the valid video modes allowed by the OS (which are defined by what the monitor and the graphics card support), otherwise your window creation will just fail.</p>
<p><a class="el" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a> provides a static function for retrieving the list of all the video modes supported by the system: <a class="el" href="classsf_1_1VideoMode.php#a6815b9b3b35767d5b4563fbed4bfc67b" title="Retrieve all the video modes supported in fullscreen mode.">getFullscreenModes()</a>.</p>
<p>A custom video mode can also be checked directly for fullscreen compatibility with its <a class="el" href="classsf_1_1VideoMode.php#aa64ff5420dde3b31c24b9c4e2be9cd9c" title="Tell whether or not the video mode is valid.">isValid()</a> function.</p>
<p>Additionnally, <a class="el" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a> provides a static function to get the mode currently used by the desktop: <a class="el" href="classsf_1_1VideoMode.php#ac1be160a4342e6eafb2cb0e8c9b18d44" title="Get the current desktop video mode.">getDesktopMode()</a>. This allows to build windows with the same size or pixel depth as the current resolution.</p>
<p>Usage example: </p>
<div class="fragment"><div class="line"><span class="comment">// Display the list of all the video modes available for fullscreen</span></div>
<div class="line">std::vector&lt;sf::VideoMode&gt; modes = <a class="code" href="classsf_1_1VideoMode.php#a6815b9b3b35767d5b4563fbed4bfc67b" title="Retrieve all the video modes supported in fullscreen mode.">sf::VideoMode::getFullscreenModes</a>();</div>
<div class="line"><span class="keywordflow">for</span> (std::size_t i = 0; i &lt; modes.size(); ++i)</div>
<div class="line">{</div>
<div class="line">    <a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a> mode = modes[i];</div>
<div class="line">    std::cout &lt;&lt; <span class="stringliteral">&quot;Mode #&quot;</span> &lt;&lt; i &lt;&lt; <span class="stringliteral">&quot;: &quot;</span></div>
<div class="line">              &lt;&lt; mode.<a class="code" href="classsf_1_1VideoMode.php#a9b3b2ad2cac6b9c266823fb5ed506d90" title="Video mode width, in pixels.">width</a> &lt;&lt; <span class="stringliteral">&quot;x&quot;</span> &lt;&lt; mode.<a class="code" href="classsf_1_1VideoMode.php#a5a88d44c9470db7474361a42a189342d" title="Video mode height, in pixels.">height</a> &lt;&lt; <span class="stringliteral">&quot; - &quot;</span></div>
<div class="line">              &lt;&lt; mode.<a class="code" href="classsf_1_1VideoMode.php#aa080f1ef96a1008d58b1920eceb189df" title="Video mode pixel depth, in bits per pixels.">bitsPerPixel</a> &lt;&lt; <span class="stringliteral">&quot; bpp&quot;</span> &lt;&lt; std::endl;</div>
<div class="line">}</div>
<div class="line"></div>
<div class="line"><span class="comment">// Create a window with the same pixel depth as the desktop</span></div>
<div class="line"><a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a> desktop = <a class="code" href="classsf_1_1VideoMode.php#ac1be160a4342e6eafb2cb0e8c9b18d44" title="Get the current desktop video mode.">sf::VideoMode::getDesktopMode</a>();</div>
<div class="line">window.<a class="code" href="classsf_1_1Window.php#a30e6edf2162f8dbff61023b9de5d961d" title="Create (or recreate) the window.">create</a>(<a class="code" href="classsf_1_1VideoMode.php" title="VideoMode defines a video mode (width, height, bpp)">sf::VideoMode</a>(1024, 768, desktop.<a class="code" href="classsf_1_1VideoMode.php#aa080f1ef96a1008d58b1920eceb189df" title="Video mode pixel depth, in bits per pixels.">bitsPerPixel</a>), <span class="stringliteral">&quot;SFML window&quot;</span>);</div>
</div><!-- fragment --> 
<p>Definition at line <a class="el" href="VideoMode_8hpp_source.php#l00041">41</a> of file <a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a04c9417e5c304510bef5f6aeb03f6ce1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::VideoMode::VideoMode </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<p>This constructors initializes all members to 0. </p>

</div>
</div>
<a class="anchor" id="a46c35ed41de9e115661dcd529d64e9d3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::VideoMode::VideoMode </td>
          <td>(</td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>modeWidth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>modeHeight</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned int&#160;</td>
          <td class="paramname"><em>modeBitsPerPixel</em> = <code>32</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Construct the video mode with its attributes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">modeWidth</td><td>Width in pixels </td></tr>
    <tr><td class="paramname">modeHeight</td><td>Height in pixels </td></tr>
    <tr><td class="paramname">modeBitsPerPixel</td><td>Pixel depths in bits per pixel </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ac1be160a4342e6eafb2cb0e8c9b18d44"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> sf::VideoMode::getDesktopMode </td>
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

<p>Get the current desktop video mode. </p>
<dl class="section return"><dt>Returns</dt><dd>Current desktop video mode </dd></dl>

</div>
</div>
<a class="anchor" id="a6815b9b3b35767d5b4563fbed4bfc67b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static const std::vector&lt;<a class="el" href="classsf_1_1VideoMode.php">VideoMode</a>&gt;&amp; sf::VideoMode::getFullscreenModes </td>
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

<p>Retrieve all the video modes supported in fullscreen mode. </p>
<p>When creating a fullscreen window, the video mode is restricted to be compatible with what the graphics driver and monitor support. This function returns the complete list of all video modes that can be used in fullscreen mode. The returned array is sorted from best to worst, so that the first element will always give the best mode (higher width, height and bits-per-pixel).</p>
<dl class="section return"><dt>Returns</dt><dd>Array containing all the supported fullscreen modes </dd></dl>

</div>
</div>
<a class="anchor" id="aa64ff5420dde3b31c24b9c4e2be9cd9c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::VideoMode::isValid </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Tell whether or not the video mode is valid. </p>
<p>The validity of video modes is only relevant when using fullscreen windows; otherwise any video mode can be used with no restriction.</p>
<dl class="section return"><dt>Returns</dt><dd>True if the video mode is valid for fullscreen mode </dd></dl>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a class="anchor" id="a34b5c266a7b9cd5bc95de62f8beafc5a"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of != operator to compare two video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if modes are different </dd></dl>

</div>
</div>
<a class="anchor" id="a54cc77c0b6c4b133e0147a43d6829b13"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&lt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of &lt; operator to compare video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is lesser than <em>right</em> </dd></dl>

</div>
</div>
<a class="anchor" id="aa094b7b9ae4c0194892ebda7b4b9bb37"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&lt;= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of &lt;= operator to compare video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is lesser or equal than <em>right</em> </dd></dl>

</div>
</div>
<a class="anchor" id="aca24086fd94d11014f3a0b5ca9a3acd6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of == operator to compare two video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if modes are equal </dd></dl>

</div>
</div>
<a class="anchor" id="a5b894cab5f2a3a14597e4c6d200179a4"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&gt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of &gt; operator to compare video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is greater than <em>right</em> </dd></dl>

</div>
</div>
<a class="anchor" id="a6e3d91683fcabb88c5b640e9884fe3df"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&gt;= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1VideoMode.php">VideoMode</a> &amp;&#160;</td>
          <td class="paramname"><em>right</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">related</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of &gt;= operator to compare video modes. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">left</td><td>Left operand (a video mode) </td></tr>
    <tr><td class="paramname">right</td><td>Right operand (a video mode)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if <em>left</em> is greater or equal than <em>right</em> </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="aa080f1ef96a1008d58b1920eceb189df"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::VideoMode::bitsPerPixel</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Video mode pixel depth, in bits per pixels. </p>

<p>Definition at line <a class="el" href="VideoMode_8hpp_source.php#l00104">104</a> of file <a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a5a88d44c9470db7474361a42a189342d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::VideoMode::height</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Video mode height, in pixels. </p>

<p>Definition at line <a class="el" href="VideoMode_8hpp_source.php#l00103">103</a> of file <a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a9b3b2ad2cac6b9c266823fb5ed506d90"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned int sf::VideoMode::width</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Video mode width, in pixels. </p>

<p>Definition at line <a class="el" href="VideoMode_8hpp_source.php#l00102">102</a> of file <a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="VideoMode_8hpp_source.php">VideoMode.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
